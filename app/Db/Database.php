<?php
namespace App\Db;

use PDO;
use PDOException;



    $host = 'localhost';
    $dbname = 'teste';
    $user = 'root';
    $password = '123';
  
    //conecta ao banco
    try {
        
        $pdo = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8",$user,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        die('Erro'. $e->getMessage());
    }
     

     function criarProjeto($nome, $idade, $peso){
        global $pdo;

        $sql = "INSERT INTO pacientes (nome, idade, peso) VALUES (?,?,?)";

        try{
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$nome, $idade, $peso]);
            //verificar sucesso
    if($stmt->rowCount()>0){
        echo"<script language='javascript' type='text/javascript'>
    alert('Cadastrado com sucesso');window.location
    .href='index.php';</script>";
    }else{
        echo 'se fufu';
    }

        }catch(PDOException $e){
            echo 'erro ao criar projeto'.$e->getMessage();
            exit();
    }
}

    function listarProjetos(){
        global $pdo;

        $sql = "SELECT * FROM pacientes";
         
        try{
        $stmt=$pdo->prepare($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
                echo 'erro ao listar'. $e->getMessage();
                EXIT();
        }
    }

   

?>