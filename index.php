<?php 

    session_start();
    include 'header.php'; 
    include './conexion.php';
    date_default_timezone_set('GMt-6');
    mysqli_set_charset($conn,'utf8');

    if($_SESSION['Usuario'] != null && $_SESSION['Usuario'] != "")
    {
        $nombreCompleto = $_SESSION['Nombre']." ".$_SESSION['ApellidoPaterno']." ".$_SESSION['ApellidoMaterno'] ;
        echo "Bienvenido: ".$nombreCompleto;
    }
    else
    {
        echo "No hay sesion";
    }
?>


<!-- Hero Mejorado -->
<section class="text-white py-5 position-relative"
    style="background: linear-gradient(135deg, #0057A0 0%, #003366 100%); overflow: hidden;">
    <!-- Imagen de fondo decorativa (pantallas flotantes) -->
    <div class="position-absolute top-0 end-0 w-50 h-100 d-none d-lg-block">
        <img src="./images/movies.png" class="w-100 h-100 object-fit-cover " alt="Pantallas de TV">
    </div>

    <div class="container position-relative z-1">
        <div class="row align-items-center">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-4 fw-bold mb-3">Contrata ahora! TV en Vivo, Deportes y <span
                        style="color: #F7710E;">+25,000 Contenidos</span></h1>

                <!-- Estadísticas impactantes -->
                <div class="d-flex flex-wrap justify-content-center justify-content-lg-start gap-4 my-4">
                    <div class="text-center">
                        <div class="display-5 fw-bold" style="color: #F7710E;">2,500+</div>
                        <div class="small">Canales HD/4K</div>
                    </div>
                    <div class="text-center">
                        <div class="display-5 fw-bold" style="color: #F7710E;">20,000+</div>
                        <div class="small">Películas</div>
                    </div>
                    <div class="text-center">
                        <div class="display-5 fw-bold" style="color: #F7710E;">2,500+</div>
                        <div class="small">Series completas</div>
                    </div>
                </div>

                <p class="lead mb-4">La mejor experiencia de entretenimiento con cobertura mundial y soporte 24/7 SIN
                    CAIDAS!</p>
                <p class="lead mb-4 position-relative" style="font-size: 1.5rem;">
                    <span
                        class="position-absolute top-0 start-0 translate-middle badge rounded-pill bg-danger py-2 px-3"
                        style="font-size: 0.6rem; transform: translate(-50%, -50%) rotate(-15deg);">
                        ¡LIMITADO!
                    </span>

                    <span class="d-inline-block position-relative">
                        <span class="fw-bold" style="color: #F7710E;">SOLICITA TU
                            PRUEBA GRATUITA</span>
                        <span class="position-absolute bottom-0 start-0 w-100 border-bottom border-warning border-3"
                            style="transform: translateY(5px);"></span>
                    </span>
                    <br>
                    <span class="text-black px-3 py-2 rounded fw-bold d-inline-block"
                        style="font-size: 1.1rem; box-shadow: 0 2px 5px color:#F7710E">
                        <i class="bi bi-clock-fill me-2" style="color: #F7710E;"></i> <!-- Icono de reloj (opcional) -->
                        24 HORAS DE ACCESO COMPLETO
                    </span>

                    <small class="d-block mt-2 text-black fw-bold" style="letter-spacing: 0.5px;">
                        <span class="text-danger">✓</span> SIN TARJETA REQUERIDA •
                        <span class="text-danger">✓</span> CANCELA CUANDO QUIERAS
                    </small>
                </p>

                <div class="d-flex flex-wrap gap-3 justify-content-center justify-content-lg-start">
                    <a href="https://wa.me/593999339604" target="_blank" class="btn btn-lg px-4 fw-bold"
                        style="background-color: #F7710E; color: #000;">
                        PRUEBA GRATIS 24H
                    </a>
                    <a href="#planes" class="btn btn-outline-light btn-lg px-4">Ver Planes</a>
                </div>

            </div>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>

    <!-- Ola decorativa -->
    <div class="position-absolute bottom-0 start-0 w-100">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M0 60L60 45C120 30 240 0 360 0C480 0 600 30 720 45C840 60 960 60 1080 45C1200 30 1320 0 1380 0L1440 0V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0V60Z"
                fill="white" />
        </svg>
    </div>
</section>

<section class="py-5 bg-light position-relative">
    <div class="container">
        <!-- Decoración de fondo -->
        <div class="position-absolute top-0 start-0 w-100 h-100 opacity-10">
            <div class="h-100" style="background: radial-gradient(circle, var(--bs-primary) 0%, transparent 70%);">
            </div>
        </div>

        <div class="position-relative z-1 text-center">
            <!-- Encabezado impactante -->
            <h2 class="display-5 fw-bold text-primary mb-3">¡Tu entretenimiento viaja contigo!</h2>
            <p class="lead text-black mb-5">Stream Live funciona en <span class="text-primary fw-bold">TODOS</span> tus
                dispositivos favoritos</p>

            <div class="row g-4 align-items-center">
                <!-- Texto de marketing -->
                <div class="col-lg-6 text-lg-start">
                    <div class="pe-lg-4">
                        <h3 class="h4 fw-bold mb-3">Diversión sin límites en cualquier pantalla</h3>

                        <ul class="list-unstyled mb-4">
                            <li class="mb-3 d-flex">
                                <span class="me-2 text-primary">✓</span>
                                <span><strong>Smart TVs:</strong> Samsung, LG, Android TV, Apple TV</span>
                            </li>
                            <li class="mb-3 d-flex">
                                <span class="me-2 text-primary">✓</span>
                                <span><strong>Móviles/Tablets:</strong> iOS y Android con app nativa</span>
                            </li>
                            <li class="mb-3 d-flex">
                                <span class="me-2 text-primary">✓</span>
                                <span><strong>Streaming Devices:</strong> Fire Stick, Chromecast, Roku</span>
                            </li>
                            <li class="mb-3 d-flex">
                                <span class="me-2 text-primary">✓</span>
                                <span><strong>Computadoras:</strong> Windows y Mac sin instalación</span>
                            </li>
                        </ul>

                        <div class="bg-primary text-white p-3 rounded-3 shadow-sm mb-4">
                            <p class="mb-0 fw-bold">"La mejor app de IPTV que he usado... ¡funciona hasta en mi vieja
                                tablet!"</p>
                            <small>- Carlos M., cliente desde 2021</small>
                        </div>

                        <a href="#planes" class="btn btn-warning btn-lg px-4 fw-bold mt-2">
                            <i class="bi bi-tv me-2"></i> Quiero probarlo ahora
                        </a>
                    </div>
                </div>

                <!-- Imagen de dispositivos -->
                <div class="col-lg-6">
                    <div class="position-relative">
                        <img src="./images/disp.png" class="img-fluid rounded-3 shadow-lg"
                            alt="Dispositivos compatibles">
                        <!-- Badge flotante -->
                        <div class="position-absolute bottom-0 start-0 translate-middle-y bg-warning text-dark px-3 py-2 rounded-pill fw-bold shadow"
                            style="transform: translateX(20px);">
                            +5 dispositivos simultáneos
                        </div>
                    </div>
                </div>
            </div>

            <!-- Logos de marcas compatibles (opcional) -->
            <div class="mt-5 pt-4">
                <p class="text-black mb-3">Compatibilidad certificada con:</p>
                <div class="d-flex flex-wrap justify-content-center gap-4">
                    <img src="./images/samsung-logo.png" alt="Samsung" style="height: 30px; width: auto; opacity: 0.7;">
                    <img src="./images/lg-logo.png" alt="LG" style="height: 30px; width: auto; opacity: 0.7;">
                    <img src="./images/androidtv-logo.png" alt="Android TV"
                        style="height: 30px; width: auto; opacity: 0.7;">
                    <img src="./images/appletv-logo.png" alt="Apple TV"
                        style="height: 30px; width: auto; opacity: 0.7;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Planes -->
<!-- SECCIÓN PLANES MEJORADA CON MÉTODOS DE PAGO -->
<section id="planes" class="py-5 position-relative"
    style="background: linear-gradient(to bottom, #f8f9fa 0%, #ffffff 100%);">
    <!-- Efecto de onda decorativa -->
    <div class="position-absolute top-0 start-0 w-100 overflow-hidden">
        <svg viewBox="0 0 1440 60" style="display: block; width: 100%;">
            <path fill="#0057A0" d="M0,0V60H1440V0C1200,30,800,30,400,15S240,15,0,0Z"></path>
        </svg>
    </div>
    <br>
    <br>

    <div class="container position-relative z-1">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold text-primary mb-3">Planes y Precios</h2>
            <div class="d-flex justify-content-center align-items-center">
                <p class="text-muted mb-0 me-3">PRECIOS EN DÓLARES</p>
                <span class="badge bg-warning text-dark">PROMOCIÓN: 10% OFF en pagos anuales</span>
            </div>

            <!-- Contador regresivo agregado -->
            <div class="text-center mt-3">
                <div class="badge bg-danger py-2 px-3">
                    <i class="bi bi-clock-fill me-1"></i> Oferta termina en:
                    <span id="countdown" class="fw-bold">23:59:59</span>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <!-- Planes por duración -->
            <?php
        $duraciones = [
          "1️⃣ Mes" => [4.99, 5.99, 6.99],
          "3️⃣ Meses" => [12.99, 14.99, 16.99],
          "6️⃣ Meses" => [23.99, 25.99, 27.99],
          "1️⃣2️⃣ Meses" => [44.99, 47.99, 50.99],
        ];

        foreach ($duraciones as $duracion => $precios) {
          echo '<div class="col-md-3">';
          echo '<div class="card border-0 shadow-sm h-100 transition-all" style="border-radius: 15px; transition: transform 0.3s;" onmouseover="this.style.transform=\'translateY(-5px)\'" onmouseout="this.style.transform=\'translateY(0)\'">';
          echo '<div class="card-body d-flex flex-column">';
          echo "<h5 class='card-title text-primary fw-bold mb-3'>$duracion</h5>";
          echo "<ul class='list-unstyled flex-grow-1 mb-4'>";
          echo "<li class='mb-2'><i class='bi bi-check-circle-fill text-success me-2'></i>1 dispositivo: <strong class='text-dark'>\${$precios[0]}</strong></li>";
          echo "<li class='mb-2'><i class='bi bi-check-circle-fill text-success me-2'></i>2 dispositivos: <strong class='text-dark'>\${$precios[1]}</strong></li>";
          echo "<li class='mb-2'><i class='bi bi-check-circle-fill text-success me-2'></i>3 dispositivos: <strong class='text-dark'>\${$precios[2]}</strong></li>";
          echo "</ul>";
          echo "<a href='https://wa.me/593999339604' target='_blank' class='btn btn-primary mt-auto fw-bold' style='border-radius: 50px;'>Comprar Ahora</a>";
          echo '</div></div></div>';
        }
      ?>
        </div>

        <!-- Sección de Métodos de Pago Mejorada -->
        <div class="mt-5 pt-4">
            <div class="bg-white p-4 rounded-3 shadow-sm">
                <h5 class="text-center mb-4 fw-bold">Métodos de Pago Seguros</h5>
                <div class="d-flex flex-wrap justify-content-center align-items-center gap-4">
                    <img src="./images/mercado.svg" alt="MercadoPago"
                        style="height: 30px; filter: drop-shadow(0 2px 3px rgba(0,0,0,0.1));">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/Visa_Inc._logo.svg/2560px-Visa_Inc._logo.svg.png"
                        alt="Visa" style="height: 20px;">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Mastercard-logo.svg/1280px-Mastercard-logo.svg.png"
                        alt="Mastercard" style="height: 30px;">
                    <img src="./images/paypal.png" alt="PayPal" style="height: 25px;">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Bitcoin.svg/1200px-Bitcoin.svg.png"
                        alt="Bitcoin" style="height: 25px;">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-shield-lock-fill text-primary me-2"></i>
                    </div>
                </div>

                <!-- Sellos de seguridad agregados -->
                <div class="text-center mt-4">
                    <img src="./images/SSL.svg" alt="SSL Secure" style="height: 45px; margin-right: 15px;">
                    <img src="./images/PCI.svg" alt="PCI DSS" style="height: 45px;">
                </div>

                <div class="text-center mt-3">
                    <a href="#" class="text-decoration-none small" data-bs-toggle="modal" data-bs-target="#modalPagos">
                        <i class="bi bi-info-circle-fill text-primary me-1"></i> Ver todos los métodos de pago
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal Métodos de Pago -->
<div class="modal fade" id="modalPagos" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Métodos de Pago Aceptados</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Tarjetas de crédito/débito
                        <span class="badge bg-primary rounded-pill">Visa, Mastercard, Amex</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        MercadoPago
                        <span class="badge bg-success rounded-pill">Recomendado</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        PayPal
                        <span class="badge bg-info rounded-pill">Internacional</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Criptomonedas
                        <span class="badge bg-dark rounded-pill">Bitcoin, USDT</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Transferencias bancarias
                        <span class="badge bg-secondary rounded-pill">24-48h</span>
                    </li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Script para el contador regresivo -->
<script>
// Configuración del contador (24 horas)
let time = 24 * 60 * 60; // 24 horas en segundos

const countdown = setInterval(() => {
    const hours = Math.floor(time / 3600);
    const minutes = Math.floor((time % 3600) / 60);
    const seconds = time % 60;

    document.getElementById('countdown').innerHTML =
        `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;

    if (time <= 0) {
        clearInterval(countdown);
        document.querySelector('.badge.bg-danger').innerHTML =
            '<i class="bi bi-exclamation-triangle-fill me-1"></i> Oferta finalizada';
    } else {
        time--;
    }
}, 1000);
</script>

<!-- SECCIÓN DEPORTES -->
<section id="deportes" class="py-5 bg-dark text-white position-relative">
    <div class="position-absolute top-0 end-0 w-50 h-100 opacity-25">
        <img src="https://images.unsplash.com/photo-1574629810360-7efbbe195018?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
            class="w-100 h-100 object-fit-cover" alt="Fondo deportivo">
    </div>

    <div class="container position-relative z-1">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="display-5 fw-bold mb-4">
                    <span class="text-warning">PARA LOS FANÁTICOS DEL DEPORTE</span><br>
                    Fútbol, Basket y más de todo el mundo!
                </h2>

                <ul class="list-unstyled mb-4">
                    <li class="mb-3 d-flex">
                        <span class="badge bg-warning text-dark me-3">+300</span>
                        <span class="flex-grow-1"><strong>Canales deportivos HD</strong> - ESPN, Fox Sports, beIN
                            Sports</span>
                    </li>
                    <li class="mb-3 d-flex">
                        <span class="badge bg-warning text-dark me-3">100%</span>
                        <span class="flex-grow-1"><strong>Eventos en vivo</strong> - NFL, NBA, F1, UFC, Box</span>
                    </li>
                    <li class="mb-3 d-flex">
                        <span class="badge bg-warning text-dark me-3">4K</span>
                        <span class="flex-grow-1"><strong>Partidos clave</strong> en máxima definición</span>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0">
                <div class="border border-warning border-4 rounded-3 overflow-hidden">
                    <img src="./images/canalesdep.png" class="img-fluid" alt="Canales deportivos"
                        style="max-height: 350px; width: 100%; object-fit: cover;">
                </div>
            </div>



        </div>
    </div>
</section>

<!-- SECCIÓN FAMILIA -->
<section id="familia" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold text-primary">CONTENIDO PARA TODA LA FAMILIA</h2>
            <p class="lead">Películas, series infantiles y los mejores clásicos</p>
        </div>
        <!-- Carrusel automático funcional -->
        <div id="carruselPeliculas" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1500"
            data-bs-pause="hover">
            <div class="carousel-inner">

                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="row g-4 justify-content-center">
                        <div class="col-6 col-md-3">
                            <div class="card border-0 shadow-sm h-100"><img src="./images/movies/pelicula1.png"
                                    class="card-img-top"></div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card border-0 shadow-sm h-100"><img src="./images/movies/pelicula2.png"
                                    class="card-img-top"></div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card border-0 shadow-sm h-100"><img src="./images/movies/pelicula3.png"
                                    class="card-img-top"></div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card border-0 shadow-sm h-100"><img src="./images/movies/pelicula4.png"
                                    class="card-img-top"></div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="row g-4 justify-content-center">
                        <div class="col-6 col-md-3">
                            <div class="card border-0 shadow-sm h-100"><img src="./images/movies/pelicula5.png"
                                    class="card-img-top"></div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card border-0 shadow-sm h-100"><img src="./images/movies/pelicula6.png"
                                    class="card-img-top"></div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card border-0 shadow-sm h-100"><img src="./images/movies/pelicula7.png"
                                    class="card-img-top"></div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card border-0 shadow-sm h-100"><img src="./images/movies/pelicula8.png"
                                    class="card-img-top"></div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">
                    <div class="row g-4 justify-content-center">
                        <div class="col-6 col-md-3">
                            <div class="card border-0 shadow-sm h-100"><img src="./images/movies/pelicula9.png"
                                    class="card-img-top"></div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card border-0 shadow-sm h-100"><img src="./images/movies/pelicula10.png"
                                    class="card-img-top"></div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card border-0 shadow-sm h-100"><img src="./images/movies/pelicula11.jpg"
                                    class="card-img-top"></div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Controles opcionales -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carruselPeliculas"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carruselPeliculas"
                data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle"></span>
            </button>
        </div>



    </div>
</section>

<!-- SECCIÓN MARCAS -->
<section class="py-4 bg-white">
    <!-- Carrusel de canales automático -->
    <div id="carruselCanales" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000"
        data-bs-pause="hover">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row g-4 justify-content-center">
                    <!-- Canales 1 al 4 -->
                    <div class="col-6 col-md-3">
                        <img src="./images/chanels/chan1.png" class="img-fluid" alt="Canal 1">
                    </div>
                    <div class="col-6 col-md-3">
                        <img src="./images/chanels/chan2.png" class="img-fluid" alt="Canal 2">
                    </div>
                    <div class="col-6 col-md-3">
                        <img src="./images/chanels/chan3.png" class="img-fluid" alt="Canal 3">
                    </div>
                    <div class="col-6 col-md-3">
                        <img src="./images/chanels/chan4.png" class="img-fluid" alt="Canal 4">
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="row g-4 justify-content-center">
                    <!-- Canales 5 al 8 -->
                    <div class="col-6 col-md-3">
                        <img src="./images/chanels/chan5.png" class="img-fluid" alt="Canal 5">
                    </div>
                    <div class="col-6 col-md-3">
                        <img src="./images/chanels/chan6.png" class="img-fluid" alt="Canal 6">
                    </div>
                    <div class="col-6 col-md-3">
                        <img src="./images/chanels/chan7.png" class="img-fluid" alt="Canal 7">
                    </div>
                    <div class="col-6 col-md-3">
                        <img src="./images/chanels/chan8.png" class="img-fluid" alt="Canal 8">
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="row g-4 justify-content-center">
                    <!-- Canales 9 al 12 -->
                    <div class="col-6 col-md-3">
                        <img src="./images/chanels/chan9.png" class="img-fluid" alt="Canal 9">
                    </div>
                    <div class="col-6 col-md-3">
                        <img src="./images/chanels/chan10.png" class="img-fluid" alt="Canal 10">
                    </div>
                    <div class="col-6 col-md-3">
                        <img src="./images/chanels/chan11.png" class="img-fluid" alt="Canal 11">
                    </div>
                    <div class="col-6 col-md-3">
                        <img src="./images/chanels/chan12.png" class="img-fluid" alt="Canal 12">
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="row g-4 justify-content-center">
                    <!-- Canales 13 al 16 -->
                    <div class="col-6 col-md-3">
                        <img src="./images/chanels/chan13.png" class="img-fluid" alt="Canal 13">
                    </div>
                    <div class="col-6 col-md-3">
                        <img src="./images/chanels/chan14.png" class="img-fluid" alt="Canal 14">
                    </div>
                    <div class="col-6 col-md-3">
                        <img src="./images/chanels/chan15.png" class="img-fluid" alt="Canal 15">
                    </div>
                    <div class="col-6 col-md-3">
                        <img src="./images/chanels/chan16.png" class="img-fluid" alt="Canal 16">
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="row g-4 justify-content-center">
                    <!-- Canales 17 al 19 -->
                    <div class="col-6 col-md-3">
                        <img src="./images/chanels/chan17.png" class="img-fluid" alt="Canal 17">
                    </div>
                    <div class="col-6 col-md-3">
                        <img src="./images/chanels/chan18.png" class="img-fluid" alt="Canal 18">
                    </div>
                    <div class="col-6 col-md-3">
                        <img src="./images/chanels/chan19.png" class="img-fluid" alt="Canal 19">
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- SECCIÓN CONTENIDO ADULTO (OPCIONAL) -->
<section id="adultos" class="py-5 bg-dark text-white position-relative" style="background-color: #1a1a1a!important;">
    <div class="container position-relative z-1">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="p-2 border border-secondary rounded-3 text-center bg-black bg-opacity-50">
                    <!-- Carrusel de contenido adulto -->
                    <div id="carruselAdulto" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000"
                        data-bs-pause="hover">
                        <div class="carousel-inner rounded-2">
                            <div class="carousel-item active">
                                <img src="./images/adult/1.png" class="img-fluid" style="max-height: 300px;"
                                    alt="Adult 1">
                            </div>
                            <div class="carousel-item">
                                <img src="./images/adult/2.svg" class="img-fluid" style="max-height: 300px;"
                                    alt="Adult 2">
                            </div>
                            <div class="carousel-item">
                                <img src="./images/adult/3.svg" class="img-fluid" style="max-height: 300px;"
                                    alt="Adult 3">
                            </div>
                            <div class="carousel-item">
                                <img src="./images/adult/4.png" class="img-fluid" style="max-height: 300px;"
                                    alt="Adult 4">
                            </div>
                            <div class="carousel-item">
                                <img src="./images/adult/5.png" class="img-fluid" style="max-height: 300px;"
                                    alt="Adult 5">
                            </div>
                            <div class="carousel-item">
                                <img src="./images/adult/6.png" class="img-fluid" style="max-height: 300px;"
                                    alt="Adult 6">
                            </div>
                            <div class="carousel-item">
                                <img src="./images/adult/7.png" class="img-fluid" style="max-height: 300px;"
                                    alt="Adult 7">
                            </div>
                            <div class="carousel-item">
                                <img src="./images/adult/8.png" class="img-fluid" style="max-height: 300px;"
                                    alt="Adult 8">
                            </div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <div class="d-flex justify-content-center gap-3">
                            <span class="badge bg-danger bg-opacity-75">+18</span>
                            <span class="badge bg-dark text-white">CONTROL PARENTAL</span>
                            <span class="badge bg-dark text-white">OPCIONAL</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 order-lg-1 mt-5 mt-lg-0">
                <div class="pe-lg-4">
                    <h2 class="display-6 fw-bold mb-4">
                        <span class="text-danger">Contenido Adulto Premium</span>
                        <small class="d-block text-white mt-2">(Acceso opcional con verificación de edad)</small>
                    </h2>

                    <div class="bg-black bg-opacity-25 p-3 rounded-3 mb-4">
                        <p class="mb-0">
                            <i class="bi bi-exclamation-triangle-fill text-warning me-2"></i>
                            <strong>Este contenido requiere autenticación adicional</strong> y puede ser desactivado
                            permanentemente desde tu panel de control.
                        </p>
                    </div>

                    <ul class="list-unstyled mb-4">
                        <li class="mb-3 d-flex">
                            <span class="badge bg-danger me-3">+500</span>
                            <span class="flex-grow-1"><strong>Canales especializados</strong> en calidad Full HD</span>
                        </li>
                        <li class="mb-3 d-flex">
                            <span class="badge bg-danger me-3">24/7</span>
                            <span class="flex-grow-1"><strong>Transmisiones continuas</strong> sin interrupciones</span>
                        </li>
                        <li class="mb-3 d-flex">
                            <span class="badge bg-danger me-3">100%</span>
                            <span class="flex-grow-1"><strong>Privacidad garantizada</strong> con encriptación</span>
                        </li>
                    </ul>

                    <div class="alert alert-dark mt-4">
                        <p class="small mb-0">
                            <i class="bi bi-shield-lock-fill text-primary me-2"></i>
                            Para activar este contenido se requiere: 1) Verificación de edad en panel, 2) Contraseña
                            maestra, 3) Desactivación de control parental.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section id="faq" class="py-5 bg-primary text-white">
    <div class="container">
        <h2 class="display-5 fw-bold text-center mb-5">PREGUNTAS FRECUENTES</h2>

        <div class="accordion" id="acordionFAQ">

            <!-- ¿Qué es STREAM LIVE? -->
            <div class="accordion-item border-0 mb-3">
                <h3 class="accordion-header">
                    <button class="accordion-button bg-dark text-white" type="button" data-bs-toggle="collapse"
                        data-bs-target="#pregunta1">
                        ¿Qué es STREAM LIVE?
                    </button>
                </h3>
                <div id="pregunta1" class="accordion-collapse collapse show" data-bs-parent="#acordionFAQ">
                    <div class="accordion-body" style="background-color: #F7710E; color: black;">
                        STREAM LIVE es un servicio moderno de <strong>IPTV</strong> que te permite acceder a cientos de
                        canales de TV en vivo, películas, series y contenido exclusivo desde cualquier dispositivo con
                        conexión a Internet. Disfruta de entretenimiento sin límites, sin contratos forzosos y con la
                        mejor calidad.
                    </div>
                </div>
            </div>

            <!-- ¿QUÉ PASA SI MI SERVICIO FALLA? -->
            <div class="accordion-item border-0 mb-3">
                <h3 class="accordion-header">
                    <button class="accordion-button bg-dark text-white collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#pregunta2">
                        ¿Qué pasa si mi servicio falla?
                    </button>
                </h3>
                <div id="pregunta2" class="accordion-collapse collapse" data-bs-parent="#acordionFAQ">
                    <div class="accordion-body" style="background-color: #F7710E; color: black;">
                        Si tienes algún inconveniente, no te preocupes. Estamos para ayudarte. Comunícate de inmediato
                        con nuestro equipo de soporte a través de WhatsApp y resolveremos tu problema lo antes posible.
                        <br><br>
                        <a href="https://wa.me/593999339604" target="_blank" class="btn btn-success">
                            <i class="bi bi-whatsapp"></i> Contactar por WhatsApp
                        </a>
                    </div>
                </div>
            </div>

            <!-- ¿PUEDO SOLICITAR QUE AGREGUEN CONTENIDO? -->
            <div class="accordion-item border-0 mb-3">
                <h3 class="accordion-header">
                    <button class="accordion-button bg-dark text-white collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#pregunta3">
                        ¿Puedo solicitar que agreguen contenido?
                    </button>
                </h3>
                <div id="pregunta3" class="accordion-collapse collapse" data-bs-parent="#acordionFAQ">
                    <div class="accordion-body" style="background-color: #F7710E; color: black;">
                        ¡Claro que sí! Tu opinión es muy importante para nosotros. Si deseas que agreguemos canales,
                        películas o series, puedes enviar tu sugerencia por WhatsApp. Estamos siempre mejorando nuestro
                        catálogo para ti.
                        <br><br>
                        <a href="https://wa.me/593999339604" target="_blank" class="btn btn-success">
                            <i class="bi bi-whatsapp"></i> Enviar sugerencia por WhatsApp
                        </a>
                    </div>
                </div>
            </div>

            <!-- ¿PUEDO USAR MI SUBSCRIPCIÓN EN VARIOS DISPOSITIVOS? -->
            <div class="accordion-item border-0 mb-3">
                <h3 class="accordion-header">
                    <button class="accordion-button bg-dark text-white collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#pregunta4">
                        ¿Puedo usar mi suscripción en varios dispositivos?
                    </button>
                </h3>
                <div id="pregunta4" class="accordion-collapse collapse" data-bs-parent="#acordionFAQ">
                    <div class="accordion-body" style="background-color: #F7710E; color: black;">
                        Sí. Con el <strong>paquete de 3 dispositivos</strong> puedes conectar hasta 5 dispositivos en
                        total. Si necesitas más accesos, contáctanos para opciones personalizadas.
                    </div>
                </div>
            </div>

            <!-- ¿Es mensual o de un solo pago? -->
            <div class="accordion-item border-0 mb-3">
                <h3 class="accordion-header">
                    <button class="accordion-button bg-dark text-white collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#pregunta5">
                        ¿Este servicio es mensual o de un solo pago?
                    </button>
                </h3>
                <div id="pregunta5" class="accordion-collapse collapse" data-bs-parent="#acordionFAQ">
                    <div class="accordion-body" style="background-color: #F7710E; color: black;">
                        El servicio es <strong>mensual</strong>, pero puedes ahorrar al contratar planes de mayor
                        duración. Recomendamos adquirir mínimo 3 meses para obtener descuentos. <br> No existen
                        contratos forzosos: puedes cancelar en cualquier momento.
                    </div>
                </div>
            </div>

            <!-- ¿Necesito una conexión a Internet? -->
            <div class="accordion-item border-0 mb-3">
                <h3 class="accordion-header">
                    <button class="accordion-button bg-dark text-white collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#pregunta6">
                        ¿Necesito una conexión a Internet?
                    </button>
                </h3>
                <div id="pregunta6" class="accordion-collapse collapse" data-bs-parent="#acordionFAQ">
                    <div class="accordion-body" style="background-color: #F7710E; color: black;">
                        Sí, se requiere una conexión estable. Velocidades mínimas recomendadas:
                        <ul class="mt-2">
                            <li>📶 2 Mbps para baja resolución</li>
                            <li>📶 5 Mbps para TV en vivo, películas y series</li>
                            <li>📶 30 Mbps para contenido en 4K</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Mi TV no es Smart -->
            <div class="accordion-item border-0 mb-3">
                <h3 class="accordion-header">
                    <button class="accordion-button bg-dark text-white collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#pregunta7">
                        Mi TV no es Smart, ¿qué puedo hacer?
                    </button>
                </h3>
                <div id="pregunta7" class="accordion-collapse collapse" data-bs-parent="#acordionFAQ">
                    <div class="accordion-body" style="background-color: #F7710E; color: black;">
                        Si tu TV no es Smart, puedes usar dispositivos como:
                        <ul class="mt-2">
                            <li>✅ <strong>Amazon Fire Stick</strong></li>
                            <li>✅ <strong>Android TV Box</strong> o cualquier dispositivo con Android certificado</li>
                        </ul>
                        <strong>No recomendamos Roku</strong> debido a sus limitaciones con aplicaciones IPTV.
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SECCIÓN EXTRA: TESTIMONIOS -->
<!-- <section class="py-5 bg-warning">
    <div class="container">
        <h2 class="display-5 fw-bold text-center mb-5">LO QUE DICEN NUESTROS CLIENTES</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" class="rounded-circle mb-3" width="80"
                            alt="Cliente">
                        <p class="fst-italic">"El mejor servicio IPTV para ver fútbol europeo en México"</p>
                        <div class="text-warning">
                            ★★★★★
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- Footer -->
<?php include 'footer.php'; ?>