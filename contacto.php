<?php include("header.php"); ?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold" style="color: #2366B7;">📬 Contáctanos</h2>
            <p class="lead">¿Tienes preguntas o deseas un plan personalizado? ¡Escríbenos!</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="enviar.php" method="POST" class="card shadow p-4 border-0">
                    <div class="mb-3">
                        <label for="nombre" class="form-label fw-bold">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label fw-bold">Correo electrónico</label>
                        <input type="email" class="form-control" id="correo" name="correo" required>
                    </div>
                    <div class="mb-3">
                        <label for="mensaje" class="form-label fw-bold">Mensaje</label>
                        <textarea class="form-control" id="mensaje" name="mensaje" rows="5" required></textarea>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn text-white" style="background-color: #F56F0E;">Enviar mensaje</button>
                    </div>
                </form>

                <div class="mt-4 text-center">
                    <p class="fw-bold mb-1">📱 WhatsApp:</p>
                    <p><a href="https://wa.me/593999339604" target="_blank" class="text-decoration-none" style="color: #2366B7;">+593 99 933 9604</a></p>
                    <p class="fw-bold mb-1">📧 Correo:</p>
                    <p><a href="mailto:digital.live.ec@gmail.com" class="text-decoration-none" style="color: #2366B7;">digital.live.ec@gmail.com</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include("footer.php"); ?>
