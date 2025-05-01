<?php
$servername = "localhost"; 
$username   = "root";
$password   = "";
$dbname     = "futras_master_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

$conn->set_charset("utf8");
?>
