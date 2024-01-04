<?php

try {
    $host = 'localhost';
    $dbname = 'porschedb';
    $dbuser = 'root';
    $dbpassword = '';
    $conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $dbuser, $dbpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected Successfully!<br>";

        $username = 'kha';
        $password = '123';
        $sql    = "SELECT * FROM `userdb` WHERE username='$username'
             AND password='" . md5($password) . "'";
        $stmt = $conn->query($sql);

} catch (PDOException $e) {
    die("Failed: " . $e->getMessage());
}
?>