<?php
    include 'conexao.php';

    
    $numero = $_GET['numero'];

   
    $pdo = Conexao::conectar();
    $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM quarto WHERE numero=?";
    $query = $pdo->prepare($sql);
    $query->execute(array($numero));
    $dados = $query->fetch(PDO::FETCH_ASSOC);
    $andar = $dados['andar'];
    $descquarto = $dados['descquarto'];
    $ocupmax = $dados['ocupmax'];
    Conexao::desconectar();
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remoção de Quartos</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- Biblioteca de ícones -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<div class="container">
        <div class="blue lighten-3  row s12">
        <div class="red col s12">
    <h5 class="Dark Gray "  style="width:100%"  border="0" cellspacing="0" cellpadding="0" align="center">EXCLUIR QUARTO?</h5>
        </div>
        <div class="row">
            <form action="remQua.php" method="POST" id="frmRemQua" name="frmRemQua"
                class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <label for="lblNumero"><h6><b>Numero:</b> <?php echo $numero; ?> </h6></label>
                        <input type="hidden" name="numero" id="numero" value="<?php echo $numero; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="lblAndar"><h6><b>Andar:</b> <?php echo $andar; ?> </h6></label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="lbldescquarto"><h6><b>Descrição:</b> <?php echo $descquarto; ?> </h6></label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="lblocupmax"><h6><b>Ocupação:</b> <?php echo $ocupmax; ?> </h6></label>
                    </div>
                </div>
                
                <div class="input-field col s8">
                    <br>
                    <button class="waves-effect waves-light btn red" type="submit" id="btnRemover"> 
                        EXCUIR <i class="material-icons right">cancel</i> 
                    </button>

                    <button class="cyan darken-2 btn" type="button" id="btnVoltar"
                            onclick="javaScript:location.href='frmQuartos.php'"> 
                        Voltar <i class="material-icons right">keyboard_return</i> 
                    </button>
                </div>

            </form>
        </div>
    </div>
</body>
</html>