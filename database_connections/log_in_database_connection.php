<?php
session_start();

$conn = new mysqli('localhost', 'root', '', 'db_villa_salud');
if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tbl_log_in WHERE representative_username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $specialKey = strtoupper($row['special_key']);

        if (strpos($specialKey, 'ADMN') === 0) {
            $_SESSION['username'] = $username;
            header("Location: ../works/admin_dashboard.php");
            exit;
        } elseif (strpos($specialKey, 'REP') === 0) {
            $_SESSION['username'] = $username;
            header("Location: ../works/representative_dashboard.php");
            exit;
        } else {
            echo "<script>alert('Invalid special key. Please enter a valid Special Key.');</script>";
        }
    } else {
        echo "<script>alert('Invalid username or password. Please try again.');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
