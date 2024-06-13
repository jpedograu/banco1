<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  body{
    background-image: linear-gradient(to right, #4ECDC4, #556270);
  }
  .container{
    background-image: linear-gradient(to right, #4ECDC4, #556270);
  }
  
  </style>
<body>
    
<?php
include "conexao.php";
$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=password_hash($_POST['senha'],PASSWORD_DEFAULT);

$consulta= "INSERT INTO usuario(nome,email,senha)
 VALUES('$nome', '$email', '$senha')";
 if($conexao=mysqli_query($conexao, $consulta)){
     echo"cadastro realizado com sucesso";
 }
 else{
        echo"erro ao cadastra-se".mysqli_connect_error($conexao);
}


?>
<a href="inicio.php" class=" btn btn-info">Voltar ao Inicio</a>
</body>
</html>
