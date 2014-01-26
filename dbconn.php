<?php
$host = 'localhost'; // хост
$user = 'gtest'; // пользователь mysql
$pass = '12345678'; // пароль
$db = 'example_db';  // имя базы
 
// коннект
$conn = mysql_connect($host, $user, $pass) or die(mysql_error());
        mysql_select_db($db, $conn) or die(mysql_error());
?>