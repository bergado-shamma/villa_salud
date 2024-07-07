<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli('localhost', 'root', '', 'db_villa_salud');
if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
} else {
    $check_username_sql = "SELECT * FROM tbl_sign_up WHERE username = ?";
    $check_username_stmt = $conn->prepare($check_username_sql);
    $check_username_stmt->bind_param("s", $username);
    $check_username_stmt->execute();
    $check_username_result = $check_username_stmt->get_result();

    $check_email_sql = "SELECT * FROM tbl_sign_up WHERE email = ?";
    $check_email_stmt = $conn->prepare($check_email_sql);
    $check_email_stmt->bind_param("s", $email);
    $check_email_stmt->execute();
    $check_email_result = $check_email_stmt->get_result();

    if ($check_username_result->num_rows > 0) {
        echo "<script>alert('Username already exists. Please choose a different username.');</script>";
        echo "<script>window.location='../works/sign_up.php';</script>";
    } elseif ($check_email_result->num_rows > 0) {
        echo "<script>alert('Email address already exists. Please use a different email.');";
        echo "window.location='../works/sign_up.php';</script>";
    } else {
        $insert_sql = "INSERT INTO tbl_sign_up (username, email, password) VALUES (?, ?, ?)";
        $insert_stmt = $conn->prepare($insert_sql);
        $insert_stmt->bind_param("sss", $username, $email, $password);

        if ($insert_stmt->execute()) {
            echo "<script>alert('Registration successful!');";
            echo "window.location='../works/log_in.php';</script>";
        } else {
            echo "<script>alert('Error registering user. Please try again later.');";
            echo "window.location='../works/sign_up.php';</script>";
        }

        $insert_stmt->close();
    }

    $check_username_stmt->close();
    $check_email_stmt->close();
    $conn->close();
}
?>
