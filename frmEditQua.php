<?php 
    include 'conexao.php';

    
    $numero = $_GET['numero'];

    
    $pdo = Conexao::conectar();
    $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM quarto WHERE numero=?;";
    $query = $pdo->prepare($sql);
    $query->execute (array($numero));
    $dados = $query->fetch(PDO::FETCH_ASSOC);
    $andar = $dados['andar'];
    $descquarto = $dados['descquarto'];
    $ocupmax = $dados['ocupmax'];
    Conexao::desconectar();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Quartos</title>

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
    <h5 class="Dark Gray "  style="width:100%"  border="0" cellspacing="0" cellpadding="0" align="center">Editar Qaurto</h5>
        </div>
        <div class="row">
            <form action="editQua.php" method="POST" id=" frmEditQua"
                  name=" frmEditQua" class="col s12">

                <div class="input-field col s8">
                   <h3> <label for="lblNumero"><b>Numero: </b> <?php echo $numero;?> </label></h3>
                   <input type="hidden" name="numero" id="numero" value=" <?php echo $numero;?> ">
                </div>

                <div class="input-field col s8">
                    <label for="lblAndar">Andar: </label>
                    <input type="text" class="form-control" id="txtAndar"
                           name="txtAndar" value="<?php echo $andar;?>">
                </div>

                <div class="input-field col s8">
                    <label for="lbldesc">Descrição: </label>
                    <input step="0.01" type="text" class="form-control" id="txtDesc"
                    name="txtDesc" value="<?php echo $descquarto;?>">
                </div>

                <div class="input-field col s8">
                    <label for="lblOcup">Ocupaçao: </label>
                    <input step="0.01" type="number" class="form-control" id="txtOcup"
                     name="txtOcup" value="<?php echo $ocupmax;?>">
                </div>

                <div class="input-field col s8">
                    <button class="waves-effect green accent-3 waves-light btn" type="submit" id="btnSalvar"> 
                        Salvar <i class="material-icons right">cloud_done</i> 
                    </button>

                    <button class="btn waves-effect waves-light cyan darken-2" type="button" id="btnVoltar"
                            onclick="JavaScript:location.href='frmQuartos.php'">
                        Voltar <i class="material-icons right">keyboard_return</i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>