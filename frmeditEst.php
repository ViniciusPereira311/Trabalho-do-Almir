<?php 
    include 'conexao.php';

    
    $idEstadia = $_GET['idEstadia'];

    
    $pdo = Conexao::conectar();
    $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM estadia WHERE idEstadia=?;";
    $query = $pdo->prepare($sql);
    $query->execute (array($idEstadia));
    $dados = $query->fetch(PDO::FETCH_ASSOC);
    $idcli = $dados['cpfCliente'];
    $numquar = $dados['nQuarto'];
    $valor= $dados['valor'];
    $dia= $dados['dia'];
    Conexao::desconectar();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Aluguel</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

     <!-- biblioteca de icones -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
<div class="container grey lighten-3 col s12">
    <div class="blue lighten-3 col s12">
    <h5 class="Dark Gray "  style="width:100%"  border="0" cellspacing="0" cellpadding="0" align="center">Editar Aluguel</h5>

        </div>
        <div class="row">
            <form action="editEst.php" method="POST" id=" frmeditEst"
                  name=" frmeditEst" class="col s12">
                  </div>

                <div class="input-field col s8">
                   <h3> <label for="lblEst"><b>Id Aluguel: </b> <?php echo $idEstadia;?> </label></h3>
                   <input type="hidden" name="idEstadia" id="idEstadia" value=" <?php echo $idEstadia;?> ">
                </div>

                <div class="input-field col s8">
                    <label for="lblCli">Id Cliente: </label>
                    <input type="number" class="form-control" id="txtCli"
                           name="txtCli" value="<?php echo $idcli;?>">
                </div>

                <div class="input-field col s8">
                    <label for="lblQua">Numero Do Quarto: </label>
                    <input  type="number" class="form-control" id="txtQua"
                    name="txtQua" value="<?php echo $numquar;?>">
                </div>

                <div class="input-field col s8">
                    <label for="lblValor">Valor: </label>
                    <input  type="number" class="form-control" id="txtValor"
                     name="txtValor" value="<?php echo $valor;?>">
                </div>
                <div class="input-field col s8">
                    <label for="lblDia">Dias: </label>
                    <input  type="number" class="form-control" id="txtDia"
                     name="txtDia" value="<?php echo $dia;?>">
                </div>

                <div class="input-field col s8">
                <button class="waves-effect green accent-3 waves-light btn" type="submit" id="btnSalvar"> 
                    Salvar <i class="material-icons right">cloud_done</i> 
                    </button>

                    <button class="btn waves-effect waves-light cyan darken-2" type="button" id="btnVoltar"
                            onclick="JavaScript:location.href='estadia.php'">
                        Voltar <i class="material-icons right">keyboard_return</i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>