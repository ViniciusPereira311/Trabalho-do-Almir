<?php
    include 'conexao.php';

    
    $cpf = trim($_POST['cpf']);

    if (!empty($cpf)){
        $pdo = Conexao::conectar();
        $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM cliente WHERE cpf=?";
        $query = $pdo->prepare($sql);
        $query->execute(array($cpf));
        Conexao::desconectar();
    }

    header("location:cliente.php");

?>