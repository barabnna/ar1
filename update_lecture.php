<?php
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mybd";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

$id = $_POST['lecture_id'];
$title = $_POST['lecture_title'];
$content = $_POST['lecture_content'];

$sql = "UPDATE lecture SET title_lecture='$title', text_lecture='$content' WHERE id_lecture=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: index3.html"); // Перенаправление обратно на страницу управления лекциями
} else {
    echo "Error updating record: ". $conn->error;
}

$conn->close();
?>
