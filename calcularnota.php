<!DOCTYPE hmtl>
<html>
<head>
	<title>Formularios</title>
	<meta charset="utf-8">
</head>
<body>

	<h2>Formularios</h2>
	<hr>
	<br>
	
	
	<form action="calcularMedia.php" method="POST">
		<label>Nome:</label>
		<input type="text" name="nome" placeholder="Digiti seu Nome">
		<br>
		<br>
		<label>Nota 1:</label>
		<input type="text" name="nota1" placeholder="Sua Primeira nota">
		<br>
		<br>
		<label>Nota 2:</label>
		<input type="text" name="nota2" placeholder="Sua Segunda nota">
		<br>
		<br>
		<label>Nota 3:</label>
		<input type="text" name="nota3" placeholder="Sua Terceira nota">
		<br>
		<br>
		<input type="submit" name="Enviar">
	</form>

	<?php 

	$nomeCompleto = $_GET["nome"]." ".$_GET["sobrenome"];


	echo $nomeCompleto;

	 ?>

	 <br>
	 <a href="../index.php">voltar</a>


</body>
</html>