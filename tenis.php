<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/barraSup.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/copyright.css">
    <link rel="stylesheet" href="css/prods.css">
    <title>Tela de Compra - Tênis</title>
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
                <label for="preco" class="labelSidebar">&gt; R$700</label> <br/>
            </div>
    </div>

<!-- PRODUTOS -->

    <div class="produtos">

        <hr id=linhaMenu>

        <div class="lin">
            
            <a href="TN01.php">
                <div class="prod">

                    <img src="imgs/tenis/TN01.png" class="imgProd"> <br/>

                    <div class="prodTxt">

                        <label for="img01" class="nomeProd">TÊNIS ADIDAS NMD R1 PRIMEBLUE BRANCO</label> <br/>
                        <div class="preco">
                            <label for="nomeProd" class="preco01">R$450,00</label>
                            <label for="nomeProd" class="preco02">R$346,50</label>
                        </div>
                        <div class="promo">
                            <label for="preco">23% OFF</label>
                        </div>

                    </div>

                </div>
            </a>
                
            <a href="TN02.php">
                <div class="prod">

                    <img src="imgs/tenis/TN02.png" class="imgProd"> <br/>

                    <div class="prodTxt">

                        <label for="imgProd" class="nomeProd">NIKE AIR JORDAN 3 RETRO BRANCO COM ROXO</label> <br/>
                        <div class="preco">
                            <label for="nomeProd" class="preco01">R$1500,00</label>
                            <label for="nomeProd" class="preco02">R$1050,00</label>
                        </div>
                        <div class="promo">
                            <label for="preco">30% OFF</label>
                        </div>
                        
                    </div>

                </div>
            </a>

            <a href="TN03.php">
                <div class="prod">

                    <img src="imgs/tenis/TN03.png" class="imgProd"> <br/>

                    <div class="prodTxt">

                        <label for="imgProd" class="nomeProd">NIKE AIR JORDAN 1 LOW OG BRANCO COM AZUL</label> <br/>
                        <div class="preco">
                            <label for="nomeProd" class="preco01">R$500,00</label>
                            <label for="nomeProd" class="preco02">R$375,00</label>
                        </div>
                        <div class="promo">
                            <label for="preco">25% OFF</label>
                        </div>
                        
                    </div>

                </div>
            </a>

            <a href="TN04.php">
                <div class="prod">

                    <img src="imgs/tenis/TN04.png" class="imgProd"> <br/>

                    <div class="prodTxt">

                        <label for="imgProd" class="nomeProd">NIKE AIR JORDAN 1 HIGH OG GREY FOG BRANCO COM PRETO</label> <br/>
                        <div class="preco">
                            <label for="nomeProd" class="preco01">R$1500,00</label>
                            <label for="nomeProd" class="preco02">R$1155,00</label>
                        </div>
                        <div class="promo">
                            <label for="preco">23% OFF</label>
                        </div>
                        
                    </div>

                </div>
            </a>
        </div>

        <div class="lin">
            
            <a href="TN05.php">
                <div class="prod">
                
                    <img src="imgs/tenis/TN05.png" class="imgProd"> <br/>

                    <div class="prodTxt">

                        <label for="img01" class="nomeProd">NIKE BRANCO COM VERMELHO</label> <br/>
                        <div class="preco">
                            <label for="nomeProd" class="preco01">R$1200,00</label>
                            <label for="nomeProd" class="preco02">R$960,00</label>
                        </div>
                        <div class="promo">
                            <label for="preco">20% OFF</label>
                        </div>

                    </div>
                
                </div>
            </a>
            
            <a href="TN06.php">
                <div class="prod">

                    <img src="imgs/tenis/TN06.png" class="imgProd"> <br/>

                    <div class="prodTxt">

                        <label for="imgProd" class="nomeProd">TÊNIS NIKE SB FORCE 58 PRETO</label> <br/>
                        <div class="preco">
                            <label for="nomeProd" class="preco01">R$450,00</label>
                            <label for="nomeProd" class="preco02">R$279,00</label>
                        </div>
                        <div class="promo">
                            <label for="preco">38% OFF</label>
                        </div>
                        
                    </div>

                </div>
            </a>

            <a href="TN07.php">
                <div class="prod">
                    <img src="imgs/tenis/TN07.png" class="imgProd"> <br/>

                    <div class="prodTxt">

                        <label for="imgProd" class="nomeProd">ADIDAS FORUM LOW X JEREMY SCOTT BEGE 1</label> <br/>
                        <div class="preco">
                            <label for="nomeProd" class="preco01">R$599,99</label>
                            <label for="nomeProd" class="preco02">R$319,99</label>
                        </div>
                        <div class="promo">
                            <label for="preco">30% OFF</label>
                        </div>
                        
                    </div>

                </div>
            </a>

            <a href="TN08.php">
                <div class="prod">
                    <img src="imgs/tenis/TN08.png" class="imgProd"> <br/>

                    <div class="prodTxt">

                        <label for="imgProd" class="nomeProd">ADIDAS X_PLR CINZA 1</label> <br/>
                        <div class="preco">
                            <label for="nomeProd" class="preco01">R$379,90</label>
                            <label for="nomeProd" class="preco02">R$269,72</label>
                        </div>
                        <div class="promo">
                            <label for="preco">29% OFF</label>
                        </div>
                        
                    </div>

                </div>
            </a>

        </div>

    </div>

</div>


    <!-- COPYRIGHT -->

    <?php
        include('copyright.php')
    ?>


    <script>
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