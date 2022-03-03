<!DOCTYPE html>
<html lang="gl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../../assets/css/index.css">
  <script src="../../../components/js/headerin.js"></script>
  <script src="../../../components/js/footer.js"></script>
  <title>Persoas</title>

  <script src="../../assets/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  
</head>

<body>

	<!-- MENU SUPERIOR -->
	<header-component></header-component>


	<!-- MAIN -->

		<div class="container">
			<div class="row">
				<p class="display-6 pt-5 pb-2">NOVA EMPRESA</p>
			</div>
			
			<!-- form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="nome" class="col-sm-2 control-label">Nome:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nome" placeholder="Nome" required>
					</div>
				</div>
				<div class="form-group">
					<label for="poboacion" class="col-sm-2 control-label">Poboación:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="poboacion" name="poboacion" placeholder="Poboacion" required>
					</div>
				</div>
				<div class="form-group">
					<label for="actividade" class="col-sm-2 control-label">Actividade:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="actividade" name="actividade" placeholder="Actividade" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="data_alta" class="col-sm-2 control-label">Data de alta:</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="dataalta" name="data_incorporacion" placeholder="dd-mm-aa" required>
					</div>
				</div>
				<div class="form-group">
					<label for="ofertas_emprego" class="col-sm-2 control-label">Ofertas de Emprego:</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="email" name="ofertas_contratacion" placeholder="Ofertas emprego" required>
					</div>
				</div>
                <div class="form-group">
					<label for="ofertas_formacion" class="col-sm-2 control-label">Ofertas de Formación:</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="email" name="ofertas_formacion" placeholder="Ofertas formacion" required>
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="../index.php" class="btn btn-default">Voltar</a>
						<button type="submit" class="btn btn-primary">Gardar</button>
					</div>
				</div>
			</form -->

			<form class="row g-3 pb-5"  method="POST" action="guardar.php" autocomplete="off">
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">Entidade</label>
    <input type="text" class="form-control" id="nombre" name="nome" placeholder="Nome" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Poboación</label>
    <input type="text" class="form-control" id="poboacion" name="poboacion" placeholder="Poboacion" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefaultUsername" class="form-label">Actividade</label>
    <div class="input-group">
      
      <input type="text" class="form-control"  id="actividade" name="actividade" placeholder="Actividade" required>
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationDefault03" class="form-label">Data de alta</label>
    <input type="date" class="form-control" id="email" name="data_incorporacion" placeholder="dd-mm-aa" required>
  </div>
  <div class="col-md-3">
    <label for="validationDefault04" class="form-label">Provincia</label>
    <select class="form-select" id="validationDefault04" required>
      <option selected disabled value="">Selecionar...</option>
      <option>Pontevedra</option><option>A Coruña</option><option>Lugo</option><option>Ourense</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="validationDefault05" class="form-label">CP</label>
    <input type="text" class="form-control" id="validationDefault05" required>
  </div>
  <div class="col-md-2">
    <label for="validationDefault05" class="form-label">Ofertas Formación</label>
    <input type="text" class="form-control" id="validationDefault05" required>
  </div>
  <div class="col-md-2">
    <label for="validationDefault05" class="form-label">Ofertas Emprego</label>
    <input type="text" class="form-control" id="validationDefault05" required>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Acepto os términos e condicións do SOL
      </label>
    </div>
  </div>
  <div class="col-12">
  <div class="form-group">
		<a href="../index.php" class="btn btn-default">Voltar</a>
		<button type="submit" class="btn btn-primary">Gardar</button>
	</div>
  </div>
</form>
		</div>
		<!-- FOOTER -->

	<footer-component></footer-component>
	</body>
</html>