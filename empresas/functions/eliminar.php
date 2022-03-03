<?php

	require '../../conexion/conexion.php';
        require '../../conexion/sesion.php';

	$id = $_GET['id'];
	
	$sql = "DELETE FROM empresas WHERE id = '$id'";
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
  <title>Empresas - Elimnar rexistro</title>

  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  
</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
				<?php if($resultado) { ?>
					<h3>REXISTRO ELIMINADO</h3>
				<?php } else { ?>
				<h3>ERRO AO ELIMINAR</h3>
				<?php } ?>
				
				<a href="index.php" class="btn btn-primary">VOLTAR</a>
				
				</div>
			</div>
		</div>
	<script>
		$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
	</script>	
	</body>
</html>
