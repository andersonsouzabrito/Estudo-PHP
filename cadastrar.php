<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CADASTRO - Estudos-PHP</title>
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
			<form name="login" action="gravar.php" method="post" onsubmit="return validar()">
				<input type="text" name="nome_usu" placeholder="Digite o seu nome." minlength="8" oninvalid="setCustomValidity('Mínimo de 8 letras.')" ><br>		
				<input type="text" name="cpf" placeholder="CPF" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" title="Digite um CPF no formato: xxx.xxx.xxx-xx" ><br/>
				<input type="email" name="email" placeholder="Email" ><br/>
				<input type="password" name="senha" placeholder="Senha" minlength="8" oninvalid="setCustomValidity('Mínimo de 8 dígitos.')"><br/>
				<input type="submit" value="Criar Usuário" >
			</form>
		</div>
		<?php include 'footer.html'; ?>
	</div>
</body>
</html>