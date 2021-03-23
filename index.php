<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./js/validacion1.js"></script>
</head>
<body>
    <div>
        <form action="./html/minas.php" method="post" onsubmit="return validacion()">
            <h1>buscaminas</h1>
            <p>indique tamaño de tablero N * N el intervalo es [8,20]</p>
            <input type="number" id="numero" placeholder="indique N" name="numero" required>
            <input type="text" id="nombre" placeholder="nombre" name="nombre" required>
            <input type="submit" name="llamar" value="vamos jugar">
        </form>
        <div>
            
            <h3>usuarios</h3>
            <?php 
                echo "ojo en la url del txt <br/>";
                $file = fopen("C:\\xampp\\htdocs\\parcial 2\\html\\usuarios.txt", "r");

                while(!feof($file)) {
                
                echo fgets($file). "<br />";
                
                }
                
                fclose($file);
                /* $fechaUno=new DateTime('11:30');
                $fechaDos=new DateTime('16:15');

        $dateInterval = $fechaUno->diff($fechaDos);
        echo $dateInterval->format('Total: %H horas %i minutos %s segundos').PHP_EOL;
        echo date("g:i"); */
        ?></div>
</div>
</body>
</html>

