


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style><?php include 'styles.css'; ?></style>
  
</head>
<body>
<div class ="container">
      
      
    
    
    <form action="cadastro.php" method="POST">
    <h2 class="titulo">Cadastro</h2>
    
    <input type="text" id="username" name="username" placeholder="Nome" required><br><br>
    
    <input type="text" id="email" name="email" placeholder="Email" required><br><br>
    
    
    <input type="password" id="senha" name="senha" placeholder="Senha" required><br><br>
    <button class="button" type="submit" name="enviar">Enviar</button>
    <p>Possui conta?
    <a class = "link"href="login.php">Logar</a>
    </p>
    
    </form>
    
  </div>
    

  
</body>
</html>

