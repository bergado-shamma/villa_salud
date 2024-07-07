<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_villa_salud";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$stmt = $conn->prepare("INSERT INTO tbl_patron (name, email, address, telephone, mobile, signature) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $name, $email, $address, $telephone, $mobile, $signature);

$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$telephone = $_POST['telephone'];
$mobile = $_POST['mobile'];
$signature = $_POST['signature'];

if ($stmt->execute()) {
    echo "New record created successfully";
    echo '<script>window.location="../works/CRUD.php";</script>';
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>