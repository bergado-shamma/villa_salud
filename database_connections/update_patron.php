<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_villa_salud";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br><br>";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_update'])) {
    $update_name = $_POST['update_name'];
    $update_email = $_POST['update_email'];
    $update_address = $_POST['update_address'];
    $update_telephone = $_POST['update_telephone'];
    $update_mobile = $_POST['update_mobile'];
    $update_signature = $_POST['update_signature'];

    $sql_update = "UPDATE tbl_patron 
                   SET email = '$update_email', 
                       address = '$update_address', 
                       telephone = '$update_telephone', 
                       mobile = '$update_mobile', 
                       signature = '$update_signature' 
                   WHERE name LIKE '%$update_name%'";

    if ($conn->query($sql_update) === TRUE) {
        echo "Record updated successfully";
        echo '<script>window.location="../works/CRUD.php";</script>';
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>
