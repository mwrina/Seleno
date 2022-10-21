<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/barraSup.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/copyright.css">
    <link rel="stylesheet" href="css/prodsMasc.css">
    <title>Tela de Compra - Masculinas</title>
</head>
<body>
    
    <?php
        include("barraSup.php");
        include("menu.php");
    ?>

<div class="body">

<!-- SIDEBAR -->

    <div class="sidebar">
        <h1>Roupas Masculinas</h1>
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

        <a href="CAL04.php">
            <div class="prod">
                <img src="imgs/calcas/CAL04.jpg" class="imgProd"> <br/>

                <div class="prodTxt">

                    <label for="imgProd" class="nomeProd">CALÇA VANS AUTHENTIC CHINO RELAXED MASCULINA</label> <br/>
                    <div class="preco">
                        <label for="nomeProd" class="preco01">R$399,99</label>
                        <label for="nomeProd" class="preco02">R$283,99</label>
                    </div>
                    <div class="promo">
                        <label for="preco">29% OFF</label>
                    </div>
                    
                </div>

            </div>
        </a>
            
        <a href="CAL05.php">
            <div class="prod">
                <img src="imgs/calcas/CAL05.jpg" class="imgProd"> <br/>

                <div class="prodTxt">

                    <label for="img01" class="nomeProd">CALÇA VANS AUTHENTIC CHINO GLIDE RELAXTAPER MASCULINA</label> <br/>
                    <div class="preco">
                        <label for="nomeProd" class="preco01">R$479,99</label>
                        <label for="nomeProd" class="preco02">R$359,99</label>
                    </div>
                    <div class="promo">
                        <label for="preco">25% OFF</label>
                    </div>

                </div>
            
            </div>
        </a>

        <a href="CAL08.php">
            <div class="prod">
                <img src="imgs/calcas/CAL08.jpg" class="imgProd"> <br/>

                <div class="prodTxt">

                    <label for="imgProd" class="nomeProd">CALÇA NIKE AIR MASCULINA - JUST DO IT</label> <br/>
                    <div class="preco">
                        <label for="nomeProd" class="preco01">R$629,99</label>
                        <label for="nomeProd" class="preco02">R$409,99</label>
                    </div>
                    <div class="promo">
                        <label for="preco">35% OFF</label>
                    </div>
                    
                </div>

            </div>
        </a>
        
        <a href="MT01.php">    
            <div class="prod">
                <img src="imgs/moletons/MT01.png" class="imgProd"> <br/>

                <div class="prodTxt">

                    <label for="img01" class="nomeProd">MOLETOM NIKE SPORTWEAR MASCULINO - AUTHORIZED PERSONNEL ONLY</label> <br/>
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

        </div>
        
        <div class="lin">

        <a href="MT04.php">
                <div class="prod">
                    <img src="imgs/moletons/MT04.jpg" class="imgProd"> <br/>

                    <div class="prodTxt">

                        <label for="imgProd" class="nomeProd">CASACO NIKE SPORTWEAR MASCULINO - HAVE A NIKE DAY</label> <br/>
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

            <a href="MT05.php">
                <div class="prod">
                    <img src="imgs/moletons/MT05.png" class="imgProd"> <br/>

                    <div class="prodTxt">

                        <label for="img01" class="nomeProd">CASACO NIKE AIR MASCULINO</label> <br/>
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

            <a href="MT07.php">
                <div class="prod">
                    <img src="imgs/moletons/MT07.png" class="imgProd"> <br/>

                    <div class="prodTxt">

                        <label for="imgProd" class="nomeProd">BLUSÃO JORDAN SPORT DNA MASCULINO</label> <br/>
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

            <a href="CAM02.php">
                <div class="prod">
                    <img src="imgs/camisetas/CAM02.png" class="imgProd"> <br/>

                    <div class="prodTxt">

                        <label for="imgProd" class="nomeProd">CAMISETA PUMA HC POCKET MASCULINA</label> <br/>
                        <div class="preco">
                            <label for="nomeProd" class="preco01">R$130,00</label>
                            <label for="nomeProd" class="preco02">R$80,00</label>
                        </div>
                        <div class="promo">
                            <label for="preco">38% OFF</label>
                        </div>
                        
                    </div>

                </div>
            </a>

            </div>

            <div class="lin">

            <a href="CAM03.php">
                <div class="prod">
                    <img src="imgs/camisetas/CAM03.png" class="imgProd"> <br/>

                    <div class="prodTxt">

                        <label for="imgProd" class="nomeProd">CAMISETA PUMA RARE BASKETBALL MASCULINA</label> <br/>
                        <div class="preco">
                            <label for="nomeProd" class="preco01">R$150,00</label>
                            <label for="nomeProd" class="preco02">R$127,50</label>
                        </div>
                        <div class="promo">
                            <label for="preco">15% OFF</label>
                        </div>
                        
                    </div>

                </div>
            </a>

            <a href="CAM06.php">
                <div class="prod">
                    <img src="imgs/camisetas/CAM06.png" class="imgProd"> <br/>

                    <div class="prodTxt">

                        <label for="imgProd" class="nomeProd">CAMISETA JORDANS THE SHOES MASCULINA</label> <br/>
                        <div class="preco">
                            <label for="nomeProd" class="preco01">R$350,00</label>
                            <label for="nomeProd" class="preco02">R$280,00</label>
                        </div>
                        <div class="promo">
                            <label for="preco">20% OFF</label>
                        </div>
                        
                    </div>

                </div>
            </a>

            <a href="CAM07.php">
                <div class="prod">
                    <img src="imgs/camisetas/CAM07.png" class="imgProd"> <br/>

                    <div class="prodTxt">

                        <label for="imgProd" class="nomeProd">CAMISETA NIKE SB MASCULINA</label> <br/>
                        <div class="preco">
                            <label for="nomeProd" class="preco01">R$149,99</label>
                            <label for="nomeProd" class="preco02">R$104,99</label>
                        </div>
                        <div class="promo">
                            <label for="preco">30% OFF</label>
                        </div>
                        
                    </div>

                </div>
            </a>

            <a href="CAM08.php">
                <div class="prod">
                    <img src="imgs/camisetas/CAM08.png" class="imgProd"> <br/>

                    <div class="prodTxt">

                        <label for="imgProd" class="nomeProd">CAMISETA NIKE BASQUETE CASUAL MASCULINA - JUST DO IT</label> <br/>
                        <div class="preco">
                            <label for="nomeProd" class="preco01">R$109,90</label>
                            <label for="nomeProd" class="preco02">R$78,02</label>
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