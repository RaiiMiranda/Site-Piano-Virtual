<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title> Piano Virtual - Tocar piano online </title>
	</head>

	<body>
		<style>
			body {
			  background-image: url("imagens/fundo.gif");
			}
		</style>

		<form action="#" method="POST">
			<center>

				<div id="titulo"> 𝄞 Piano Virtual </div> 

				<input id="a" type="submit" name="botao" value="Jingle Bells">
				<input id="a" type="submit" name="botao" value="Happy Birthday">

				<div id="posicao_branco">
					<input id="branco" type="submit" name="botao" value="1">
					<input id="branco" type="submit" name="botao" value="2">
					<input id="branco" type="submit" name="botao" value="3">
					<input id="branco" type="submit" name="botao" value="4">
					<input id="branco" type="submit" name="botao" value="5">
					<input id="branco" type="submit" name="botao" value="6">
					<input id="branco" type="submit" name="botao" value="7">
					<input id="branco" type="submit" name="botao" value="8">
					<input id="branco" type="submit" name="botao" value="9">
					<input id="branco" type="submit" name="botao" value="10">
					<input id="branco" type="submit" name="botao" value="11">
					<input id="branco" type="submit" name="botao" value="12">
					<input id="branco" type="submit" name="botao" value="13">
					<input id="branco" type="submit" name="botao" value="14"> <br> <br>

					<input id="voltar" type="submit" name="botao" value="VOLTAR"> 
				</div>

		
				<div id="posicao_preto">
					<input id="preto" type="submit" name="botao" value="p1">
					<input id="preto" type="submit" name="botao" value="p2">
				</div>

				<div id="posicao_preto2">
					<input id="preto" type="submit" name="botao" value="p3">
					<input id="preto" type="submit" name="botao" value="p4">
					<input id="preto" type="submit" name="botao" value="p5">
				</div>

				<div id="posicao_preto3">
					<input id="preto" type="submit" name="botao" value="p6">
					<input id="preto" type="submit" name="botao" value="p7">
				</div>

				<div id="posicao_preto4">
					<input id="preto" type="submit" name="botao" value="p8">
					<input id="preto" type="submit" name="botao" value="p9">
					<input id="preto" type="submit" name="botao" value="p10">
				</div>

			</center>
		</form>

	</body>
</html>

<?php  
	//-------------------------------------------------------------------//
	if(isset($_POST['botao']))
		{ $_POST['botao'] = $_POST['botao']; }
	else 
	    { $_POST['botao'] = null; }
	//-------------------------------------------------------------------//

	$botao = $_POST['botao'];

	//--------------------------- MÚSICAS -------------------------------//

		if($botao == "Jingle Bells") {
			echo "<script>

					var audio = new Audio('audio/botao.wav');
					audio.play();

				  </script>

				  <meta HTTP-EQUIV='refresh' CONTENT='1;URL=natal.php'>";
		}

		if($botao == "Happy Birthday") {
			echo "<script>

					var audio = new Audio('audio/botao.wav');
					audio.play();

				  </script>

				  <meta HTTP-EQUIV='refresh' CONTENT='1;URL=aniversario.php'>";
		}

	//----------------------- TECLA BRANCA -----------------------------//
		if($botao == "1") {
			echo "<script>

					var audio = new Audio('audio/b1.wav');
					audio.play();

				  </script>";
		}

		if($botao == "2") {
			echo "<script>

					var audio = new Audio('audio/b2.wav');
					audio.play();

				  </script>";
		}

		if($botao == "3") {
			echo "<script>

					var audio = new Audio('audio/b3.wav');
					audio.play();

				  </script>";
		}

		if($botao == "4") {
			echo "<script>

					var audio = new Audio('audio/b4.wav');
					audio.play();

				  </script>";
		}

		if($botao == "5") {
			echo "<script>

					var audio = new Audio('audio/b5.wav');
					audio.play();

				  </script>";
		}

		if($botao == "6") {
			echo "<script>

					var audio = new Audio('audio/b6.wav');
					audio.play();

				  </script>";
		}

		if($botao == "7") {
			echo "<script>

					var audio = new Audio('audio/b7.wav');
					audio.play();

				  </script>";
		}

		if($botao == "8") {
			echo "<script>

					var audio = new Audio('audio/b8.wav');
					audio.play();

				  </script>";
		}

		if($botao == "9") {
			echo "<script>

					var audio = new Audio('audio/b9.wav');
					audio.play();

				  </script>";
		}

		if($botao == "10") {
			echo "<script>

					var audio = new Audio('audio/b10.wav');
					audio.play();

				  </script>";
		}

		if($botao == "11") {
			echo "<script>

					var audio = new Audio('audio/b11.wav');
					audio.play();

				  </script>";
		}

		if($botao == "12") {
			echo "<script>

					var audio = new Audio('audio/b12.wav');
					audio.play();

				  </script>";
		}

		if($botao == "13") {
			echo "<script>

					var audio = new Audio('audio/b13.wav');
					audio.play();

				  </script>";
		}

		if($botao == "14") {
			echo "<script>

					var audio = new Audio('audio/b14.wav');
					audio.play();

				  </script>";
		}

	//-----------------------------------------------------------------//

	//----------------------- TECLA PRETA -----------------------------//
		if($botao == "p1") {
		echo "<script>

				var audio = new Audio('audio/p1.wav');
				audio.play();

			  </script>";
		}

		if($botao == "p2") {
		echo "<script>

				var audio = new Audio('audio/p2.wav');
				audio.play();

			  </script>";
		}

		if($botao == "p3") {
		echo "<script>

				var audio = new Audio('audio/p3.wav');
				audio.play();

			  </script>";
		}

		if($botao == "p4") {
		echo "<script>

				var audio = new Audio('audio/p4.wav');
				audio.play();

			  </script>";
		}

		if($botao == "p5") {
		echo "<script>

				var audio = new Audio('audio/p5.wav');
				audio.play();

			  </script>";
		}

		if($botao == "p6") {
		echo "<script>

				var audio = new Audio('audio/p6.wav');
				audio.play();

			  </script>";
		}

		if($botao == "p7") {
		echo "<script>

				var audio = new Audio('audio/p7.wav');
				audio.play();

			  </script>";
		}

		if($botao == "p8") {
		echo "<script>

				var audio = new Audio('audio/pre8.wav');
				audio.play();

			  </script>";
		}

		if($botao == "p9") {
		echo "<script>

				var audio = new Audio('audio/p9.wav');
				audio.play();

			  </script>";
		}

		if($botao == "p10") {
		echo "<script>

				var audio = new Audio('audio/p10.wav');
				audio.play();

			  </script>";
		}
		
	//-----------------------------------------------------------------//
		
	if ($botao == "VOLTAR")
	{	
		$_POST['botao'] = "";
		echo "<script>

				var audio = new Audio('audio/botao.wav');
				audio.play();

			  </script>;

			  <meta HTTP-EQUIV='refresh' CONTENT='1;URL=instrumento_virtual.php'>"; 
	}
?>