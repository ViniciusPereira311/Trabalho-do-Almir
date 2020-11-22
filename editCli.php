<?php
   include 'conexao.php'; 

   
   $cpf = trim($_POST['cpf']); 
   $nome = trim($_POST['txtNome']);
   $sexo = trim($_POST['txtSexo']); 
   $telefone = trim($_POST['txtTelefone']); 
   
   if (!empty($cpf) && !empty($nome) && !empty($sexo) && !empty($telefone)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "UPDATE cliente SET nome=?, sexo=?, telefone=? WHERE cpf=?;";
        $query = $pdo->prepare($sql); 
        $query->execute (array($nome, $sexo, $telefone, $cpf));
        Conexao::desconectar(); 
         
   }

   header("location:cliente.php"); 

?> 