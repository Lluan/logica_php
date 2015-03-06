<!DOCTYPE hmtl>
<html>
<head>
	<title>Formularios</title>
	<meta charset="utf-8">
</head>
<body>

	<h2>Calcular Media dos Alunos</h2>
	<hr>
	<br>

	
	 
	 <?php 

	 $nomeAluno = $_POST["nome"];
	 $nota1 = $_POST["nota1"];
	 $nota2 = $_POST["nota2"];
	 $nota3 = $_POST["nota3"];

	 $resultado = ($nota1 + $nota2 + $nota3) / 3;

	 if ($resultado>= 7) {
	 	echo "O Aluno <b><i>".$nomeAluno."</i></b> está com media <b>".$resultado."</b>";	
	 	echo "<br/> Sua Situação é Aprovado.";
	 }
	 else if ($resultado >= 5 && $resultado <= 6.99) {
	 	echo "O Aluno <b><i>".$nomeAluno."</i></b> está com media <b>".$resultado."</b>";	
	 	echo "<br/> Sua Situação de Recuperação.";
	 }
	  else{
	 	echo "O Aluno <b><i>".$nomeAluno."</i></b> está com media <b>".$resultado."</b>";	
	 	echo "<br/> Sua Situação é Reprovado.";
	 }

	  ?>
	  <br>
	  <ul>
		<li><a href="../index.php">voltar</a></li>
		<li><a href="calcularNota.php">Fazer novo Cálculo</a></li>
	</ul>

</body>
</html>