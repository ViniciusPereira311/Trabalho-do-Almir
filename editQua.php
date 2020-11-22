<?php
   include 'conexao.php'; 

   
   $numero = trim($_POST['numero']); 
   $andar = trim($_POST['txtAndar']);
   $descquarto = trim($_POST['txtDesc']); 
   $ocupmax = trim($_POST['txtOcup']); 
   
   if (!empty($numero) && !empty($andar) && !empty($descquarto) && !empty($ocupmax)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "UPDATE quarto SET andar=?, descquarto=?, ocupmax=? WHERE numero=?;";
        $query = $pdo->prepare($sql); 
        $query->execute (array($andar, $descquarto, $ocupmax, $numero));
        Conexao::desconectar();
   }

   header("location:frmQuartos.php"); 

?> 