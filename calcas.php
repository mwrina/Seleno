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
    <title>Tela de Compra - Calças</title>
</head>
<body>
    
    <?php
        include("barraSup.php");
        include("menu.php");
    ?>

<div class="body">

<!-- SIDEBAR -->

    <div class="sidebar">
        <h1>Calças</h1>
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
            
            <a href="CAL01.php">
                <div class="prod">
                    <img src="imgs/calcas/CAL01.jpg" class="imgProd"> <br/>

                    <div class="prodTxt">

                        <label for="img01" class="nomeProd">CALÇA JORDAN X PARIS SAINT-GERMAIN FEMININA</label> <br/>
                        <div class="preco">
                            <label for="nomeProd" class="preco01">R$449,99</label>
                            <label for="nomeProd" class="preco02">R$314,99</label>
                        </div>
                        <div class="promo">
                            <label for="preco">30% OFF</label>
                        </div>

                    </div>
                
                </div>
            </a>

        <a href="CAL02.php">
            <div class="prod">
                <img src="imgs/calcas/CAL02.jpg" class="imgProd"> <br/>

                <div class="prodTxt">

                    <label for="imgProd" class="nomeProd">NIKE SPORTSWEAR ICON CLASH FEMININA</label> <br/>
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

        <a href="CAL03.php">
            <div class="prod">
                <img src="imgs/calcas/CAL03.jpg" class="imgProd"> <br/>

                <div class="prodTxt">

                    <label for="imgProd" class="nomeProd">CALÇA NIKE SPORTSWEAR ESSENTIAL COLLECTION FEMININA</label> <br/>
                    <div class="preco">
                        <label for="nomeProd" class="preco01">R$349,99</label>
                        <label for="nomeProd" class="preco02">R$249,99</label>
                    </div>
                    <div class="promo">
                        <label for="preco">29% OFF</label>
                    </div>
                    
                </div>

            </div>
        </a>

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

        </div>

        <div class="lin">
            
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

            <a href="CAL06.php">
                <div class="prod">
                    <img src="imgs/calcas/CAL06.jpg" class="imgProd"> <br/>

                    <div class="prodTxt">

                        <label for="imgProd" class="nomeProd">CALÇA NIKE X HELLO KITTY AZUL UNISSEX</label> <br/>
                        <div class="preco">
                            <label for="nomeProd" class="preco01">R$412,77</label>
                            <label for="nomeProd" class="preco02">R$288,93</label>
                        </div>
                        <div class="promo">
                            <label for="preco">30% OFF</label>
                        </div>
                        
                    </div>

                </div>
            </a>

            <a href="CAL07.php">
                <div class="prod">
                    <img src="imgs/calcas/CAL07.jpg" class="imgProd"> <br/>

                    <div class="prodTxt">

                        <label for="imgProd" class="nomeProd">CALÇA LEGGING NIKE ONE 2.0 FEMININA</label> <br/>
                        <div class="preco">
                            <label for="nomeProd" class="preco01">R$279,99</label>
                            <label for="nomeProd" class="preco02">R$132,99</label>
                        </div>
                        <div class="promo">
                            <label for="preco">52% OFF</label>
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

            </div>
        </a>

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