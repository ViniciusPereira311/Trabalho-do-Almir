<?php
   include 'conexao.php'; 

   $idcli = trim($_POST['txtCli']);
   $numquar = trim($_POST['txtQua']); 
   $valor = trim($_POST['txtValor']);
   $dia = trim($_POST['txtDia']);


   if (!empty($idcli) && !empty($numquar) && !empty($valor) && !empty($dia)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "INSERT INTO estadia (cpfCliente, nQuarto, valor, dia) VALUES (?, ?, ?, ?)";
        $query = $pdo->prepare($sql); 
        $query->execute (array($idcli, $numquar, $valor, $dia));
        Conexao::desconectar();  
   }

   header("location:estadia.php"); 

?> 