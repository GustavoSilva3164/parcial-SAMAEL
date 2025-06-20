<?php
session_start();
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $sql = "SELECT * FROM usuarios WHERE userEmail='$email' AND userPassword='$senha'";
    $result = $conn->query($sql);
    if ($result->num_rows === 1) {
        $_SESSION['usuario'] = $email;
        header("Location: index.php");
    } else {
        echo "Login inválido!";
    }
}
?>

<link rel="stylesheet" href="estilo.css">
<div class="container">
<form method="POST">
    <h2>Login</h2>
    <input type="email" name="email" placeholder="E-mail" required><br>
    <input type="password" name="senha" placeholder="Senha" required><br>
    <button type="submit">Entrar</button>
</form>
</div>