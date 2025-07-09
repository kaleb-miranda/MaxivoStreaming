<?php 

session_start(); 
date_default_timezone_set('GMt-6');
mysqli_set_charset($conn,'utf8');

$usuario = $_POST["usuario"];
$nombre = $_POST["nombre"];
$apellidop = $_POST["apellidop"];
$apellidom = $_POST["apellidom"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$suscripcionTermina = $_POST["suscripciontermina"];
$adultos = $_POST["18"];

$meses = intval($suscripcionTermina);
$fechaActual = date('Y-m-d');
$suscripcionTerminaFechaNueva = date('Y-m-d', strtotime("+$meses months"));


$queryString = "
INSERT INTO tv_usuarios 
        (Usuario, 
        Nombre, 
        ApellidoPaterno, 
        ApellidoMaterno, 
        Telefono, 
        Email, 
        IsActive, 
        IsVendedor, 
        IsCliente, 
        SuscripcionTermina, 
        SuscripcionActiva,
        Adultos) 
VALUES (
        '$usuario', 
        '$nombre', 
        '$apellidop', 
        '$apellidom', 
        '$telefono', 
        '$email', 
        1, 
        0,
        1,
        '$suscripcionTerminaFechaNueva', 
        0,
        $adultos)";

include './conexion.php';

$query= $conn->query($queryString);

if($query == 1)
{
        $solicitud = $conn->query("INSERT INTO tv_solicitudes (Usuario, Creditos, Adultos) VALUES ('$usuario','$suscripcionTermina', '$adultos')");

        // Configuración del correo
        $para = "fernandoberistain2@hotmail.com"; // Cambia por la dirección de correo de destino
        $asunto = "Solicitud de Suscripcion";
        $mensaje = "Se requiere una cuenta para: $nombre $apellidop $apellidom Con el usuario: $usuario de $suscripcionTermina Creditos, Datos del contacto: $email, Tel.: $telefono";
        $cabeceras = "From: contacto@colmillo-negro.com" . "\r\n" .
                "Reply-To: contacto@colmillo-negro.com" . "\r\n" .
                "X-Mailer: PHP/" . phpversion();

        // Enviar el correo
        if (mail($para, $asunto, $mensaje, $cabeceras)) {
        echo "Correo enviado correctamente.";
        } else {
        echo "Error al enviar el correo.";
        }

        // Configuración del correo
        $para = "aaronvelascovea@aragon.unam.mx"; // Cambia por la dirección de correo de destino
        $asunto = "Solicitud de Suscripcion";
        $mensaje = "Se requiere una cuenta para: $nombre $apellidop $apellidom Con el usuario: $usuario de $suscripcionTermina Creditos, Datos del contacto: $email, Tel.: $telefono";
        $cabeceras = "From: contacto@colmillo-negro.com" . "\r\n" .
                "Reply-To: contacto@colmillo-negro.com" . "\r\n" .
                "X-Mailer: PHP/" . phpversion();

        // Enviar el correo
        if (mail($para, $asunto, $mensaje, $cabeceras)) {
        echo "Correo enviado correctamente.";
        } else {
        echo "Error al enviar el correo.";
        }

        // Configuración del correo
        $para = "kaleb_uriel@outlook.com"; // Cambia por la dirección de correo de destino
        $asunto = "Solicitud de Suscripcion";
        $mensaje = "Se requiere una cuenta para: $nombre $apellidop $apellidom Con el usuario: $usuario de $suscripcionTermina Creditos, Datos del contacto: $email, Tel.: $telefono";
        $cabeceras = "From: contacto@colmillo-negro.com" . "\r\n" .
                "Reply-To: contacto@colmillo-negro.com" . "\r\n" .
                "X-Mailer: PHP/" . phpversion();

        // Enviar el correo
        if (mail($para, $asunto, $mensaje, $cabeceras)) {
        echo "Correo enviado correctamente.";
        } else {
        echo "Error al enviar el correo.";
        }

        echo'<script type="text/javascript">
        alert("Usuario Registrado");
        </script>';
}
if($query == 0)
{
        echo'<script type="text/javascript">
        alert("Ha ocurrido un error al registrar el usuario");
        </script>';
}

header("HTTP/1.1 301 Moved Permanently");
echo "<script>location.href='./registroClientes.php';</script>";

?>
