
<?php
    //Hostinger

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

    $server = 'localhost';
    $userdb='u208889174_Kira';
    $pwddb='SABF880929hdfnrr03!';
    $db = 'u208889174_db';
    $conn = new mysqli($server,$userdb,$pwddb,$db);
    
    if(mysqli_connect_error())
    {
        echo "Error 503 -Cx000503";
    }
?>