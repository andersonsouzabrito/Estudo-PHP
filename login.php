<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>LOGIN - Estudos-PHP</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<script type="text/javascript">
	function validar() 
	{
		if (login.nome_usu.value == "")
		{
			alert("Preencha o nome do usuario.");
			login.nome_usu.focus();
			return false;
		}
		if (login.senha.value == "")
		{
			alert("Digite a senha");
			login.senha.focus();
			return false;
		}
	}	
</script>
<body>
	<div class="tudo">
		<?php include 'header.html'; ?>
		<div class="content">
			<form name="login" action="validar.php" method="post" onsubmit="return validar()">
				<input type="text" name="nome_usu" placeholder="Digite o usuário." minlength="8" oninvalid="setCustomValidity('Mínimo de 8 letras.')" ><br/>
				<input type="password" name="senha" placeholder="Digite sua senha." minlength="8" oninvalid="setCustomValidity('Mínimo de 8 dígitos.')"><br/>
				<input type="submit" value="Entrar no Sistema" >
			</form>
		</div>
		<h2>Ainda não é Usuário ? </h2>
		<h3><a href="cadastrar.php">CADASTRE-SE</a></h3>
		<?php include 'footer.html'; ?>
	</div>
</body>
</html>