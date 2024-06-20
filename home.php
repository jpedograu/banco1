<?php
//canexao
require_once 'conexao.php';
//sessao
session_start();


//verificaçao
if(!isset($_SESSION['logado'])):
    header('Location: login.php');
endif;

$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuario WHERE id = '$id'";
$resultados = mysqli_query($conexao,$sql);
$dados = mysqli_fetch_array($resultados);
mysqli_close($conexao);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padina restrita</title>
</head>
<body>
<h1 style="color: purple;">SEJA BENVINDO </h1>
<h2> usuario:<?php echo $dados['nome']; ?></h2>

<h2>aqui esta algumas sugestoes que vc se entereça</h2>

<a href="logou.php">Voltar</a>

</body>
</html>