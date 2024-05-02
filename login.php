<?php
require_once("db.php");
$login = $_POST["login"];
$password = $_POST["pass"];
if (empty($login) || empty($password)) {
    echo "Заполните пустые поля!";
} else {
    $sql = "SELECT * FROM staff WHERE login = '$login' AND password = '$password';";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            require_once("main_page.php");
        
        }
    } else {
        echo "Неправильный логин или пароль!";
    }
}
