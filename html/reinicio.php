<?php

session_start();
$mapatapado = $_SESSION['mapaTapado'];
$tamano= $_SESSION['N'];

for($ciclo1=0;$ciclo1<$tamano;$ciclo1++){
    for($ciclo2=0;$ciclo2<$tamano;$ciclo2++){
        $mapatapado[$ciclo1][$ciclo2]=0;
    }
}
$_SESSION['minascambia']=$_SESSION['minas'];
$_SESSION['mapaTapado']=$mapatapado;
header("location:llamar.php");

?>