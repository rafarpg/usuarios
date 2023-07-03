<?php
    include("conecta.php");
    $id_usuario = $_GET["I"];

    $comando = $pdo->prepare("DELETE FROM usuarios WHERE id_usuario=$id_usuario");
    $resultado = $comando->execute();

    header("Location: cadastro.html");
?>