<?php 

session_start(); 
date_default_timezone_set('GMt-6');
mysqli_set_charset($conn,'utf8');
$user = $_POST["user"];
$pwd = $_POST["pwd"];
include './conexion.php';

$query= $conn->query("SELECT * FROM tv_usuarios WHERE Usuario='$user' and Pwd='$pwd'");

if ($result = mysqli_fetch_array($query))
{
        $_SESSION['Usuario'] = $result['Usuario']; //user del usuario
        $_SESSION['Nombre'] = $result['Nombre'];
        $_SESSION['ApellidoPaterno'] = $result['ApellidoPaterno'];
        $_SESSION['ApellidoMaterno'] = $result['ApellidoMaterno'];
        $_SESSION['Telefono'] = $result['Telefono'];
        $_SESSION['Email'] = $result['Email'];
        $_SESSION['CreatedAt'] = $result['CreatedAt'];
        $_SESSION['UpdateAt'] = $result['UpdateAt'];
        $_SESSION['IsActive'] = $result['IsActive'];
        $_SESSION['IsVendedor'] = $result['IsVendedor'];
        $_SESSION['IsCliente'] = $result['IsCliente'];
        $_SESSION['SuscripcionTermina'] = $result['SuscripcionTermina'];
        $_SESSION['SuscripcionActiva'] = $result['SuscripcionActiva'];
     
        header("HTTP/1.1 301 Moved Permanently");
        echo "<script>location.href='./index.php';</script>";

        exit();
 }
else
{
        $_SESSION['badLogin'] = true;
         header("HTTP/1.1 301 Moved Permanently");
        echo "<script>location.href='./index.php';</script>";
        exit();
}

?>
