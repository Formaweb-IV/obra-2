<?php
require '../../conexion/conexion.php';

$id = $_GET['id'];

$sql = "SELECT * FROM empresas WHERE id = '$id'";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);

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

  <!-- ESTRUCTURA PARA TENER VARIAS PESTAÑAS DINÁMICAS EN UNA MISMA PÁGINA -->
  <h2 style="text-align:center">Prueba de lo que se abriría al clicar "MODIFICAR" de Empresas</h2><br>

  <div class="t-container">

    <ul class="t-tabs">
      <li class="t-tab">Datos Empresa</li>
      <li class="t-tab">xxx</li>
      <li class="t-tab">xxx</li>
      <li class="t-tab">xxx</li>
      <li class="t-tab">xxx</li>
      <li class="t-tab"><a href="../../login/logout.php">Saír da sesión</a></li>
    </ul>

    <ul class="t-contents">

      <li class="t-content">
        <!-- <p>Contenido Datos</p> -->
        <h3 class="p-5 text-center">MODIFICAR EMPRESA</h3>

        <form class="row g-3" method="POST" action="update.php" autocomplete="off">
          <div class="col-md-4">
			  
            <label for="nome" class="control-label">Nome:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nombre" name="nome" placeholder="Nome" value="<?php echo $row['nome']; ?>" required>
            </div>
          </div>
		  
		  <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />

          <div class="col-md-4">
            <label for="poboacion" class="ontrol-label">Poboación:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="poboacion" name="poboacion" placeholder="Poboacion" value="<?php echo $row['poboacion']; ?>" required>
            </div>
          </div>
          <div class="col-md-4">
            <label for="actividade" class="control-label">Actividade:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="actividade" name="actividade" placeholder="Actividade" value="<?php echo $row['actividade']; ?>" required>
            </div>
          </div>

          <div class="col-md-4">
            <label for="data_alta" class="control-label">Data de alta:</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="email" name="data_incorporacion" placeholder="dd-mm-aa" value="<?php echo $row['data_incorporacion']; ?>" required>
            </div>
          </div>
          <div class="col-md-4">
            <label for="ofertas_emprego" class="control-label">Ofertas de Emprego:</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="email" name="ofertas_contratacion" placeholder="Ofertas emprego" value="<?php echo $row['ofertas_contratacion']; ?>" required>
            </div>
          </div>
          <div class="col-md-4">
            <label for="ofertas_formacion" class="control-label">Ofertas de Formación:</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="email" name="ofertas_formacion" placeholder="Ofertas formacion" value="<?php echo $row['ofertas_formacion']; ?>" required>
            </div>
          </div>

          <div class="col-md-4">
            <div class="col-sm-offset-2 col-sm-10">
              <a href="/empresas/index.php" class="btn btn-default">Voltar</a>
              <button type="submit" class="btn btn-primary">Gardar</button>
            </div>
          </div>
        </form>

      </li>

      <li class="t-content">
        <p>Contenido xxx</p>
      </li>
      <li class="t-content">
        <p>Contenido xxx</p>
      </li>
      <li class="t-content">
        <p>Contenido xxx</p>
      </li>
      <li class="t-content">
        <p>Contenido xxx</p>
      </li>

    </ul>
  </div>

  <script src="../../tabs.js"></script>

</body>

</html>
