<?php

    require_once 'app/Db/Database.php';
    //include 'includes/formulario-editar.php';

    use function App\Db\buscarPorId;

    if(isset($_GET['id'])){
        $id=$_GET['id'];
    
        $projeto2=buscarPorId($id);

        if($projeto2){
            $nome = $projeto2['nome'];
            $idade = $projeto2['idade'];
            $peso = $projeto2['peso'];

        }else{
            echo 'nao encontrado';
        }
   

    }else{
        echo 'id não fornecido';
        exit();
    }
    ?>
    <main>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>    
    
    <section>
    
        <a href="index.php" class="btn btn-success">Voltar</a>
    </section>
    
        
        <style> <?php include'styles.css'?></style>
    <div class="container">
        <form method="POST" action="../editarprojeto.php">
        
        <input type="hidden" name="id" value="<?php echo $id; ?>">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" value="<?php echo $nome; ?>"><br>
    <label for="idade">Idade:</label>
    <input type="number" name="idade" value="<?php echo $idade; ?>"><br>
    <label for="peso">Peso:</label>
    <input type="number" name="peso" value="<?php echo $peso; ?>"><br>
    <input type="submit" value="Editar">
           
    
    
    
    
        </form>
        </div>
    
    
    
    
    </main>



