<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
    <link rel="stylesheet" href="css/barraSup.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/copyright.css">
    <link rel="stylesheet" href="css/carrinho.css">
</head>
<body>

<?php
    include('barraSup.php');
    include('menu.php');
?>

<hr id="linhaMenu">

    <div class="body">

        <div class="sacola">
            <h3 id="suaSacola">Sua sacola</h3>

            <div class="prod">    
                <div class="imgProduto">
                    <img src="imgs/tenis/TN05.png" height="150px" width="150px" >
                    <p class="codProd">V1003800080001U44</p>
                </div>
                <div class="txtProd">
                    <div class="nomeProduto">
                        <h1>TN BRANCO COM VERMELHO</h1> <br/>
                    </div>
                    <div class="infoProduto">
                        <div class="tamQuant">
                            <div class="tam">
                                <p class="tamTitulo">TAMANHO</p>
                                <p class="tamNum">39</p>
                            </div>
                            <div class="quant">
                                <p class="quantTitulo">QUANTIDADE</p>
                                <p class="quantNum">1</p>
                            </div>
                        </div>
                        <div class="valoresProd">
                            <p class="valorUnit">Valor unitário: R$960,00</p>
                            <p class="valorTotal">Total: R$960,00 </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="resumo">
        
            <div class="tituloResumo">RESUMO DO PEDIDO</div>
            
            <div class="resumoPedido">
                <p id="nomeProd">TN BRANCO COM VERMELHO: R$960,00</p>
                <p id="total">Total: R$960,00 </p>
                <button id="concluirCompra">Concluir Compra</button>
            </div>

        </div>

    </div>

</body>
</html>