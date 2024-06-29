<?php
// Подключение к базе данных
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "mybd";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

$id = $_POST['lecture_id'];

$sql = "DELETE FROM lecture WHERE id_lecture=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: index3.html"); // Перенаправление обратно на страницу управления лекциями
} else {
    echo "Error deleting record: ". $conn->error;
}

$conn->close();
?>
