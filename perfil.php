<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/barraSup.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/copyright.css">
    <link rel="stylesheet" href="css/perfil.css">
    <title>Seu Perfil</title>
</head>
<body>
    
    <?php
        include("barraSup.php");
    ?>

    <div class="divGeral">
        <form action="attPerfil.php" method="post">
            <div class="divGeral1">

                <div class="foto">
                    <img src="imgs/vetores/fotoPerfil.png" id=fotoPerfil>
                </div>

                <div class="inputs">

                    <div class="nomes">
                        <div class="nome">
                            <label for="nome" id="labelNome">Nome</label> <br/>
                            <input type="text" name="nome" id="nome">
                        </div>
                        <div class="sobrenome">
                            <label for="sobrenome" id="labelSobrenome">Sobrenome</label> <br/>
                            <input type="text" name="sobrenome" id="sobrenome">
                        </div>
                    </div>

                    <div class="aniversario">
                        <label for="aniv" id="labelAniv">Aniversário</label> <br/>
                        <input type="date" name="aniv" id="aniv">
                    </div>

                    <div class="end">
                        <div class="cidade">
                            <label for="cidade" id="labelCidade">Cidade</label> <br/>
                            <input type="text" name="cidade" id="cidade">
                        </div>
                        <div class="estado">
                            <label for="estado" id="labelEstado">Estado</label> <br/>
                            <select id=estado>
                                <option name="AC">AC</option>
                                <option name="AL">AL</option>
                                <option name="AP">AP</option>
                                <option name="AM">AM</option>
                                <option name="BA">BA</option>
                                <option name="CE">CE</option>
                                <option name="DF">DF</option>
                                <option name="ES">ES</option>
                                <option name="GO">GO</option>
                                <option name="MA">MA</option>
                                <option name="MT">MT</option>
                                <option name="MS">MS</option>
                                <option name="MG">MG</option>
                                <option name="PA">PA</option>
                                <option name="PB">PB</option>
                                <option name="PR">PR</option>
                                <option name="PE">PE</option>
                                <option name="PI">PI</option>
                                <option name="RJ">RJ</option>
                                <option name="RN">RN</option>
                                <option name="RS">RS</option>
                                <option name="RO">RO</option>
                                <option name="RR">RR</option>
                                <option name="SC">SC</option>
                                <option name="SP">SP</option>
                                <option name="SE">SE</option>
                                <option name="TO">TO</option>
                            </select>
                        </div>
                        <div class="endereco">
                            <label for="endereco" id="labelEndereco">Endereço</label> <br/>
                            <input type="text" name="endereco" id="endereco">
                        </div>
                    </div>

                    <div class="tel">
                        <label for="tel" id="labelTel">Telefone</label> <br/>
                        <input type="text" name="tel" id="tel">
                    </div>

                </div>

            </div>

            <div class="divGeral2">

                <div class="senha">
                    <div class="senha1">
                        <label for="senha1" id="labelSenha1">Senha</label> <br/>
                        <input type="password" name="senha1" id="senha1">
                    </div>
                    <div class="senha2">
                        <label for="senha2" id="labelSenha2">Confirmar Senha</label> <br/>
                        <input type="password" name="senha2" id="senha2">
                    </div>
                </div>

                <div class="btConfirmarAlts">
                    <input type="submit" id="confirmarAlts" value="Confirmar Alterações"> 
                </div>

            </div>
        </form>
    </div>

    <!-- COPYRIGHT -->

    <?php
        include('copyright.php')
    ?>

</body>
</html>