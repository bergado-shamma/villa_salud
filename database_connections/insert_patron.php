<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_villa_salud";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO tbl_patron (patron_id, name, email, address, telephone, mobile, signature) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $patron_id, $name, $email, $address, $telephone, $mobile, $signature);

$patron_id = generateRandomId();

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

function generateRandomId($length = 8)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomId = '';

    for ($i = 0; $i < $length; $i++) {
        $randomId .= $characters[rand(0, $charactersLength - 1)];
    }

    return $randomId;
}
?>