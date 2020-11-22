<?php
   include 'conexao.php'; 

  
   $idEstadia = trim($_POST['idEstadia']);
   $idcli = trim($_POST['txtCli']);
   $numquar = trim($_POST['txtQua']); 
   $valor = trim($_POST['txtValor']);
   $dia = trim($_POST['txtDia']);
   
   if (!empty($idEstadia) && !empty($idcli) && !empty($numquar) && !empty($valor) && !empty($dia)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "UPDATE estadia SET cpfCliente=?, nQuarto=?, valor=?, dia=? WHERE idEstadia=?;";
        $query = $pdo->prepare($sql); 
        $query->execute (array($idcli, $numquar, $valor, $dia, $idEstadia));
        Conexao::desconectar(); 
   }

   header("location:estadia.php"); 

?> 