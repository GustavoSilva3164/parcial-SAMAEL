<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "local_flix";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>