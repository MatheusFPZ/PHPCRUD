
<?php

require_once 'app/Db/Database.php';


use function App\Db\criarProjeto;

//verifica se formulario foi enviado


if($_SERVER['REQUEST_METHOD']==='POST'){
    //pega os dados
    $nome=$_POST['nome'];
$idade=$_POST['idade'];
$peso=$_POST['peso'];

$erros=[];
if (!is_numeric($idade)) {
    
    $erros[] = 'a idade deve ser um valor numerico';
    
}

if (!is_numeric($peso)) {
    $erros[] = 'o peso deve ser um valor numerico';
   
}

if(!empty($erros)){
    foreach ($erros as $erro){
        echo '<p>'. $erro.'</p>';
    }
}

criarProjeto($nome, $idade, $peso);




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