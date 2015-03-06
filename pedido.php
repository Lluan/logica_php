<!DOCTYPE html>
<html>
<head>
	<title>Pedido</title>
	<meta charset="utf-8">
</head>
<body>

	<h2>Seu Pedido</h2>

	<?php 
	$lanche = $_POST["lanche"];

	switch ($lanche) {
		case 1:
			echo "Selecione Pão Com Ovo custa R$ 1,50";
		break;
		
		case 2:
			echo "Selecione Pão Com Sardinha custa R$ 2,50";
		break;
		
		case 3:
			echo "Selecione Cachorro Quente Sem Ovo custa R$ 3,50";
		break;
		
		case 4:
			echo "Selecione Cachorro Quente Com Ovo custa R$ 4,00";
		break;
		
		default:
			echo "Por Favor, Selecione as opções acima";
		break;
	}
	 ?>

	 <br>
	 <br>
	 <a href="lanchonete.php">Voltar</a>

</body>
</html>