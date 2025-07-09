<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $correo = filter_var($_POST["correo"], FILTER_SANITIZE_EMAIL);
    $mensaje = htmlspecialchars($_POST["mensaje"]);

    $destino = "digital.live.ec@gmail.com";
    $asunto = "📩 Nuevo mensaje de contacto - Digital Live";

    $contenido = "
        <strong>Nombre:</strong> $nombre<br>
        <strong>Correo:</strong> $correo<br><br>
        <strong>Mensaje:</strong><br>
        $mensaje
    ";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: <$correo>" . "\r\n";

    if (mail($destino, $asunto, $contenido, $headers)) {
        echo "<script>alert('Mensaje enviado con éxito ✅'); window.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('❌ Error al enviar el mensaje. Intenta de nuevo.'); window.history.back();</script>";
    }
} else {
    header("Location: index.php");
    exit();
}
?>
