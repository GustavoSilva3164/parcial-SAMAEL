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
    <h2>Guardian Tales – O Início da Jornada do Guardião</h2>
    <p>
O mundo de Kanterbury estava em paz, protegido por seus cavaleiros e guiado pela sabedoria da Deusa. No coração do reino, a pequena princesa vivia em segurança, cercada por conselheiros, soldados e sua figura mais fiel: o Guardião, um jovem cavaleiro recém-designado.

Mas tudo mudou quando os Invasores Dimensionais surgiram, abrindo portais de energia corrompida e lançando um ataque ao castelo. Em meio ao caos, o Guardião lutou para proteger a princesa, mas foi separado dela após uma explosão causada pela tecnologia dos inimigos. Assim começou sua jornada.

Desorientado e em uma terra desconhecida, o Guardião percebe que sua missão vai muito além de proteger a princesa: ele precisa entender a origem dos portais, impedir o avanço dos invasores e salvar os diversos mundos ameaçados pela corrupção dimensional.

Durante sua caminhada inicial, o Guardião encontra aliados inusitados, enfrenta monstros corrompidos e descobre que, a cada região, os portais trazem não só destruição, mas também pistas sobre algo maior — uma profecia antiga, que talvez tenha ligação direta com ele.

Ele ainda não sabe que encontrará deuses esquecidos, heróis lendários, cidades flutuantes e dimensões onde o tempo não existe. Mas uma coisa é certa: o destino do mundo inteiro pode depender das escolhas que ele fará a partir daqui.

E assim, com a espada em punho e a coragem no coração, o Guardião dá seu próximo passo — não apenas para reencontrar a princesa, mas para enfrentar aventuras que nenhum herói jamais ousou sonhar.
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
