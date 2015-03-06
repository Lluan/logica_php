<!DOCTYPE html>
<html>
<head>
	<title>Lanchonete</title>
	<meta charset="utf-8">
</head>
<body>

	<h2>Lanchonete</h2>

		<form action="pedido.php" method="post">
		<label>
			<input type="radio" name="lanche" value="1">Pão com Ovo
		</label>
		<br>

		<label>
			<input type="radio" name="lanche" value="2">Pão com Sardinha
		</label>
		<br>
		
		<label>
			<input type="radio" name="lanche" value="3">Cachorro Quente sem Ovo
		</label>
		<br>

		<label>
			<input type="radio" name="lanche" value="4">Cachorro Quente  Com Ovo
		</label>
		<br>
		<br>
		<input type="submit" value="Selecione um Pedido">
	</form>

	<hr>
	<br>
	<a href="Index.php">Voltar</a>
</body>
</html>