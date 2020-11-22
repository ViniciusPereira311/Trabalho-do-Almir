<?php
    include 'conexao.php';


    $numero = trim($_POST['numero']);

    if (!empty($numero)){
        $pdo = Conexao::conectar();
        $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM quarto WHERE numero=?";
        $query = $pdo->prepare($sql);
        $query->execute(array($numero));
        Conexao::desconectar();
    }

    header("location:frmQuartos.php");

?>