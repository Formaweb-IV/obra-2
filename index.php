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

<!-- header -->
  <header-component></header-component>

<!-- main container -->
  <main class="container">
    <div class="row">
      <div class="col-md-6">
        <!-- div class="container" -->
        <h1 class="display-5 fs-light py-3">Benvido ao SOL</h1>
      </div>

      <!-- /* relo calendario */ -->
      <!-- div class="row"-->
      <div id="content" class="col-md-6 text-end small pt-3">
        <div class="clock">
          <span id="hours" class="hours">1</span> :
          <span id="minutes" class="minutes">07</span> :
          <span id="seconds" class="seconds">59</span>
        </div>
        <div class="date">
          <span id="weekDay" class="weekDay">Miércoles</span>,
          <span id="day" class="day">3</span>
          <span id="month" class="month">Marzo</span>
          <span id="year" class="year">2022</span>
        </div>
      </div>
    </div>
<!-- fin relo calendario -->


    <div class="row mb-2">
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-uppercase text-primary">Persoas</strong>
            <h3 class="mb-0 ">Xestión de perfiles</h3>
            <em class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</em><br>

            <a class="btn btn-primary btn-sm text-white" href="persoas/index.php" role="button">Indice Persoas</a><br>
            <a class="btn btn-warning btn-sm text-white" href="persoas/functions/nuevo.php" role="button">Novo Rexistro</a>
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
            
            <a class="btn btn-primary btn-sm text-white"  href="empresas/index.php" class="stretched-link">Índice Empresas</a><br>
            <a class="btn btn-warning btn-sm text-white"  href="empresas/functions/nuevo.php" class="stretched-link">Novo Rexistro</a>

            <!-- a class="btn btn-primary btn-sm text-white"  href="empresas/index.php" class="stretched-link">Index Empresas</a><br>
            <a class="btn btn-warning btn-sm text-white"  href="empresas/functions/nuevo.php" class="stretched-link">Novo Rexistro Empresas</a -->
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="https://images.unsplash.com/photo-1645280403333-3775178fc8c6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=235&q=80">
          </div>
        </div>
      </div>
    </div>

    <a class="nav-link" href="./login/logout.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Pechar sesión"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg> Saír da sesión</a>
    <!-- /div-->
    </div>
  </main>

<!-- footer -->
  <footer-component></footer-component>


  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  
  <script src="./components/clock.js"></script>
  <!-- el código html de arriba es el del index que creamos con las dependencias + un h1 de prueba
y un enlace para salir (comprobar que funciona el logout) -->


<script>
$(document).ready(function() {
  $(".search a").click(function() {
      $(this).parent(".search").toggleClass("collapsed");
    });

  $('ul.navbar-nav > li')
          .click(function (e) {
      $('ul.navbar-nav > li')
          .removeClass('active');
      $(this).addClass('active');
  });

  });</script>

</body>
</html>