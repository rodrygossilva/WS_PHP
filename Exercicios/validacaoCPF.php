<meta http-equiv="content-typy"; content="text/html"; charset="UTF-8" />




<?php

	function validaCPF($cpf){

		//$cpf = '827.293.285-72';

		$cpf = preg_replace('/[^0-9]/','', $cpf);

		$digitoA = 0;
		$digitoB = 0;
		

		for($i = 0, $x = 10; $i <= 8; $i++, $x--){
			$digitoA += $cpf[$i] * $x;
		}
		//echo 'O digito A é igual a:'.$digitoA.'<br/>';

		for($i = 0, $x = 11; $i <= 9; $i++, $x--){
			
			if(str_repeat($i,11)==$cpf){
				return false;
			}

			$digitoB += $cpf[$i] * $x;
		}

		$somaA = (($digitoA%11) < 2 ) ? 0 : 11-($digitoA%11);
		$somaB = (($digitoB%11) < 2 ) ? 0 : 11-($digitoB%11);
		//echo $somaA.'<br/>';
		//echo $somaB;

		if($somaA != $cpf[9] || $somaB != $cpf[10]){
			return false;
		}else{
			return true;
		}

	}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title> Logica de desenvolvimento </title>
	 
</head>
<body>
<h1>Exercicios Upinside</h1><br/>
<h2>Validação de CPF</h2>

	<form name='form' action="" method="get">
		

		<?php

				$cpf = $_GET['cpf'];
				if(isset($_GET['botao'])){
						if((isset($cpf )) && ($cpf != ""))
						{
							if(validaCPF($cpf))
						      {
								echo "CPF válidossssssssssss";
							  }else
							  {
								echo "Informe um Cpf válido!!";
							  }
						}else
						{
							echo 'Informe um CPF';
						}
				}

			//echo $cpf.'teste';
		?>

		<input type="text" name ="cpf">
		<input type="submit" id="enviar" name="botao" value="Validar" ><br/>


	</form>


	
	
</body>
</html>

