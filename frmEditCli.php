<?php 
    include 'conexao.php';

    
    $cpf = $_GET['cpf'];

    
    $pdo = Conexao::conectar();
    $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM cliente WHERE cpf=?;";
    $query = $pdo->prepare($sql);
    $query->execute (array($cpf));
    $dados = $query->fetch(PDO::FETCH_ASSOC);
    $nome = $dados['nome'];
    $sexo = $dados['sexo'];
    $telefone= $dados['telefone'];
    Conexao::desconectar();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>

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
    <h5 class="Dark Gray "  style="width:100%"  border="0" cellspacing="0" cellpadding="0" align="center">Editar Cliente</h5>

        </div>
        <div class="row">
            <form action="editCli.php" method="POST" id=" frmEditCli"
                  name=" frmEditCli" class="col s12">

                <div class="input-field col s8">
                   <h3> <label for="lblCpf"><b>ID: </b> <?php echo $cpf;?> </label></h3>
                   <input type="hidden" name="cpf" id="cpf" value=" <?php echo $cpf;?> ">
                </div>

                <div class="input-field col s8">
                    <label for="lblNome">Nome: </label>
                    <input type="text" class="form-control" id="txtNome"
                           name="txtNome" value="<?php echo $nome;?>">
                </div>

                <div class="input-field col s8">
                    <label for="lblSexo">Sexo: </label>
                    <input step="0.01" type="text" class="form-control" id="txtSexo"
                    name="txtSexo" value="<?php echo $sexo;?>">
                </div>

                <div class="input-field col s8">
                    <label for="lblTelefone">Telefone: </label>
                    <input step="0.01" type="number" class="form-control" id="txtTelefone"
                     name="txtTelefone" value="<?php echo $telefone;?>">
                </div>

                <div class="input-field col s8">
                <button class="waves-effect green accent-3 waves-light btn" type="submit" id="btnSalvar"> 
                    Salvar <i class="material-icons right">cloud_done</i> 
                    </button>

                    <button class="btn waves-effect waves-light cyan darken-2" type="button" id="btnVoltar"
                            onclick="JavaScript:location.href='cliente.php'">
                        Voltar <i class="material-icons right">keyboard_return</i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>