<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="css/barraSup.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/copyright.css">
    <link rel="stylesheet" href="css/inicio.css">
</head>
<body>

<?php
    include("barraSup.php");
    include("menu.php");
?>

<!-- CORPO DA PÁGINA -->

<div class="body">
    
    <div class="promos">
        <img src="imgs/tela_ini/promo01.png" id="promo01">
        <img src="imgs/tela_ini/promo02.png" id="promo02">
        <img src="imgs/tela_ini/promo03.png" id="promo03">
    </div>

    <div class="promos2">

        <a href="moletom.php">
            <div class="moletom">
                <img src="imgs/tela_ini/moletom.png" id="moletom"> <br/>
                <label for="moletom">Moletons a partir de R$120,00</label>
            </div>
        </a>

        <a href="calcas.php">
            <div class="calca">
                <img src="imgs/tela_ini/calca.png" id="calca"> <br/>
                <label for="calca">Calças a partir de R$80,00</label>
            </div>
        </a>

        <a href="camisetas.php">
            <div class="camiseta">
                <img src="imgs/tela_ini/camiseta.png" id="camiseta"> <br/>
                <label for="camiseta">Camisetas a partir de R$79,90</label>
            </div>
        </a>

        <a href="tenis.php">
        <div class="tenis">
            <img src="imgs/tela_ini/tenis.png" id="tenis"> <br/>
            <label for="tenis">Tênis a partir de R$190,00</label>
        </div>
        </a>

    </div>

<!-- COPYRIGHT -->
    <?php
        include('copyright.php')
    ?>

</div>

</body>
</html>