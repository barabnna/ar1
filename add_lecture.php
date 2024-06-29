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

$title = $_POST['lecture_title'];
$content = $_POST['lecture_content'];

$sql = "INSERT INTO lecture (title_lecture, text_lecture) VALUES ('$title', '$content')";

if ($conn->query($sql) === TRUE) {
    header("Location: index3.html"); // Перенаправление обратно на страницу управления лекциями
} else {
    echo "Error: ". $sql. "<br>". $conn->error;
}

$conn->close();
?>
