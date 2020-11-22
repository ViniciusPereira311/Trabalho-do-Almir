<?php 
    include 'conexao.php';
    $pdo = Conexao::conectar();
    $sql = 'SELECT * FROM servico ORDER BY idServico;';
    $listaServico = $pdo->query($sql);
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SUPORTE</title>
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

<body background="banner2.png">
   
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
    <div style="width:100%">
    
    <h3 class="Dark Gray "  style="width:100%"  border="0" cellspacing="0" cellpadding="0" align="center">Central de Ajuda:</h3>
    </div>
    </div>
    </div>
    </div>
    </div>
        <div class="col-lg-3 offset-lg-1">
            <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                            <h4>Endereço:</h4>
                                <h5>Cândido Mota, São Paulo.</h5>
                                <p>Porto Almeida, CM 311</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                            <h4>Telefone:</h4>
                                <h5>+55 (18)3341-7076</h5>
                                <p>Atendendo: Seg a Sex 8:00/20:00</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                            <h4>Email:</h4>
                                <h5>suporte@hotelpeg.com</h5>
                                <p>Mande sua mensagem!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </header>
    </body>
    
    </html>