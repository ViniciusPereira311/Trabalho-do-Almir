<?php
    include 'conexao.php';

   
    $nome = trim($_POST['txtNome']);
    $sexo = trim($_POST['txtSexo']);
    $telefone= trim($_POST['txtTelefone']);

    if (!empty($nome) && !empty($sexo) && !empty($telefone)){
        $pdo = Conexao::conectar();
        $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO cliente (nome, sexo, telefone) VALUES (?, ?, ?)";
        $query = $pdo->prepare($sql);
        $query->execute(array($nome, $sexo, $telefone));
        Conexao::desconectar();
    }

    header("location:cliente.php");

?>