<?php
namespace App\Db;

use PDO;
use PDOException;



    $host = 'localhost';
    $dbname = 'crud';
    $user = 'root';
    $password = '';
  
    //conecta ao banco
    try {
        $pdo = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8",$user,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        die('Erro'. $e->getMessage());
    }
     

    function criarProjeto($nome, $titulo, $descricao){
        global $pdo;

        $sql = "INSERT INTO projetos (nome, titulo, descricao) VALUES (?,?,?)";

        try{
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$nome, $titulo, $descricao]);

        }catch(PDOException $e){
            echo 'erro ao criar projeto'.$e->getMessage();
            exit();
    }
}

    function listarProjetos(){
        global $pdo;

        $sql = "SELECT * FROM projetos";
         
        try{
        $stmt=$pdo->prepare($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
                echo 'erro ao listar'. $e->getMessage();
                EXIT();
        }
    }


?>