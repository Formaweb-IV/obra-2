<?php
require './conexion/conexion.php';
require './conexion/sesion.php';
// este cacho de php tiene que ir SIEMPRE al inicio de los archivos de las páginas (a no ser que
// solo actúen como funciones y no haya front-end), y excepto aquí en el index deben ponerse los
// dos puntos y / antes del nombre de la carpeta
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OBRA 2 SOL</title>

  <link rel="stylesheet" href="./assets/css/index.css">
  <script src="../components/js/header.js"></script>
  <script src="./components/js/footer.js"></script>
</head>

<body>
  <header-component></header-component>

  <main class="container">
    <div class="row">
      <!-- div class="container" -->
        <h1 class="display-4 fs-light py-3">Benvido SOL</h1>
        <br><br>


        <div class="row">
        <div id="content" class="col-lg-12">
            <div class="date">
                <span id="weekDay" class="weekDay">Miércoles</span>, 
                <span id="day" class="day">3</span> de
                <span id="month" class="month">Marzo</span> del
                <span id="year" class="year">2022</span>
            </div>
            <div class="clock">
                <span id="hours" class="hours">1</span> :
                <span id="minutes" class="minutes">07</span> :
                <span id="seconds" class="seconds">59</span>
            </div>
        </div>
    </div>



        <div class="row mb-2">
          <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-uppercase text-primary">Persoas</strong>
                <h3 class="mb-0 ">Xestión de perfiles</h3>
                <em class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</em><br>

                <a href="persoas/index.php" class="stretched-link">Indice Persoas</a><br>
                <a href="persoas/functions/nuevo.php" class="stretched-link">Novo Rexistro</a>
              </div>
              <div class="col-auto d-none d-lg-block">
                <img src="https://images.unsplash.com/photo-1645280403333-3775178fc8c6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=235&q=80">
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-uppercase text-warning">Empresas</strong>
                <h3 class="mb-0">Formación e emprego</h3>
                <em class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</em>

                <a href="empresas/index.php" class="stretched-link">Index Empresas</a><br>
                <a href="empresas/functions/nuevo.php" class="stretched-link">Novo Rexistro Empresas</a>
              </div>
              <div class="col-auto d-none d-lg-block">
                <img src="https://images.unsplash.com/photo-1602464729960-f95937746b68?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=235&q=80">
              </div>
            </div>
          </div>
        </div>

        <a href="login/logout.php">Saír da sesión</a>
      <!-- /div-->
    </div>
  </main>
  <footer-component></footer-component>


  <script src="./assets/js/bootstrap.bundle.min.js"></script>

  <!-- el código html de arriba es el del index que creamos con las dependencias + un h1 de prueba
y un enlace para salir (comprobar que funciona el logout) -->
</body>

</html>