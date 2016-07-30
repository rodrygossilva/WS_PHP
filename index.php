<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title> Logica de desenvolvimento </title>
	 
</head>
<body>
<h1>Exercicios Upinside</h1>

<?php

	$data = '28/01/2016';
	$data = explode('/', $data);

	$dia = $data[0];
	$mes = $data[1];
	$ano = $data[2];

	print_r($data);


	$a = 5;
	$b ="5";

	if($a===$b){
		echo "é igual";
	}else{
		//echo "Não é identico";




}
!($a==$b);
		//echo $a;

		//echo $a.=$b;

		$v = array(10,20,30,40,500 );

		for($i=0;$i<5-1;$i++){

			if($v[$i]>$v[$i+1]){
				$temp = $v[$i+1];
				$v[$i+1]=$v[$i];
				$v[$i]=$temp;
				$i-1;
			}

			for($i=0;$i<5;$i++){
			echo $v[$i]."<br>";
		}

		}
		



?>


	
	
</body>
</html>