<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>VALIDAR - Estudos-PHP</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="tudo">

		<?php include 'header.html'; ?>

		<div class="header">	
			<?php 
			require "conexao.php";

			$nome_usu=$_POST['nome_usu'];
			$senha =$_POST['senha'];

			if(!empty($_POST) AND (empty($_POST['nome_usu']) OR empty($_POST['senha'])))
			{
				echo "<center><h1>Usuário ou senha não informado.</h1>";
			}
			else
			{
				$pesquisaUsu = mysqli_query($con, " SELECT nome_usu, senha FROM tbl_usuario WHERE nome_usu = '$nome_usu' and senha = '$senha'") ;

				if (mysqli_num_rows($pesquisaUsu) == 0) 
				{
					echo "<center><h1>Usuario ou senha incorreto.</h1>";
				}
				else
				{
					echo "<center><h1>Bem Vindo! O usuario $nome_usu está cadastrado/a.</h1>";
				}
			}	  	
			?>
			
			<?php include 'footer.html'; ?>

		</div>
	</body>
	</html>
