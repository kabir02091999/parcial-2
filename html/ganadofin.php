<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../index.php">
    
        <h2>has ganado</h2>
        <input type="submit" value="volver al inicio">
        <?php
        
            session_start();

            $fechaUno=new DateTime($_SESSION['hora']);
            $fechaDos=new DateTime(date("g:i"));

            $dateInterval = $fechaUno->diff($fechaDos);
            $dateInterval->format('%H : %i  %s ').PHP_EOL;
            $candena= "<br>". $_SESSION['nombre']." ".$dateInterval->format('%H:%i %s ').PHP_EOL;
            $file = fopen("C:\\xampp\\htdocs\\parcial 2\\html\\usuarios.txt", "a");
            fwrite($file, $candena . PHP_EOL);
            fclose($file);

        ?>


    </form>
</body>
</html>