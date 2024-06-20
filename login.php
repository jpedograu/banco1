<?php
include "conexao.php";

//sessao
session_start();

//botao enviar
if(isset($_POST['btn-entrar'])):

$erros = array();
$email = mysqli_escape_string($conexao, $_POST['email']);
$senha = mysqli_escape_string($conexao, $_POST['senha']);



if(empty($email) or empty($senha)):
    $erros[] = "<li style=' list-style-type: none; color:red ;'> O campo precisa ser preenchido</li>";
else:
    $sql ="SELECT email FROM usuario WHERE email = '$email'";
    $resultado = mysqli_query($conexao, $sql);

  

if(mysqli_num_rows($resultado) > 0):

$senha = md5($senha);
$sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
$resultado = mysqli_query($conexao, $sql);

if(mysqli_num_rows($resultado) == 1):
    $dados = mysqli_fetch_array($resultado);
    mysqli_close($conexao);
$_SESSION['logado'] = true;
$_SESSION['id_usuario'] = $dados['id'];
header('Location: home.php');

else:
$erros[] = "<li> Usuario e senha não conferem</li>";

endif;

else:

$erros[] = "<li> Usuario inesxistente</li>";








endif;
endif;
endif;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="Fotos/cad.png" type="image/x-icon">
    <style>
   
    </style>
</head>
<body>
    
<h1>Login</h1>

<?php

if(!empty($erros)):
    foreach($erros as $erro):
        echo $erro;
    endforeach;
endif;

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

<div class="mb-3">

            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email">

            <label for="senha" class="form-label">Senha</label>
            <input type="password" id="password" placeholder="Digite sua senha" class="form-control" name="senha">
            <button style="" type="button" class="toggle-password" onclick="togglePassword()">Mostrar</button>


<script>
function togglePassword() {
var passwordField = document.getElementById('password');
var toggleButton = document.querySelector('.toggle-password');
if (passwordField.type === 'password') {
    passwordField.type = 'text';
    toggleButton.textContent = 'Ocultar';
} else {
    passwordField.type = 'password';
    toggleButton.textContent = 'Mostrar';
}
}
</script>


<br>

<input type="submit" name="btn-entrar" class="btn btn-success">

</form>
<br>


 <a href="inicio.php" class=" btn btn-info">Voltar ao Inicio</a>

</body>
</html>