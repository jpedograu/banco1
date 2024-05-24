<?php
include ("conexao.php");
$nome=$_POST['nome'];
$endereco=$_POST['endereco'];
$telefone=$_POST['telefone'];
$data=$_POST['data'];
$email=$_POST['email'];
$senha=md5($POST['senha'];


    $sql= "INSERT INTO usuario(nome,endereco,telefone,data, email, senha)
    VALUES('$nome','$endereco','$telefobe','$data', '$email', '$senha')";
    if($conexao=mysqli_query($conexao, $sql)){
        echo"cadastro realizado com sucesso";
    }
    else{
        echo"erro ao cadastra-se".mysqli_connect_error($conexao);
    }


?>
