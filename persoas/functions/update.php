<?php

require '../../conexion/conexion.php';
require '../../conexion/sesion.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$primeiro_apelido = $_POST['primeiro_apelido'];
$segundo_apelido = $_POST['segundo_apelido'];
$nif = $_POST['nif'];
$data_nacemento = $_POST['data_nacemento'];
$sexo = $_POST['sexo'];
$codigo_postal = $_POST['codigo_postal'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];

$sql = "UPDATE persoas SET nome='$nome', primeiro_apelido='$primeiro_apelido', segundo_apelido='$segundo_apelido', nif='$nif', data_nacemento='$data_nacemento', sexo='$sexo', codigo_postal='$codigo_postal', telefono='$telefono', email='$email' WHERE id = '$id'";
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
  <title>Persoas - Actualizar rexistro</title>
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  
</head>


<body>

  <div class="container">
    <div class="row">
      <div class="row" style="text-align:center">
        <?php if ($resultado) { ?>
          <h3>REGISTRO MODIFICADO</h3>
          <a href="index.php" class="btn btn-primary">VOLTAR</a>
        <?php } else { ?>
          <h3>ERROR AL MODIFICAR</h3>
          <a href="modificar.php" class="btn btn-primary">VOLTAR</a>
        <?php } ?>

      </div>
    </div>
  </div>

</body>

</html>
