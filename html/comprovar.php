<?php

    session_start();
    $_SESSION['per']=1;
    $matris=$_SESSION["array"];
    $tamano= $_SESSION["N"];
    $eje_x=$_POST['eje_x'];
    $eje_y=$_POST['eje_y'];
    $metodo=$_POST['se'];
    $minas=$_SESSION['minas'];
    revicion();
    if($metodo=="habrir"){
        if($matris[$eje_x][$eje_y]==1){
            $_SESSION['per']=0;
            header("location:perdidofin.php");

        }else{
            
            $bandera1 = busca_minas($tamano,$matris,$eje_x,$eje_y);
            $mapatapado=$_SESSION['mapaTapado'];
            if($bandera1==0){
                $mapatapado[$eje_x][$eje_y]=(-1);
            }else{
                $mapatapado[$eje_x][$eje_y]=$bandera1;
            }
            $_SESSION['mapaTapado']=$mapatapado;
            gano($minas,$tamano ,$mapatapado);
            revicion();
            header("location:llamar.php");
        }}else{
            for($ciclo1=0;$ciclo1<$_POST['numero'];$ciclo1++){

                for($ciclo2=0;$ciclo2<$_POST['numero'];$ciclo2++){
        
                    $mapa[$ciclo1][$ciclo2]=0;
                    $mapatapado[$ciclo1][$ciclo2]=-2;
        
                }
        
            }
            $_SESSION['minascambia']--;
            $mapatapado=$_SESSION['mapaTapado'];
            $mapatapado[$eje_x][$eje_y]=-2;
            $_SESSION['mapaTapado']=$mapatapado;
            revicion();
            header("location:llamar.php");

    }
    
    

    /* for($ciclo1=0;$ciclo1<=$tamano;$ciclo1++){

        for($ciclo2=0;$ciclo2<=$tamano;$ciclo2++){
    
            echo $matris[$ciclo1][$ciclo2];
            echo " ";
    
        }echo "<br/>";
    
    } */

    function busca_minas($tamano,$matris,$eje_x,$eje_y){

        $bandera=0;
        if($eje_x-1>=0 && $eje_y-1>=0){

            if($matris[$eje_x-1][$eje_y-1]==1){

                $bandera++;

            }

        }if($eje_y-1>=0){

            if($matris[$eje_x][$eje_y-1]==1){

                $bandera++;

            }

        }if($eje_x+1 < $tamano && $eje_y-1>=0){

            if($matris[$eje_x+1][$eje_y-1]==1){

                $bandera++;

            }

        }if($eje_x-1>=0){

            if($matris[$eje_x-1][$eje_y]==1){

                $bandera++;

            }

        }if($eje_x+1<$tamano){

            if($matris[$eje_x+1][$eje_y]==1){

                $bandera++;

            }

        }if($eje_x-1>=0 && $eje_y+1<$tamano){

            if($matris[$eje_x-1][$eje_y+1]==1){

                $bandera++;

            }

        }if($eje_y+1<$tamano){

            if($matris[$eje_x][$eje_y+1]==1){

                $bandera++;

            }

        }if($eje_x+1<$tamano&&$eje_y+1<$tamano){

            if($matris[$eje_x+1][$eje_y+1]==1){

                $bandera++;

            }

        }
        return $bandera;

    }

    function gano($numero,$tamano,$mapa){
        $bandera1=0;
        for($ciclo1=0;$ciclo1<$tamano;$ciclo1++){
            for($ciclo2=0;$ciclo2<$tamano;$ciclo2++){

                if($mapa[$ciclo1][$ciclo2]==0){

                    $bandera1++;

                }

            }

        }
        if($bandera1==$numero){
            $_SESSION['per']=1;
            header("location:ganadofin.php");

        }

    }

    function revicion(){

        $mapa=$_SESSION['mapaTapado'];
        $tamano= $_SESSION["N"];
        $bandera=0;
        for($ciclo1=0;$ciclo1<$tamano;$ciclo1++){

            for($ciclo2=0;$ciclo2<$tamano;$ciclo2++){
    
                if($mapa[$ciclo1][$ciclo2]==-2){

                    $bandera++;

                }
    
            }
    
        }

        $_SESSION['minascambia']=$_SESSION['minas']-$bandera;

    }

?>