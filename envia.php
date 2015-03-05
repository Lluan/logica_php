<?php
	$v1=$_POST['v1'];
	$v2=$_POST['v2'];

	$total=$v1/$v2;

	echo('<p/>Valor de "v1": '.$v1);
	echo('<p/>Valor de "v2": '.$v2);
	echo('<p/> Total: '.$total);
?>