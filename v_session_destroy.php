<?php 

session_start();
session_destroy();
header("HTTP/1.1 301 Moved Permanently");
echo "<script>location.href='./index.php';</script>";

?>
