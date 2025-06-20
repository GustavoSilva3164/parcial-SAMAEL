<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Guardian Tales - Portal</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<header>
    <img src="imagens/banner.jpg" alt="Logo Guardian Tales">
</header>

<div class="container">
    <h2>História do Jogo</h2>
    <p>
        Guardian Tales é um RPG de ação com elementos de quebra-cabeça, onde você embarca em uma aventura épica com heróis únicos.
        Explore reinos mágicos, lute contra monstros e salve o mundo de Kanterbury das forças do mal.
    </p>

    <?php if (isset($_SESSION['usuario'])): ?>
        <div class="galeria">
            <img src="imagens/imglist.jpeg" alt="Gameplay">
            <img src="imagens/images.jpeg" alt="Gameplay"> 
            <img src="imagens/imglist1.jpeg" alt="Gameplay">
            <img src="imagens/imglist3.jpeg" alt="Gameplay">
            <img src="imagens/imagelist4.jpeg" alt="Gameplay">
            <img src="imagens/imglist5.jpeg" alt="Gameplay">
            <img src="imagens/imglist6.jpeg" alt="Gameplay">
            <img src="imagens/imglist7.jpeg" alt="Gameplay">
            <img src="imagens/imglist8.jpeg" alt="Gameplay">
            <img src="imagens/imglist9.jpeg" alt="Gameplay">
            <img src="imagens/imglist10.jpeg" alt="Gameplay">
        </div>
        <a href="personagens.php"><button>Ver História dos Personagens</button></a><br><br>
        <a href="logout.php"><button>Sair da Conta</button></a>
    <?php else: ?>
        <a href="login.php"><button>Login</button></a>
        <a href="register.php"><button>Registrar</button></a>
    <?php endif; ?>
</div>

</body>
</html>