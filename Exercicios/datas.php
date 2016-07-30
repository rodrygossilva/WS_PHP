<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title> Logica de desenvolvimento </title>
	 
</head>
<body>
<h1>Exercicios Upinside</h1><br/>
<h2>Formatação de datas</h2>

<?php

	$timesramp = date('Y-m-d H:i:s');
	echo $timesramp.'<hr/>';

	$dataNormal = date('d-m-Y H:i:s');
	echo $dataNormal.'<hr/>';

	//$ann = '2016/01/28';
	//$ann = date('d-m-Y',strtotime('28-01-2016'));
	$ann = date('d-m-Y H:i:s');
	echo 'Dia: '.date('d',strtotime($ann)).'<br/>';
	echo 'Mes: '.date('m',strtotime($ann)).'<br/>';
	echo 'Ano: '.date('Y',strtotime($ann));


?>


	
	
</body>
</html>