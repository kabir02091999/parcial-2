
<?php

session_start();
$numero= (($_POST['numero']*$_POST['numero'])*35)/100;/* aqui se saca el porsetaje */
$numero1=$numero;    
    /* echo $numero; */
    mt_srand (time());
    /* le da valor a la matrisz */
    for($ciclo1=0;$ciclo1<$_POST['numero'];$ciclo1++){

        for($ciclo2=0;$ciclo2<$_POST['numero'];$ciclo2++){

            $mapa[$ciclo1][$ciclo2]=0;
            $mapatapado[$ciclo1][$ciclo2]=0;

        }

    }
    /* agrgar a las minas */
    for($ciclo1=0;$ciclo1<round($numero);$ciclo1++){

        $numero_aleatorioA = mt_rand(0,$_POST['numero']-1);
        $numero_aleatorioB = mt_rand(0,$_POST['numero']-1);
        if($mapa[$numero_aleatorioA][$numero_aleatorioB]==1){

            while(true){

                $numero_aleatorioA = mt_rand(0,$_POST['numero']-1);
                $numero_aleatorioB = mt_rand(0,$_POST['numero']-1);/* ojo con esto */
                if($mapa[$numero_aleatorioA][$numero_aleatorioB]==0){
                    
                    break;
                }

            }

        }
        $mapa[$numero_aleatorioA][$numero_aleatorioB]=1;

    }
    $bandera=0;
    /* imprimir las matriz */
    /* for($ciclo1=0;$ciclo1<=$_POST['numero'];$ciclo1++){

        for($ciclo2=0;$ciclo2<=$_POST['numero'];$ciclo2++){

            echo $mapa[$ciclo1][$ciclo2];
            echo " ";

            if($mapa[$ciclo1][$ciclo2]==1){

                $bandera++;

            }

        }echo "<br/>";

    }*/
    $arra=$mapa;
    $_SESSION['nombre']=$_POST['nombre'];
    $_SESSION['hora']=date("g:i");
    $_SESSION['per']=1;
    $_SESSION["mapaTapado"]=$mapatapado;
    $_SESSION["array"]=$arra;
    $_SESSION["minas"]=$numero;
    $_SESSION['minascambia']=$numero1;
    $_SESSION["N"]=$_POST['numero'];

    /* function accio(){

        echo "hola";

    } */

    header("location:llamar.php");
    
?>
