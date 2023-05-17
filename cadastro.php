<?php

    

    //VERIFICA SE O FORMULARIO FOI ENVIADO
    if($_SERVER['REQUEST_METHOD']=== 'POST'){
        //OBTER VALORES
        $nome = $_POST['username'];
        $email= $_POST['email'];
        $senha=$_POST['senha'];

    
    
    //validar email
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo 'email invalido';
        exit;
    }

    //validar senha
    if(strlen($senha)<6){
        echo 'a  senha deve ter pelo menos 6 caracteres';
        exit;

    }
    
    
    
        //preparar consulta sql
    $sql='SELECT * FROM usuarios WHERE email = :email';
    $stmt= $pdo->prepare($sql);
    $stmt->execute(['email'=>$email]);

    if($stmt->rowCount()>0){
        echo 'usuario ja cadastrado';

        exit;
    }

    //criptografar a senha
    $senhaCripto = password_hash($senha, PASSWORD_DEFAULT);

    //INSERIR NO BANCO
    $sql='INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)';
    $stmt=$pdo->prepare($sql);
    $stmt->execute(['nome'=>$nome, 'email'=>$email, 'senha'=>$senhaCripto]);

    //verificar sucesso
    if($stmt->rowCount()>0){
        echo 'dale macio';
    }else{
        echo 'se fufu';
    }

    
    }



?>