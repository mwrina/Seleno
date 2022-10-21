<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/barraSup.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/copyright.css">
    <link rel="stylesheet" href="css/compraCam.css">
    <title>Tela de Compra - Blusão Jordan Sport DNA Masculino</title>
</head>
<body>
    
    <?php
        include("barraSup.php");
        include("menu.php");
    ?>

<div class="body">

    <!-- SIDEBAR -->

    <div class="sidebar">
        <h1>Tênis</h1>
        <hr>
        <h2>Filtrar por:</h2>

        <button type="button" class="collapsible">Marca</button>
            <div class="conteudo">
                <input type="checkbox" id="jordans" name="jordans" value="Jordans">
                <label for="jordans" class="labelSidebar">Jordans</label> <br/>
                <input type="checkbox" id="adidas" name="adidas" value="Adidas">
                <label for="adidas" class="labelSidebar">Adidas</label> <br/>
                <input type="checkbox" id="nike" name="nike" value="Nike">
                <label for="nike" class="labelSidebar">Nike</label> <br/>
                <input type="checkbox" name="vans" value="Vans">
                <label for="vans" class="labelSidebar">Vans</label> <br/>
            </div>
        <button type="button" class="collapsible">Preço</button>
            <div class="conteudo">
                <input type="checkbox" id="preco" name="preco1">
                <label for="preco" class="labelSidebar">&lt; R$200</label> <br/>
                <input type="checkbox" id="preco" name="preco2">
                <label for="preco" class="labelSidebar">&lt; R$400</label> <br/>
                <input type="checkbox" id="preco" name="preco3">
                <label for="preco" class="labelSidebar">&lt; R$550</label> <br/>
                <input type="checkbox" id="preco" name="preco4">
                <label for="preco" class="labelSidebar">&gt; R$550</label> <br/>
            </div>
    </div>

<!-- GERAL -->

    <div class="geral">

        <div class="imgProd">
            <img src="imgs/moletons/MT07.png" id="imgProd">
        </div>

        <div class="lateralProd">

            <div id="promo">
                <p>30% OFF</p>
            </div>

            <div id="preco">
                <p id="preco1">R$599,99</p>
                <p id="preco2">R$319,99</p>
            </div>

            <div id="titulo">
                <h1>BLUSÃO JORDAN SPORT DNA MASCULINO</h1>
            </div>

            <div class="tamanhos">
            <form>

                <div class="linTam">
                    <div class="tam1">
                        <button name="tamanho" class="tam">PP</button>
                    </div>

                    <div class="tam1">
                        <button name="tamanho" class="tam">P</button>
                    </div>
                    <div class="tam1">
                        <button name="tamanho" class="tam">M</button>
                    </div>

                    <div class="tam1">
                        <button name="tamanho" class="tam">G</button>
                    </div>

                    <div class="tam1">
                        <button name="tamanho" class="tam">GG</button>
                    </div>

                    <div class="tam1">
                        <button name="tamanho" class="tam">XGG</button>
                    </div>
                </div>

            </div>

            <div class="guiaTam">
                <img src="imgs/vetores/regua.png" id="regua">
                <div class="labelRegua">
                    <label for="regua">Guia de tamanhos</label>
                </div>
            </div>

            <div class="botoes">
                <div class="botoes1">
                    <input type="submit" value="Comprar" id="comprar">
                    <button id="addCarrinho" onclick="carrinho()">Adicionar ao Carrinho</button>
                </div>
            </div>

        </form>

            <div class="consultaFrete">
                <p>Consulte aqui seu frente com base em seu CEP</p>
                <div class=inputsConsultaFrete>
                    <input type="text" placeholder="Digite aqui seu CEP..." id="cep">
                    <input type="submit" value="Consultar" onclick="consultaCep()" id="consultar">
                </div>
            </div>
        </div>

    </div>

</div>

<?php
    include('copyright.php')
?>

<!-- =============================================================================== -->

<script src="js/compraProd.js">
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {

    coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var conteudo = this.nextElementSibling;
        if (conteudo.style.display === "block") {
        conteudo.style.display = "none";
        } else {
        conteudo.style.display = "block";
        }
    });

    }
</script>

</body>
</html> 