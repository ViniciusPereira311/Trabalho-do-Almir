<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Acesso ao Usuário</title>

	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

 	<!-- biblioteca de icones -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body background="banner.png">


	<div class="container">
		<div class="row">
		<h5 class="Dark Gray "  style="width:100%">HOTEL P&G</h5>
			<main>
				<div class="container center-align">
					<div class="z-depth-3 y-depth-3 x-depth-3 grey lighten-2 pink-text lighten-4 row"
						style="display: inline-block; padding: 32px 48px 0px 48px;
							   border: 1px; margin-top: 150px;" >
							   <h5 class="Dark Gray "  style="width:100%">HOTEL P&G</h5>
						<form action="login.php" method="POST" name="frmIndex">
							<div class="row">
								<div class="input-field col s12">
									<input  type="email" class="validate" name="usuario" id="usuario" required>
									<label for="email">Login:</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field com m12">
									<input type="password" class="validate" name="senha" id="senha" required>
									<label for="password">Senha:</label>
								</div>
							</div>

							<div class="row">
								<button style="margin-left:100px;" type="subimit" name="btnLogin"
										class="col s6 btn-small blue lighten-2 black-text waves-effect z-depth-1 y-depth-1">
										Entrar
										<fieldset style="width:400px" style= "height:300px" >
								</button>
							</div>
						</form>
					</div>
				</div>
			</main>
		</div>
	</div>
	
</body>
</html>
