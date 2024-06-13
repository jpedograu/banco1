<?php
 include"cadrasto.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    if (isset($_POST['name']) && isset($_POST['email'])&& isset($_POST['senha'])) {
        $nome = $_POST['username'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        
        if ($username === "admin" && $password === "senha123") {
           
            header("Location: logou.php");
            exit();
        } else {
            // Credenciais incorretas, exibe uma mensagem de erro
            echo "Credenciais inválidas. Tente novamente.";
        }
    } else {
        echo "Por favor, preencha todos os campos.";
    }
}
?>