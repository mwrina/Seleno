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
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

    <?php
        include('barraSup.php');
    ?>

    <div id="geral">
        <div class="login">
            <h3>Já sou cliente</h3>

            <form action="php/login.php" method="post">
                
                <div class="email">
                    <label for="email" id="labelInput">E-mail</label> <br/>
                    <input type="email" id="email" name="email"> <br/>
                </div>

                <div class="senha">
                    <label for="senha" id="labelInput">Senha</label> <br/>
                    <input type="password" id="senha" name="senha"> <br/>
                </div>

                <input type="submit" value="Entrar" id="entrar" name="entrar">

            </form>

        </div>

        <div class="vl"></div>

        <div class="cadastro">

            <h3>Cadastrar-se</h3>

            <form action="doRegister1.php" method="post">
                <div class="email">
                    <label for="email" id="labelInput">E-mail</label> <br/>
                    <input type="email" id="email" name="email"> <br/>
                </div>

                <a href="cadastro.php">
                    <input type="button" value="Continuar" id="continuar" name="continuar">
                </a>
            </form>

        </div>

    </div>

    <div class="bottomDiv">
        <div class="bandeiras">
            <img src="imgs/cartao/visa.jpg" id="bandeiraCartao">
            <img src="imgs/cartao/elo.jpg" id="bandeiraCartao">
            <img src="imgs/cartao/paypal.jpg" id="bandeiraCartao">
            <img src="imgs/cartao/mastercard.jpg" id="bandeiraCartao">
            <img src="imgs/cartao/boletobancario.jpg" id="bandeiraCartao">
            <img src="imgs/cartao/pix.jpg" id="bandeiraCartao">
        </div>

<!-- COPYRIGHT -->

        <?php
            include('copyright.php')
        ?>

    </div>

</body>