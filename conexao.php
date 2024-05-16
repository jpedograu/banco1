<?php
$host='localhost';
$user='root';
$senha='';
$bd='provainfo';
if ($conexao = mysqli_connect($host, $user, $senha, $bd)){
//echo "conectado com sucesso";
}
else
    echo "falhou";

?>