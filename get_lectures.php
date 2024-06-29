<?php
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

$sql = "SELECT * FROM lecture";
$result = $conn->query($sql);

$lectures = array();
while($row = $result->fetch_assoc()) {
    $lectures[] = $row;
}

echo json_encode($lectures);

$conn->close();
?>
