<?php

    include_once('connect.php');

    $nome = '';
    $sobrenome = '';
    $nasc = '';
    $cpf = '';
    $tel = '';
    $cep = '';
    $end = '';
    $complemento = '';
    $estado = '';
    $cidade = '';
    $email = '';
    $confirmEmail = '';
    $senha = '';
    $confirmSenha = '';
    $cadastrar = '';
    
    if(!empty ($_POST['nome'])){
        $nome = $_POST['nome'];
    }
    
    if(!empty ($_POST['sobrenome'])){
        $sobrenome = $_POST['sobrenome'];
    }

    if(!empty ($_POST['nasc'])){
        $nasc = $_POST['nasc'];
    }

    if(!empty ($_POST['cpf'])){
        $cpf = $_POST['cpf'];
    }
    
    if(!empty ($_POST['tel'])){
        $tel = $_POST['tel'];
    }

    if(!empty ($_POST['cep'])){
        $cep = $_POST['cep'];
    }

    if(!empty ($_POST['end'])){
        $end = $_POST['end'];
    }

    if(!empty ($_POST['complemento'])){
        $complemento = $_POST['complemento'];
    }

    if(!empty ($_POST['estado'])){
        $estado = $_POST['estado'];
    }

    switch($estado){
        case "ac":
            $estado = "ac";
        break;
        case "al":
            $estado = "al";
        break;
        case "ap":
            $estado = "ap";
        break;
        case "am":
            $estado = "am";
        break;
        case "ba":
            $estado = "ba";
        break;
        case "ce":
            $estado = "ce";
        break;
        case "df":
            $estado = "df";
        break;
        case "es":
            $estado = "es";
        break;
        case "go":
            $estado = "go";
        break;
        case "ma":
            $estado = "ma";
        break;
        case "mt":
            $estado = "mt";
        break;
        case "ms":
            $estado = "ms";
        break;
        case "mg":
            $estado = "mg";
        break;
        case "pa":
            $estado = "pa";
        break;
        case "pb":
            $estado = "pb";
        break;
        case "pr":
            $estado = "pr";
        break;
        break;
        case "pe":
            $estado = "pe";
        break;
        case "pi":
            $estado = "pi";
        break;
        case "rj":
            $estado = "rj";
        break;
        case "rn":
            $estado = "rn";
        break;
        case "ro":
            $estado = "ro";
        break;
        case "rs":
            $estado = "rs";
        break;
        case "rr":
            $estado = "rr";
        break;
        case "sc":
            $estado = "sc";
        break;
        case "se":
            $estado = "se";
        break;
        case "sp":
            $estado = "sp";
        break;
        case "to":
            $estado = "to";
        break;
    }

    if(!empty ($_POST['cidade'])){
        $cidade = $_POST['cidade'];
    }

    if(!empty ($_POST['email'])){
        $email = $_POST['email'];
    }
    
    if(!empty ($_POST['senha'])){
        $senha = $_POST['senha'];
    }
    
    if(!empty ($_POST['confirmEmail'])){
        $confirmEmail = $_POST['confirmEmail'];
    }

    if(!empty ($_POST['confirmSenha'])){
        $confirmSenha = $_POST['confirmSenha'];
    }

    if(!empty ($_POST['cadastrar'])){
        $cadastrar = $_POST['cadastrar'];
    }

    // echo($nome);
    // echo($sobrenome);
    // echo($nasc);
    // echo($cpf);
    // echo($tel);
    // echo($cep);
    // echo($end);
    // echo($complemento);
    // echo($estado);
    // echo($cidade);
    // echo($email);
    // echo($senha);
    

    if($email == $confirmEmail && $senha == $confirmSenha){

        if($cadastrar == "Cadastrar"){
            $res_insert = "INSERT INTO usuarios(`id_usu`, `nome_usu`, `sobrenome_usu`, `nasc_usu`, `cpf_usu`, `tel_usu`, `cep_usu`, `end_usu`, `complemento_usu`, `estado_usu`, `cidade_usu`, `email_usu`, `senha_usu`) VALUES (NULL, '$nome','$sobrenome','$nasc','$cpf','$tel','$cep','$end','$complemento','$estado','$cidade','$email','$senha')";
            $resposta_insert = mysqli_query($conn, $res_insert);
        }

       header("Location: \seleno\inicio.php");

    } else{
        header("Location: \seleno\cadastro2.php");
    }
?>