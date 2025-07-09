<?php include 'header.php'; ?>

<section class="py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="fw-bold" style="color: #0057A0;">
                <i class="bi bi-android me-2"></i>Guía de Instalación
            </h1>
        </div>

        <!-- Pestañas por dispositivo -->
        <ul class="nav nav-tabs justify-content-center mb-4" id="deviceTabs">
            <li class="nav-item">
                <a class="nav-link active fw-bold" data-bs-toggle="tab" href="#moviles" style="color: #0057A0;">
                    <i class="bi bi-phone me-1"></i>Celulares/Tablets
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bold" data-bs-toggle="tab" href="#androidtv" style="color: #0057A0;">
                    <i class="bi bi-tv me-1"></i>Android TV/TV Box
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bold" data-bs-toggle="tab" href="#smarttv" style="color: #0057A0;">
                    <i class="bi bi-display me-1"></i>TV LG/Samsung
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bold" data-bs-toggle="tab" href="#windowspc" style="color: #0057A0;">
                    <i class="bi bi-display me-1"></i>PC windows/IOS
                </a>
            </li>
        </ul>

        <!-- Contenido de pestañas -->
        <div class="tab-content bg-white p-4 rounded-3 shadow-sm">
            <!-- Celulares/Tablets -->
            <div class="tab-pane fade show active" id="moviles">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h3 style="color: #0057A0;">
                            <i class="bi bi-google-play me-2"></i>Descarga nuestra app oficial
                        </h3>
                        <a href="http://bit.ly/StreamLiveX405" class="btn btn-lg mb-4"
                            style="background-color: #F46810; color: white;">
                            <i class="bi bi-google-play me-1"></i> Descarga Stream Live!
                        </a>

                        <div class="text-center p-4 bg-light rounded-3 border-start border-4 border-warning">
                            <h4 class="fw-bold text-primary mb-3">¡Último paso!</h4>
                            <p class="lead mb-4">Solo tienes que darle en instalar y podrás empezar a disfrutar de
                                <strong class="text-primary">STREAM LIVE</strong>
                            </p>
                            <img src="./images/logo.png" alt="Paso final de instalación"
                                class="img-fluid rounded shadow mb-3"
                                style="max-width: 300px; border: 2px solid #F46810;">
                        </div>

                    </div>
                    <div class="col-md-6 text-center">
                        <img src="images/instala/android.png" alt="Android Mobile" class="img-fluid"
                            style="max-height: 300px;">
                    </div>
                </div>
            </div>

            <!-- Android TV/TV Box -->
            <div class="tab-pane fade" id="androidtv">
                <div class="row">
                    <div class="col-md-6">
                        <h3 style="color: #0057A0;">
                            <i class="bi bi-tv-fill me-2"></i>Para Android TV
                        </h3>
                        <ol class="list-group list-group-numbered">
                            <!-- Paso 1 -->
                            <li class="list-group-item border-0 mb-3">
                                <div class="d-flex align-items-start">
                                    <div class="me-3">
                                        <span class="badge bg-primary">1</span>
                                    </div>
                                    <div>
                                        <strong>Descarga la app Downloader desde la Play Store de la TV:</strong>
                                        <div class="mt-2">
                                            <img src="images/instala/googletv.png" alt="Google Play"
                                                style="height:40px;">
                                        </div>
                                        <div class="mt-2">
                                            <img src="images/instala/dnwtv.png" class="img-thumbnail"
                                                alt="Pantalla Downloader" style="max-height:150px;">
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Paso 2 -->
                            <li class="list-group-item border-0 mb-3">
                                <div class="d-flex align-items-start">
                                    <div class="me-3">
                                        <span class="badge bg-primary">2</span>
                                    </div>
                                    <div>
                                        <strong>Abre la app, selecciona Home, y en el buscador pon el código:</strong>
                                        <div class="bg-dark text-white p-2 rounded d-inline-block mt-2">
                                            <code>9853260</code>
                                        </div>
                                        <div class="mt-2">
                                            <img src="images/instala/dwcode.png" class="img-thumbnail"
                                                alt="Buscador Downloader" style="max-height:150px;">
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Paso 3 -->
                            <li class="list-group-item border-0 mb-3">
                                <div class="d-flex align-items-start">
                                    <div class="me-3">
                                        <span class="badge bg-primary">3</span>
                                    </div>
                                    <div>
                                        <strong>Selecciona GO, después selecciona Install:</strong>
                                        <div class="mt-2">
                                            <img src="./images/logo.png" class="img-thumbnail" alt="Instalación"
                                                style="max-height:150px;">
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Paso Opcional -->
                            <li class="list-group-item border-0 bg-warning bg-opacity-10">
                                <div class="d-flex align-items-start">
                                    <div class="me-3">
                                        <i class="bi bi-exclamation-triangle text-warning"></i>
                                    </div>
                                    <div>
                                        <strong>Advertencia sobre permisos:</strong>
                                        <p class="mb-1">Si aparece una advertencia, selecciona Configuración y activa
                                            "Permitir instalación de aplicaciones" para Downloader.</p>
                                    </div>
                                </div>
                            </li>
                        </ol>

                        <style>
                        .img-thumbnail {
                            border: 2px solid #0057A0;
                            max-width: 100%;
                        }

                        code {
                            font-size: 1.1rem;
                            color: white;
                        }
                        </style>
                    </div>
                </div>
            </div>

            <!-- TV LG/Samsung -->
            <div class="tab-pane fade" id="smarttv">
                <div class="row">
                    <div class="col-md-6">
                        <h3 style="color: #0057A0;">
                            <i class="bi bi-tv me-2"></i>Para Smart TV marcas: Samsung / LG WebOS
                        </h3>
                        <div class="mb-4">
                            <p>Recomendamos usar:</p>
                            <div class="alert alert-light border-start border-4 border-primary shadow-sm">
                                <h5 class="fw-bold text-primary">
                                    <i class="bi bi-download me-2"></i>Descarga las aplicaciónes
                                </h5>
                                <p class="mb-1">Disponible en la tienda oficial de tu Smart TV.</p>
                                <p class="mb-0"><strong>Exclusiva para dispositivos LG y Samsung.</strong></p>
                            </div>

                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0">
                                    <span>Smarters Player PRO</span>
                                    <span class="badge bg-primary rounded-pill">Recomendado</span>
                                </li>
                                <div class="mt-2">
                                    <img src="./images/instala/IPTV.png" class="img-thumbnail" alt="Instalación"
                                        style="max-height:150px;">
                                </div>
                                <div class="mt-2">
                                    <img src="./images/instala/smarter.png" class="img-thumbnail" alt="Instalación"
                                        style="max-height:150px;">
                                </div>
                                <li class="list-group-item border-0">Tivimate</li>
                                <li class="list-group-item border-0">Smart IPTV (SIPTV)</li>
                                <li class="list-group-item border-0">Flix IPTV</li>
                            </ul>
                        </div>

                        <div class="alert alert-info">
                            <h5 class="fw-bold text-primary">
                                <i class="bi bi-info-circle me-2"></i>Guía rápida para Smart TV (LG & Samsung)
                            </h5>
                            <ol class="mb-4">
                                <li>Descarga la app IPTV desde la tienda de aplicaciones de tu TV.</li>
                                <li>
                                    Al obtener tu demo o suscripción (por ejemplo, en <strong>STREAM LIVE</strong>),
                                    recibirás:
                                    <ul class="mt-2">
                                        <li>URL del servidor</li>
                                        <li>Usuario</li>
                                        <li>Contraseña</li>
                                    </ul>
                                </li>
                                <li>
                                    Abre la app IPTV, selecciona <strong>"Login con API Xtream Codes"</strong> e ingresa
                                    los datos.
                                </li>
                                <li>
                                    Guarda y espera a que se cargue la lista de canales.
                                </li>
                                <li>¡Listo! Disfruta de cientos de canales, películas y series en tu Smart TV.</li>
                            </ol>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="text-center">
                            <img src="images/instala/smarter.png" alt="Smart TV" class="img-fluid"
                                style="max-height: 250px;">
                        </div>
                        <div class="mt-3 text-center">
                            <a href="#" class="btn btn-sm me-2" style="background-color: #0057A0; color: white;">
                                <i class="bi bi-download me-1"></i> Guía Samsung
                            </a>
                            <a href="#" class="btn btn-sm" style="background-color: #F46810; color: white;">
                                <i class="bi bi-download me-1"></i> Guía LG
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="windowspc">
                <div class="row">
                    <div class="col-md-6">
                        <h3 style="color: #0057A0;">
                            <i class="bi bi-laptop me-2"></i>Para PC con Windows
                        </h3>
                        <div class="mb-4">
                            <p>Recomendamos usar:</p>
                            <div class="alert alert-light border-start border-4 border-primary shadow-sm">
                                <h5 class="fw-bold text-primary">
                                    <i class="bi bi-download me-2"></i>IPTV Smarters Pro (versión para Windows)
                                </h5>
                                <p class="mb-1">Compatible con Windows 7, 8, 10 y 11.</p>
                                <p class="mb-0"><strong>Fácil de instalar y usar.</strong></p>
                            </div>

                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0">
                                    <span>IPTV Smarters PRO</span>
                                    <span class="badge bg-success rounded-pill">Windows</span>
                                </li>
                                <div class="mt-3 text-center">
                                    <img src="./images/instala/one.png" class="img-thumbnail"
                                        alt="IPTV Windows" style="max-height:150px;">
                                </div>
                            </ul>
                        </div>

                        <div class="alert alert-info">
                            <h5 class="fw-bold text-primary">
                                <i class="bi bi-info-circle me-2"></i>Guía rápida para PC (Windows)
                            </h5>
                            <ol class="mb-4">
                                <li>Descarga el instalador oficial de IPTV Smarters Pro para Windows.</li>
                                <li>Ejecuta el archivo .exe y sigue los pasos de instalación.</li>
                                <li>Abre la aplicación y selecciona <strong>"Login con API Xtream Codes"</strong>.</li>
                                <li>
                                    Ingresa los datos proporcionados por tu proveedor:
                                    <ul class="mt-2">
                                        <li>URL del servidor</li>
                                        <li>Usuario</li>
                                        <li>Contraseña</li>
                                    </ul>
                                </li>
                                <li>Guarda la configuración y espera que se cargue la lista de canales.</li>
                                <li>¡Disfruta de tu contenido favorito directamente desde tu PC!</li>
                            </ol>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="text-center">
                            <img src="./images/instala/lite.png" alt="IPTV para Windows" class="img-fluid"
                                style="max-height: 250px;">
                        </div>
                        <div class="mt-3 text-center">
                            <a href="https://tinyurl.com/2dw5p2vf" class="btn btn-primary btn-sm">
                                <i class="bi bi-download me-1"></i> Descargar IPTV Smarters Pro (.exe)
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Nota importante -->
        <div class="alert alert-warning mt-4">
            <h5 class="alert-heading"><i class="bi bi-exclamation-triangle-fill me-2"></i>Importante</h5>
            <p class="mb-0">Para cualquier problema, contacta a nuestro soporte técnico:</p>
            <a href="https://wa.me/593999339604" target="_blank" class="btn btn-sm mt-2"
                style="background-color: #F46810; color: white;">
                <i class="bi bi-whatsapp me-1"></i> Soporte por WhatsApp
            </a>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>