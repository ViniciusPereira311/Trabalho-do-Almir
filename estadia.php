<?php
    include 'conexao.php';
    $pdo = Conexao::conectar();
    $sql = 'SELECT * FROM estadia ORDER BY idEstadia;';
    $listaEstadia = $pdo->query($sql);
    
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Montana</title>
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
                    
    
    

   
    <div class="about_area">     
    <button" id="btnSalvar">
            </button>
    <div class="container white col s12">
    <div style="width:100%">
    <div class="blue lighten-3 col s12">
    
    <h5 class="Dark Gray "  style="width:100%"  border="0" cellspacing="0" cellpadding="0" align="center">Adicionar Nova Estadia</h5>
    </div>
        
    <div class="row">
    <form action="insEst.php" method="POST" name="estadia" class="col s12">

                <div class="input-field col s8">
                    <label for="lblCli">Id do Cliente: </label>
                    <input style="width:50%" type="text" class="form-control" id="txtCli" name="txtCli">
                </div>
                
                <div class="input-field col s8">
                  <label for="lblQua">Numero Do Quarto: </label>
                    <input style="width:50%" type="text" class="form-control" id="txtQua" name="txtQua">
                 </div>
                <div class="input-field col s8">
                    <label for="lblValor">Valor: </label>
                    <input style="width:50%" step="0.01" type="number" class="form-control" id="txtValor" name="txtValor"
                            onblur="calcula_total()">
                </div>
                <div class="input-field col s8">
                    <label for="lblDia">Dias: </label>
                    <input style="width:50%" step="0.01" type="number" class="form-control" id="txtDia" name="txtDia"
                            onblur="calcula_total()">
                </div>

                <div class="input-field col s8">
                <button class="waves-effect green accent-3 waves-light btn" type="submit" id="btnSalvar"> 
                Salvar <i class="material-icons right">cloud_done</i> 
            </button>
            </form>
        </div>

    </div>
                
<div class="about_area">
<div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-5 col-lg-6">

            <div class="card-panel teal white">
<h5 class="blue lighten-3"  style="width:100%"  border="0" cellspacing="0" cellpadding="0" align="center" >Lista de Estadia
  
</h5>
<table  class="striped" style="width:70%" border="0" cellspacing="0" cellpadding="0" align="center">

<tr class = "green lighten-4" class="orange darken-1">
        <th>CLIENTE</th>
        <th>QUARTO</th>
        <th>VALOR</th>
        <th>DIAS</th>
        <th>TOTAL</th>
        <th>EDITAR</th>
        <th>REMOVER</th>
        <th colspan="2"></th>
    </tr>
    

    <?php
        foreach ($listaEstadia as $estadia){
    ?>
            <tr class="black-text text-light-blue-accent-4">
                <td><?php echo $estadia['cpfCliente']; ?></td>
                <td><?php echo $estadia['nQuarto']; ?></td>
                  <td><?php echo number_format($estadia['valor'], 2, ',', '.'); ?></td>
                  <td><?php  echo number_format($estadia['dia'],);  ?></td>
                  <?php $total = $estadia['dia'] * $estadia['valor']; ?>
                  <td><?php echo number_format($total, 2, ',', ' '); ?></td>


                <td> <a class="btn-floating btn-small waves-effect grey"
                               onclick="javaScript:location.href='frmeditEst.php?idEstadia=' +
                               <?php echo $estadia['idEstadia']; ?>">
                               <i class="material-icons">tune</i></a>
                </td>
                <td> <a class="btn-floating btn-small waves-effect red"
                               onclick="javaScript:location.href='frmRemEst.php?idEstadia=' +
                               <?php echo $estadia['idEstadia']; ?>">
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
<script>
function calcula_total(){
    var dias = parseFloat(document.getElementById('txtDia').value, 10); 
    var valor = parseFloat(document.getElementById('txtValor').value, 10);  
    var total = dias * valor; 
    if (isNaN(total))
       total = 0; 
    document.getElementById("total").innerHTML = total.toFixed(2);  
} 
</script>
