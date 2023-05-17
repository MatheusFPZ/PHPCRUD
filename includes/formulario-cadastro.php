


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <section>
      <h2>Cadastro</h2>
    
    
    <form action="cadastro.php" method="POST">
    <label for="username">Nome de usuario:</label>
    <input type="text" id="username" name="username" required><br><br>
    <label for="email" >email:</label>
    <input type="text" id="email" name="email" required><br><br>
    
    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" required><br><br>
    <button class="btn btn-success" type="submit" name="enviar">Enviar</button>
    </form>
  </section>
    

  
</body>
</html>

