<!DOCTYPE html>
<html>
<head>
	<title>Exercicio</title>
	<meta charset="utf-8">
</head>
<body>

	<h2></h2>

	<?php 

	$distancia = 100;//km
	$combustivel = 10;//l
	$gasto = $distancia/$combustivel;

	echo "Num percurso de 100 km um carro gasta: ".$gasto."litros de combustivel";

	
	 ?>
	 <br>
	 <?php 

	$nota1 = 8;
	$nota2 = 6;
	$nota3 = 4;
	$res = $nota1+$nota2+$nota3;
	$media = $res/3;

	echo "A media do aluno é: ".$media;
 
 ?>

<br>
	<form method="POST" action="envia.php">
		<label> Disntacia: </label>
		<input type="text" name="v1" /> <p/>
		
		<label> Combustivel: </label>
		<input type="text" name="v2" /> <p/>
		<input type="submit" value="OK" />
	</form>

	 <br>
	 <a href="index.php">Voltar</a>


</body>
</html>