<?php

    require_once 'app/Db/Database.php';
    //include 'includes/formulario-editar.php';

    use function App\Db\buscarPorId;
    use function App\Db\editarProjeto;
    

    if(isset($_GET['id'])){
        $id=$_GET['id'];
    
        $projeto2=buscarPorId($id);

        if(!$projeto2){
            echo 'nao encontrado';
            
           
        }else {
            $nome = $projeto2['nome'];
            $idade = $projeto2['idade'];
            $peso = $projeto2['peso'];
        }



        

    }else{
        echo 'id não fornecido';
        exit();
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $sexo = $_POST['sexo'];

    
        editarProjeto($id, $nome, $idade, $peso);
    
        header('Location: index.php?status=success');
    }

    ?>


    <main>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>    
    
    <section>
    
        <a href="index.php" class="btn btn-success">Voltar</a>
    </section>
    
        
        <style> <?php include'styles.css'?></style>

        
</style>
   
    
        
        
        <div class="container">
        <form method="POST" action="editarprojeto.php?id=<?php echo $id; ?>">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" value="<?php echo isset($nome) ? $nome : ''; ?>" required><br>
            <label for="idade">Idade:</label>
            <input type="text" name="idade" value="<?php echo isset($idade) ? $idade : ''; ?>" required><br>
            <label for="peso">Peso:</label>
            <input type="text" name="peso" value="<?php echo isset($peso) ? $peso : ''; ?>" required><br>
            <input type="submit" value="Editar">
            
        </form>
        </div>
   
</main>
