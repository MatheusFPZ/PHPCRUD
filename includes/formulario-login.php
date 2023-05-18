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
    
    
    
    <form class = "formulario" action="login.php" method="POST">
    <h2 class="titulo">Login</h2>
  
      
    <input type="text" id="email" name="email" placeholder="Endereço de email"required><br><br>
    
   
    <input type="password" id="senha" name="senha" placeholder="Senha" required><br><br>
    
    <button class="button"type="submit" name="enviar">Continuar</button>
    <div class="form-group" >
      <p>N tem conta?
        <a class="link" href="cadastro.php">Cadastrar</a>
      </p>
    
    
    </div>
    </form>
  
    

  
</body>
</html>

