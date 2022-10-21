<?php

include_once('connect.php');

$email = '';
$senha = '';
$entrar = '';
$confirm_email = '';
$confirm_senha = '';

if(!empty ($_POST['email'])){
    $email = $_POST['email'];
}

if(!empty ($_POST['senha'])){
    $senha = $_POST['senha'];
}

if(!empty ($_POST['entrar'])){
    $entrar = $_POST['entrar'];
}

$sql1 = "SELECT * FROM usuarios WHERE email_usu = '$email'";
    $result1 = mysqli_query($conn, $sql1);

if(mysqli_num_rows($result1) > 0){
    while($row1 = mysqli_fetch_assoc($result1)) {
        // $_SESSION['confirm_email'] = $row1["email_usu"];
        $confirm_email = $row1['email_usu'];
        $confirm_senha = $row1["senha"];
        $_SESSION['nome_usu'] = $row1["nome_usu"];
        $_SESSION['id_usu'] = $row1["id_usu"];
    }
}

// $confirm_email = $_SESSION['confirm_email'];
// $cpf_usu = $_SESSION['cpf_usu'];

if($senha == $confirm_senha && $email == $confirm_email){
    $conectado = 1;
} else {
    $conectado = 0;
}

$_SESSION['conectado'] = $conectado;

if($conectado == 1){
    header("Location: \seleno\inicio.php");
} else if($conectado == 0){
    header("Location: \seleno\login.php");
}

?>