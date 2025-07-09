<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>STREAM LIVE</title>
  <link rel="stylesheet" href="styles.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body>

<header>
  <!-- Logo -->
  <div class="bg-primary py-4 text-center">
    <img src="./images/logo.png" alt="StreamLive" style="max-height: 150px;">
  </div>

  <!-- Barra de navegación más compacta -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary py-1"> <!-- Reduje el padding vertical (py-1) -->
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav w-100 justify-content-between align-items-center"> <!-- align-items-center para centrar verticalmente -->
          <!-- Enlaces con menos espacio horizontal (px-2 en lugar de px-3) -->
          <li class="nav-item px-2"> <!-- Ajusta px-2 a px-1 si quieres más juntos -->
            <a class="nav-link active" href="index.php">Inicio</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link active" href="index.php#planes">Planes</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link active" href="instalacion.php">¿Como instalar en mi dispositivo?</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link active" href="creamarca.php">Crea tu marca</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link active" href="reseller.php">Resellers</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link active" href="index.php#faq">Preguntas fecuentes</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link active" href="contacto.php">Contacto</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link active" href="login.php">Iniciar Sesión</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link active" href="v_session_destroy.php">Cerrar Sesión</a>
          </li>
           <li class="nav-item px-2">
            <a class="nav-link active" href="registroClientes.php">Registrar Cliente</a>
          </li>
          <!-- <li class="nav-item ms-2"> 
            <a class="btn btn-warning text-black py-1" href="#" style="background-color: #FF9900; border-color: #FF9900;">Regístrate</a>
          </li>
          <li class="nav-item ms-2">
            <a class="btn btn-warning text-black py-1" href="#" style="background-color: #FF9900; border-color: #FF9900;">Inicia sesión</a>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>
</header>

