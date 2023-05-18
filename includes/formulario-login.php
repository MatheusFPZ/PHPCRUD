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
      <h2>Login</h2>
    
    
    <form action="login.php" method="POST">
    
    <label for="email" >email:</label>
    <input type="text" id="email" name="email" required><br><br>
    
    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" required><br><br>
    <div class="form-group" >
      <a href="cadastro.php" class = "btn btn-success">Cadastrar</a>
    
    <button class="btn btn-success" type="submit" name="enviar">Enviar</button>
    </div>
    </form>
  </section>
    

  
</body>
</html>

