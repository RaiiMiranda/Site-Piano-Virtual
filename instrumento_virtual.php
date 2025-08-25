<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title> Instrumento Virtual - Tocar instrumentos online </title>
	</head>
	
	<body>
		
		<div class="tudo">

			<style>
				body {
				  background-image: url("imagens/fundo.gif");
				}
			</style>

			<img id="placa" src="imagens/placa.jpg">

			<p> Instrumento Virtual </p>

			<div class="posicao">
				<form action="#" method="POST">
					<input id="p" type="submit" name="botao" value="PIANO">
				</form>
			</div>

		</div>
	
	</body>
</html>

<?php
//----------------------------------------------------//
	if(isset($_POST['botao']))
		{ $_POST['botao'] = $_POST['botao']; }
	else 
	    { $_POST['botao'] = null; }
//----------------------------------------------------//

	$botao = $_POST['botao'];

	if ($botao == "PIANO") {
		echo "<script>

				var audio = new Audio('audio/botao.wav');
				audio.play();

			  </script>;

			  <meta HTTP-EQUIV='refresh' CONTENT='1;URL=instr_piano.php'>"; 
	}
?>