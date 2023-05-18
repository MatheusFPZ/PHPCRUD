<?php

session_start();
require_once 'app/Db/Database.php';
//ver se o formulario foi enviado 

if($_SERVER['REQUEST_METHOD']==='POST'){
    //pegar os dados
    $email = $_POST['email'];
    $senha = $_POST['senha'];





//fazer um select no banco

$sql = 'SELECT * FROM usuarios WHERE email = :email';
//preparar
$stmt = $pdo->prepare($sql);
$stmt->execute(['email'=>$email]);

//ver se tem um
if($stmt->rowCount()>0){
    $usuario= $stmt->fetch(PDO::FETCH_ASSOC);
    //VERIFICA A SENHA

    if(password_verify($senha, $usuario['senha'])){
        //login deu certo
        setcookie("email",$email);
        header("Location:index.php");
        
    }else{
        echo"<script language='javascript' type='text/javascript'>
    alert('senha incorreta');window.location
    .href='login.php';</script>";
    }



}else{
    echo"<script language='javascript' type='text/javascript'>
    alert('Login e/ou senha incorretos');window.location
    .href='login.php';</script>";
}

}

include 'includes/header.php';
    include 'includes/formulario-login.php';
    include 'includes/footer.php';  


?>
