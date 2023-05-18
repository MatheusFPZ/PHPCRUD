<?php

$login_cookie = $_COOKIE['email'];
include 'includes/header.php';
include 'includes/footer.php';

if(isset($login_cookie)){
    
    include 'includes/listagem.php';
    
  }else{
  
    echo"Bem-Vindo, convidado <br>";
    echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
    echo"<br><a href='login.php'>Faça Login</a> Para ler o conteúdo";
  }
 

?>
  