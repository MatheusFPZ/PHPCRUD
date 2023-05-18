<?php
namespace App\Db;

use PDO;
use PDOException;



    $host = 'localhost';
    $dbname = 'crud';
    $user = 'root';
    $password = '123';
  
    //conecta ao banco
    try {
        $pdo = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8",$user,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        die('Erro'. $e->getMessage());
    }
     //prepara a consulta
    // $sql= 'INSERT INTO usuarios(nome, email, senha)'


?>