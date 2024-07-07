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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search_name = $_POST['search_name'];

    $sql = "SELECT * FROM tbl_patron WHERE name LIKE '%$search_name%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Search Results</h2>";
        echo "<table border='1'>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Telephone</th>
                    <th>Mobile Phone Num.</th>
                    <th>Signature</th>
                </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row['name'] . "</td>
                    <td>" . $row['email'] . "</td>
                    <td>" . $row['address'] . "</td>
                    <td>" . $row['telephone'] . "</td>
                    <td>" . $row['mobile'] . "</td>
                    <td>" . $row['signature'] . "</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
}

$conn->close();
?>