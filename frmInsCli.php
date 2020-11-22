<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserção de Clientes</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- Biblioteca de ícones -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
    <div class="container blue lighten-5 col s12">
        <div class="green lighten-4 col s12">
            <h3>Adicionar Novo Cliente</h3>
        </div>
        <div class="row">
            <form action="inscli.php" method="POST" id="frmInsCli" name="frmInsCli" class="col s12">
                <div class="input-field col s8">
                    <label for="lblNome">Informe o Nome: </label>
                    <input type="text" class="form-control" id="txtNome" name="txtNome">
                </div>
                <div class="input-field col s8">
                    <label for="lblEmail">Informe o Email: </label>
                    <input type="text" class="form-control" id="txtEmail" name="txtEmail">
                </div>
                <div class="input-field col s8">
                    <label for="lblCidade">Informe a Cidade: </label>
                    <input type="text" class="form-control" id="txtCidade" name="txtCidade">
                </div>
                <div class="input-field col s8">
                    <label for="lblEstado">Informe o Estado: </label>
                    <input type="text" class="form-control" id="txtEstado" name="txtEstado">
                </div>

                <div class="input-field col s8">
                    <button class="waves-effect waves-light btn" type="submit" id="btnSalvar"> 
                        Salvar <i class="material-icons right">save</i> 
                    </button>

                    <button class="waves-effect waves-light btn orange" type="reset" id="btnLimpar"> 
                        Limpar <i class="material-icons right">brush</i> 
                    </button>

                    <button class="grey darken-1 btn" type="button" id="btnVoltar"
                            onclick="javaScript:location.href='listarClientes.php'"> 
                        Voltar <i class="material-icons right">arrow_back</i> 
                    </button>
                </div>
            </form>
        </div>

    </div>
</body>
</html>