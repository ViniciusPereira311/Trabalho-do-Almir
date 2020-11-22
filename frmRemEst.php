<?php 
    include 'conexao.php';

    
    $cpf = $_GET['idEstadia'];

    
    $pdo = Conexao::conectar();
    $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM estadia WHERE idEstadia=?";
    $query = $pdo->prepare($sql);
    $query->execute(array($cpf));
    $dados = $query->fetch(PDO::FETCH_ASSOC);
    $idCli = $dados['cpfCliente'];
    $numquarto = $dados['nQuarto'];
    $valor = $dados['valor'];
    Conexao::desconectar();
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remover Aluguel </title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- Biblioteca de ícones -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <<div class="container">
        <div class="blue lighten-3  row s12">
        <div class="red col s12">
    <h5 class="Dark Gray "  style="width:100%"  border="0" cellspacing="0" cellpadding="0" align="center">EXCLUIR ALUGUEL?</h5>
        </div>
        <div class="row">
            <form action="remEst.php" method="POST" id="frmRemEst" name="frmRemEst"
                class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <label for="lblEst"><h5><b>Id Estadia:</b> <?php echo $cpf; ?> </h5></label>
                        <input type="hidden" name="idEstadia" id="idEstadia" value="<?php echo $cpf; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="lblCli"><h5><b>id Cliente:</b> <?php echo $idCli; ?> </h5></label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="lblQua"><h5><b>Quarto:</b> <?php echo $numquarto; ?> </h5></label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="lblValor"><h5><b>Valor:</b> <?php echo $valor; ?> </h5></label>
                    </div>
                </div>
                
                <div class="input-field col s8">
                    <br>
                    <button class="waves-effect waves-light btn red" type="submit" id="btnRemover"> 
                        Remover <i class="material-icons right">cancel</i> 
                    </button>

                    <button class="cyan darken-2 btn" type="button" id="btnVoltar"
                            onclick="javaScript:location.href='estadia.php'"> 
                        Voltar <i class="material-icons right">keyboard_return</i> 
                    </button>
                </div>

            </form>
        </div>
    </div>
</body>
</html>