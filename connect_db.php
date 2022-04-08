<?php
function OpenConn(){
    $servername = "localhost";
    $database = "lukas_db";
    $username = "root";
    $password = "";
    // Создаем соединение
    $conn = mysqli_connect($servername,$username,$password,$database);
    // Проверяем соединение
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());

    }
    return $conn;
    }

?>