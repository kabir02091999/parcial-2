<?php
session_start();
$matris=$_SESSION["array"];
$tamano= $_SESSION["N"];
$mapatapado=$_SESSION["mapaTapado"];
$cambio= $_SESSION['minascambia'];



/* for($ciclo1=0;$ciclo1<$tamano;$ciclo1++){

    for($ciclo2=0;$ciclo2<$tamano;$ciclo2++){

        echo $mapatapado[$ciclo1][$ciclo2];
        echo " ";

    }echo "<br/>";

} */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../js/revicio1_1.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
</head>
<body>
    <form action="./comprovar.php" method="POST" > <!-- ojo por aqui -->
        <?php
        $matris=$_SESSION["array"];
        $tamano= $_SESSION["N"];
        $mapatapado=$_SESSION["mapaTapado"];
        for($ciclo1=0;$ciclo1<$tamano;$ciclo1++){
            for($ciclo2=0;$ciclo2<$tamano;$ciclo2++){
                
                ?> <div class="casilla"><h3><?php if($mapatapado[$ciclo2][$ciclo1]==0){echo "[O]";} else if($mapatapado[$ciclo2][$ciclo1]==-1){echo "0";}else{echo $mapatapado[$ciclo2][$ciclo1];} ?></h3></div>
            <?php } ?><br/>
        <?php }?>
        <h2> minas activas: <?php echo round($cambio); ?></h2>
        <!-- <p id="tamano"><?php echo $_SESSION['N']; ?></p> -->
        <input type="number" id="eje_x" name="eje_x" placeholder="eje x" required>
        <input type="number" id="eje_y" name="eje_y" placeholder="eje y" required>
        <select  name="se" id="">
		<option>bandera</option>
		<option selected="selected">habrir</option>
	    </select>
        <input type="submit" value="ejecutar">
    </form>
    <form action="./reinicio.php">

        <input type="submit" value="reiniciar">

    </form>

</body>
</html>

<?php  
echo "si quiere ver el mapa con las minas elimine el comentario";

$matris=$_SESSION["array"];
$tamano= $_SESSION["N"];
for($ciclo1=0;$ciclo1<$tamano;$ciclo1++){

    for($ciclo2=0;$ciclo2<$tamano;$ciclo2++){

        echo $matris[$ciclo2][$ciclo1];
        echo " ";

    }echo "<br/>";

} ?>