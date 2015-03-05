<!DOCTYPE html>
<html>
<head>
	<title>Resultado da comissão</title>
</head>
<body>

	<?php 

	$nomeVendedor = $_POST["nomeVendedor"];
	$salario = $_POST["salario"];
	$vendaTotal = $_POST["vendaTotal"];

	$comissão = $vendaTotal * 0.15;
	$salarioTotal = $salario * $comissão;

	?>

	<h2>Resultado da comissão do vendedor <?php print $nomeVendedor ?> </h2>
	Salario deste mês é <b><?php echo $salarioTotal; ?></b>

</body>
</html>