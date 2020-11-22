<?php
    include 'conexao.php';


    $idEstadia = trim($_POST['idEstadia']);

    if (!empty($idEstadia)){
        $pdo = Conexao::conectar();
        $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM estadia WHERE idEstadia=?";
        $query = $pdo->prepare($sql);
        $query->execute(array($idEstadia));
        Conexao::desconectar();
    }

    header("location:estadia.php");

?>