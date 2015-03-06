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
	

	<form action="" method="GET">
		<label>Nome:</label>
		<input type="text" name="nome">
		<br>
		<label>Sobrenome:</label>
		<input type="text" name="sobrenome">
		<br>
		<input type="submit" name="Enviar">
	</form>

	<?php 

	$nomeCompleto = $_GET["nome"]." ".$_GET["sobrenome"];


	echo $nomeCompleto;

	 ?>

	 <br>
	 <a href="index.php">voltar</a>


</body>
</html>