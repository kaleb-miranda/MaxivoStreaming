<?php 

session_start(); 
date_default_timezone_set('GMt-6');
mysqli_set_charset($conn,'utf8');

$id = $_GET["id"];

$queryString = "UPDATE tv_solicitudes SET Status = 2 WHERE Id = '$id'";

include './conexion.php';

$query= $conn->query($queryString);


if($query == 1)
{
        echo'<script type="text/javascript">
        alert("Solicitud Aprobada");
        </script>';
}
if($query == 0)
{
        echo'<script type="text/javascript">
        alert("Ha ocurrido un error");
        </script>';
}

echo $id;
echo "<br>";
echo $usuario;

header("HTTP/1.1 301 Moved Permanently");
echo "<script>location.href='./solicitudes.php';</script>";

?>
