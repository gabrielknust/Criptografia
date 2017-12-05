<!DOCTYPE html>
<html>
<head>
	<title>Trabalho de Fundamento de Redes</title>
</head>
<body>
	<div id="cripto">
		<h1> Criptografar </h1>
		<form method="POST" action="criptografa.php">
			<label>Mensagem a ser criptografada</label>
			<input type="text" name="mensagemD">
			<label>Senha da criptografia</label>
			<input type="text" name="senhaD">
			<input type="submit">
		</form>
	</div>
	<div id="descripto">
		<h1> Descriptografar </h1>
		<form method="POST" action="descriptografa.php">
			<label>Mensagem a ser descriptografada</label>
			<input type="text" name="mensagemC">
			<label>Senha da criptografia</label>
			<input type="text" name="senhaC">
			<input type="submit">
		</form>
	</div>
</body>
</html>