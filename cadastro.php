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
    <link rel="stylesheet" href="css/cadastro.css">
</head>
<body>

<?php
  include('barraSup.php')
?>

<form action="php/cadastro.php" method="post">

<!-- DADOS PESSOAIS-->

  <div class="fieldset">
    <fieldset>

      <legend>Dados Pessoais</legend>
   
        <div class="nomeSobrenome">

          <div class="nome">
            <label for="nome">Nome: </label> <br/>
            <input type="text" name="nome" id="nome" required>
          </div>
          
          <div class="sobrenome">
            <label for="sobrenome">Sobrenome: </label> <br/>
            <input type="text" name="sobrenome" id="nome" required>
          </div>

        </div>

        <div class="nascCPFTel">

          <div class="nasc">
            <label for="nasc">Nascimento</label> <br/>
            <input type="date" name="nasc" id="nasc" placeholder="dd/mm/aaaa" required>
          </div>

          <div class="cpf">
            <label for="cpf">CPF</label> <br/>
            <input type="number" name="cpf" id="cpf" placeholder="Por favor, somente números" required>
          </div>

          <div class="tel">
            <label for="tel">Telefone</label> <br/>
            <input type="tel" name="tel" id="tel" placeholder="xx xxxxxxxx" required>
          </div>

        </div>

        <div class="cepEnd">
          
          <div class="cep">
            <label for="cep">CEP</label> <br/>
            <input type="number" name="cep" id="cep" placeholder="xxxxx xxx" required>
          </div>

          <div class="end">
            <label for="end">Endereço</label> <br/>
            <input type="text" name="end" id="end" required>
          </div>

        </div>

        <div class="complementoEstado">

          <div class="complemento">
            <label for="complemento">Complemento</label> <br/>
            <input type="text" name="complemento" id="complemento" required>
          </div>

          <div class="estado">
            <label for="estado">Estado</label> <br/>
            <select name="estado"> 
              <option value="ac">AC</option> 
              <option value="al">AL</option> 
              <option value="ap">AP</option> 
              <option value="am">AM</option> 
              <option value="ba">BA</option> 
              <option value="ce">CE</option> 
              <option value="df">DF</option> 
              <option value="es">ES</option> 
              <option value="go">GO</option> 
              <option value="ma">MA</option> 
              <option value="mt">MT</option> 
              <option value="ms">MS</option> 
              <option value="mg">MG</option> 
              <option value="pa">PA</option> 
              <option value="pb">PB</option> 
              <option value="pr">PR</option> 
              <option value="pe">PE</option> 
              <option value="pi">PI</option> 
              <option value="rj">RJ</option> 
              <option value="rn">RN</option> 
              <option value="ro">RO</option> 
              <option value="rs">RS</option> 
              <option value="rr">RR</option> 
              <option value="sc">SC</option> 
              <option value="se">SE</option> 
              <option value="sp">SP</option> 
              <option value="to">TO</option> 
            </select>
          </div>

        </div>

        <div class="cidade">
          <label for="cidade">Cidade</label> <br/>
          <input type="text" name="cidade" id="cidade" required>
        </div>

        <div class="emailConfirm">

          <div class="email">
            <label for="email">E-mail</label> <br/>
            <input type="email" name="email" id="email" required>
          </div>

          <div class="confirmEmail">
            <label for="confirmEmail">Confirmar E-mail</label> <br/>
            <input type="email" name="confirmEmail" id="email" required>
          </div>

        </div>

        <div class="senhaConfirm">

          <div class="senha">
            <label for="senha">Senha</label> <br/>
            <input type="password" name="senha" id="senha" required>
          </div>

          <div class="confirmSenha">
            <label for="confirmSenha">Confirmar Senha</label> <br/>
            <input type="password" name="confirmSenha" id="senha" required>
          </div>
        </div>
    </fieldset>
  </div>

<!-- BOTOES -->

  <div class="botoes">
    <input type="submit" name="cadastrar" id="cadastrar" value="Cadastrar">
    <input type="reset" name="limpar" id="limpar" value="Limpar">
  </div>

</form>

<!-- COPYRIGHT -->

  <?php
    include('copyright.php')
  ?>


</body>
</html>