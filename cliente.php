<?php 
    include 'conexao.php';
    $pdo = Conexao::conectar();
    $sql = 'SELECT * FROM cliente ORDER BY cpf;';
    $listaClientes = $pdo->query($sql);
?>


<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CLIENTES</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


   <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- Biblioteca de ícones -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    
</head>

<body>
   
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-5 col-lg-6">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="home.php">Home</a></li>
                                        <li><a href="cliente.php">Cliente</a></li>
                                        <li><a href="frmQuartos.php">Quartos</a></li>
                                        <li><a href="estadia.php">Estadia</a></li>                                    
                                        <li><a href="servico.php">Suporte</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.html">
                                   
                                </a>
                            </div>
                        </div>
  

        <div class="about_area">
            <button" id="btnSalvar">
            </button>
    <div class="container white col s12">
    <div style="width:100%">
    <div class="blue lighten-3 col s12">
    <h5 class="Dark Gray "  style="width:100%"  border="0" cellspacing="0" cellpadding="0" align="center">Adicionar Novo Cliente</h5>

    </div>
    <div class="row">
    <form action="inscli.php" method="POST" name="cliente" class="col s12">
        
        
        <div class="input-field col s8">
            <label for="lblNome">Informe o Nome: </label>
            <input style="width:50%" type="text" class="form-control" id="txtNome" name="txtNome">
        </div>
        <div class="input-field col s8">
            <label for="lblSexo">Sexo: </label>
            <input style="width:50%" type="text" class="form-control" id="txtSexo" name="txtSexo">
        </div>
    
        <div class="input-field col s8">
            <label for="lblTelefone">Telefone: </label>
            <input style="width:50%" type="number" class="form-control" id="txtTelefone" name="txtTelefone">
        </div>
        
          <div class="input-field col s8">
            <button class="waves-effect green accent-3 waves-light btn" type="submit" id="btnSalvar"> 
                Salvar <i class="material-icons right">cloud_done</i> 
            </button>
            </form>
        </div>

    </div>
</body>




<div class="about_area">
<div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-5 col-lg-6">
    
<div class="card-panel teal white">
<h5 class="blue lighten-3"  style="width:100%"  border="0" cellspacing="0" cellpadding="0" align="center" > Lista de Clientes
  
</h5>
<table  class="striped" style="width:70%" border="0" cellspacing="0" cellpadding="0" align="center">

 
        <tr class = "green lighten-4" class="orange darken-1">
            <th>ID</th>
            <th>NOME</th>
            <th>SEXO</th>
            <th>TELEFONE</th>
            <th>EDITAR</th>
            <th>REMOVER</th>

            <th colspan="2"></th>
        </tr>
    
        <?php
            foreach ($listaClientes as $cliente){
        ?>
                    <tr class="blue-text text-light-blue-accent-4">
                        <td><?php echo $cliente['cpf']; ?></td>
                        <td><?php echo $cliente['nome']; ?></td>
                        <td><?php echo $cliente['sexo']; ?></td>
                        <td><?php echo $cliente['telefone']; ?></td>
                        <td> <a class="btn-floating btn-small waves-effect grey"
                                       onclick="javaScript:location.href='frmEditCli.php?cpf=' +
                                       <?php echo $cliente['cpf']; ?>">
                                       <i class="material-icons">tune</i></a>
                        </td>
                        <td> <a class="btn-floating btn-small waves-effect red"
                                       onclick="javaScript:location.href='frmRemCli.php?cpf=' +
                                       <?php echo $cliente['cpf']; ?>">
                                       <i class="material-icons">close</i></a>
                        </td>
                    </tr>
            <?php
            }
        ?>
    </table>
    </header>
    </body>
</html>
   