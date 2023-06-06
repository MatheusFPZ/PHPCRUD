<?php

require_once 'app/Db/Database.php';

use function App\Db\deletarProjeto;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    echo 'ID não fornecido';
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
    deletarProjeto($id);
    header('Location: index.php?status=success');
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Deletar Projeto</title>
    <script>
        function confirmarExclusao() {
            return confirm("Tem certeza que deseja deletar este projeto?");
        }
    </script>
</head>
<body>
    <h2>Deletar Projeto</h2>

    
    <form method="POST" action="excluir.php?id=<?php echo $id; ?>">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <p>Você tem certeza que deseja deletar este projeto?</p>
        <button type="submit" name="delete" onclick="return confirmarExclusao();">Deletar</button>
        <a href="index.php">Cancelar</a>
    </form>
</body>
</html>
