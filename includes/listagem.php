
<?php

require_once 'app/Db/Database.php';

use App\Db;
    
function listarProjetos(){
    global $pdo;

    $sql = "SELECT * FROM pacientes";
     
    try{
    $stmt=$pdo->prepare($sql);
    $stmt->execute(); 
    $projetos= $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $projetos;
    }catch(PDOException $e){
            echo 'erro ao listar'. $e->getMessage();
            EXIT();
    }
   
}



?>

<main>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>    
<section>
        <body>
            <table class ="table table-striped table-hover">
                <tr>
                <th scope="col">id</th>
                    <th scope="col">nome</th>
                    <th scope="col">idade</th>
                    <th scope="col">peso</th>
                    <th></th>
                    </tr>

               <?php foreach (listarProjetos() as $projeto): ?>
                        <tr>
                <td><?php echo $projeto['id']; ?></td>
                <td><?php echo $projeto['nome']; ?></td>
                <td><?php echo $projeto['idade']; ?></td>
                <td><?php echo $projeto['peso']; ?></td>
                <td>
                <a href="editarprojeto.php?id=<?php echo $projeto['id']; ?>" class="btn btn-primary">
                                    Editar                                    
                                </a>
                <a href="excluir.php?id=<?php echo $projeto['id']; ?>" class="btn btn-primary">
                                    Excluir                                
                                </a>
            </td>
                
                        </tr>

               
                <?php endforeach;?>
               

            </table>
            <section>
                <a href="includes/formulario.php" class= "btn btn-success">Cadastrar</a>
            </section>
        </body>

    </section>

</main>
