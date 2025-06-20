<?php
require 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $cpf = $_POST["cpf"];
    $telefone = $_POST["telefone"];
    $nasc = $_POST["nascimento"];
    $sql = "INSERT INTO usuarios (userName, userEmail, userPassword, userCpf, userPhone, userBirth)
            VALUES ('$nome', '$email', '$senha', '$cpf', '$telefone', '$nasc')";
if ($conn->query($sql) === TRUE) {
    header("Location: login.php");
} else {
    if ($conn->errno == 1062) {
        echo "<p style='color:red;'>Erro: E-mail, CPF ou telefone já cadastrado.</p>";
    } else {
        echo "<p style='color:red;'>Erro: " . $conn->error . "</p>";
    }
}

}
?>

<link rel="stylesheet" href="estilo.css">
<div class="container">
<form method="POST">
    <h2>Cadastro</h2>
    <input type="text" name="nome" placeholder="Nome" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="senha" placeholder="Senha" required><br>
    <input type="text" name="cpf" placeholder="CPF" required><br>
    <input type="text" name="telefone" placeholder="Telefone" required><br>
    <input type="date" name="nascimento" required><br>
    <button type="submit">Registrar</button>
</form>
</div>