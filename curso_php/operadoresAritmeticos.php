<!DOCTYPE html>
<html>
<head>
	<title>Testando PHP</title>
	<meta charset="utf-8">
</head>
<body>

	<h2>Aritmética</h2>
	

	<?php

	$a = 10;
	$b = 5;
	$resultadosoma = $a + $b;
	$resultadossubtracao = $a - $b;
	$resultadomultiplicacao = $a * $b;
	$resultadodivisao = $a / $b;
	$resultadomodulo = $a % $b;

	print"Soma de a + b = ".$resultadosoma."<br>";
	print"subtração de a - b = ".$resultadossubtracao."<br>";
	print"multiplicação de a * b = ".$resultadomultiplicacao."<br>";
	print"divisão de a / b = ".$resultadodivisao."<br>";
	print"modulo de a % b = ".$resultadomodulo."<P>";

	$a++;
	print"INCREMENTO".$a."<br>";

	$b--;
	print"DECREMENTO ".$b."<p>";

	$a = $a + 2;
	print"A = ".$a;
	


	?>

<br>
<a href="index.php">Voltar</a>
	

</body>
</html>