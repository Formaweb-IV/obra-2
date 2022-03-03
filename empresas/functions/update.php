<?php
require '../../conexion/conexion.php';
	
	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$poboacion = $_POST['poboacion'];
	$actividade = $_POST['actividade'];
	$data_incorporacion = $_POST['data_incorporacion'];
	$ofertas_contratacion = $_POST['ofertas_contratacion'];
	$ofertas_formacion = $_POST['ofertas_formacion'];
	
	
	
	// $arrayIntereses = null;
	
	// $num_array = count($intereses);
	// $contador = 0;
	
	// if($num_array>0){
	// 	foreach ($intereses as $key => $value) {
	// 		if ($contador != $num_array-1)
	// 		$arrayIntereses .= $value.' ';
	// 		else
	// 		$arrayIntereses .= $value;
	// 		$contador++;
	// 	}
	// }
	
	$sql = "INSERT INTO empresas (nome, poboacion, actividade, data_incorporacion, ofertas_contratacion, ofertas_formacion) VALUES ('$nome', '$poboacion', '$actividade', '$data_incorporacion', '$ofertas_contratacion', '$ofertas_formacion')";
	$resultado = $mysqli->query($sql);	
?>

<!DOCTYPE html>
<html lang="gl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../../assets/css/index.css">
  <script src="../../../components/js/headerin.js"></script>
  <script src="../../../components/js/footer.js"></script>
  <title>Empresas - Modificar rexistro</title>

  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  
</head>

	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REGISTRO MODIFICADO</h3>
						<a href="./index.php" class="btn btn-primary">VOLTAR</a>
						<?php } else { ?>
						<h3>ERROR AL MODIFICAR</h3>
						<a href="./modificar.php" class="btn btn-primary">VOLTAR</a>
					<?php } ?>
					
				</div>
			</div>
		</div>
		
	</body>
</html>