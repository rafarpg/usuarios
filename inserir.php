<?php
    include("conecta.php");
    $cpf = $_POST["cpf"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $comando = $pdo->prepare("INSERT INTO usuarios(cpf,nome,email,senha) VALUES($cpf,'$nome', '$email','$senha')");
    $resultado = $comando->execute();

    header("Location: cadastro_usuario.html");
?>
