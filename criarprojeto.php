
<?php

require_once 'app/Db/Database.php';

use App\Db;

//verifica se formulario foi enviado


if($_SERVER['REQUEST_METHOD']==='POST'){
    //pega os dados
    $nome=$_POST['nome'];
$idade=$_POST['idade'];
$peso=$_POST['peso'];





Db\criarProjeto($nome, $idade, $peso);

}








// //ver se ja esta cadastrado

// //preparar BANCO
//     $sql='INSERT INTO pacientes (nome, idade, peso) VALUES (:nome, :idade, :peso)';
//     $stmt=$pdo->prepare($sql);
//     $stmt->execute(['nome'=>$nome, 'idade'=>$idade, 'peso'=>$peso]);
    
    

//     //verifica se foi inserido

//     if($stmt->rowCount()>0){
//         echo 'inserido com sucesso';
//     }else{
//         echo 'n deu';
//     }
// }else{
//     echo 'n deu';
// }


?>