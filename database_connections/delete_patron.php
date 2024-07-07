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

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_delete'])) {
    $delete_name = $_POST['delete_name'];

    $sql_delete = "DELETE FROM tbl_patron WHERE name LIKE '%$delete_name%'";

    if ($conn->query($sql_delete) === TRUE) {
        echo "Record deleted successfully";
        echo '<script>window.location="../works/CRUD.php";</script>';
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>
