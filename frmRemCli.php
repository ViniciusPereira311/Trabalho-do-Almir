<?php
    include 'conexao.php';


    $cpf = $_GET['cpf'];

  
    $pdo = Conexao::conectar();
    $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM cliente WHERE cpf=?";
    $query = $pdo->prepare($sql);
    $query->execute(array($cpf));
    $dados = $query->fetch(PDO::FETCH_ASSOC);
    $nome = $dados['nome'];
    $sexo = $dados['sexo'];
    $telefone = $dados['telefone'];
    Conexao::desconectar();
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remoção de Clientes</title>

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
    <h5 class="Dark Gray "  style="width:100%"  border="0" cellspacing="0" cellpadding="0" align="center">EXCLUIR CLIENTE?</h5>
        </div>
        <div class="row">
            <form action="remCli.php" method="POST" id="frmRemCli" name="frmRemCli"
                class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <label for="lblCpf"><h6><b>ID:</b> <?php echo $cpf; ?> </h6></label>
                        <input type="hidden" name="cpf" id="cpf" value="<?php echo $cpf; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="lblNome"><h6><b>NOME:</b> <?php echo $nome; ?> </h6></label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="lblsexo"><h6><b>SEXO:</b> <?php echo $sexo; ?> </h6></label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="lblTelefone"><h6><b>TELEFONE:</b> <?php echo $telefone; ?> </h6></label>
                    </div>
                </div>
                
                <div class="input-field col s8">
                    <br>
                    <button class="waves-effect waves-light btn red" type="submit" id="btnRemover"> 
                        Excluir <i class="material-icons right">cancel</i> 
                    </button>

                    <button class="cyan darken-2 btn" type="button" id="btnVoltar"
                            onclick="javaScript:location.href='cliente.php'"> 
                        Voltar <i class="material-icons right">keyboard_return</i> 
                    </button>
                </div>

            </form>
        </div>
    </div>
</body>
</html>