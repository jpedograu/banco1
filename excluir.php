<?php
    include ("conexao.php");
    $id = $_POST["id"];
    $nome = $_POST['nome'];

    $sql= "DELETE * FROM usuario WHERE id = $id";
    ?>