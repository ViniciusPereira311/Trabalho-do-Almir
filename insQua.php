<?php
    include 'conexao.php';

 
   
    $andar = trim($_POST['txtAndar']);
    $descQuarto = trim($_POST['txtDesc']);
    $ocupmax= trim($_POST['txtOcup']);

    if (!empty($andar) && !empty($descQuarto) && !empty($ocupmax)){
        $pdo = Conexao::conectar();
        $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO quarto (andar, descQuarto, ocupmax) VALUES (?, ?, ?)";
        $query = $pdo->prepare($sql);
        $query->execute(array($andar, $descQuarto, $ocupmax));
        Conexao::desconectar();
    }

    header("location:frmQuartos.php");

?>