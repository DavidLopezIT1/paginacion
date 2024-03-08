<?php
include 'conection.php';
    $variabPag="0";
 /*   switch ($variabPag) {
        case isset($_POST['buts1']):
            $variabPag=0;
            break;
                case isset($_POST['buts2']):
                    $variabPag=4;
                    break;
                        case isset($_POST['buts3']):
                            $variabPag=8;
                            break;
                                case isset($_POST['buts4']):
                                    $variabPag=12;
                                    break; 
            break;
    }*/

    if(isset($_POST['buts1'])){
        $variabPag =0;
    }elseif (isset($_POST['buts2'])){
        $variabPag =4;
    }elseif (isset($_POST['buts3'])){
        $variabPag =8;
    }elseif (isset($_POST['buts4'])){
        $variabPag =12;
    }elseif (isset($_POST['buts5'])){
        $variabPag =16;
    }
  /*  
    $Alternative = $variabPag;

    if(isset($_POST['derecho'])){

    
    switch ($Alternative) {
        case isset($_POST['derecho']):
            $Alternative = 0;
            break;
                case isset($_POST['derecho']) && $Alternative = 0:
                    $Alternative = 4;
                    break;
                    case isset($_POST['derecho']) && $Alternative = 4:
                        $Alternative = 8;
                        break;
                            case isset($_POST['derecho']) && $Alternative = 8:
                                $Alternative = 12;
                                break;
                                
                                default:
                                $Alternative = 0;
            break;
    }
}
  */  
    if(isset($_POST['buts1'])){
            $variabPag = 0;
            $resultpar = isset($_POST['derecho']);  
            $resultpar = $variabPag + 4;

    }elseif(isset($_POST['buts2'])){
            $variabPag = 4;
            $resultpar = isset($_POST['derecho']);  
            $resultpar = $variabPag + 4;

    }elseif(isset($_POST['buts3'])){
            $variabPag = 8;
            $resultpar = isset($_POST['derecho']);  
            $resultpar = $variabPag + 4;

    }elseif(isset($_POST['buts4'])){
            $variabPag = 12;
            $resultpar = isset($_POST['derecho']);  
            $resultpar = $variabPag + 4;
    }


    $select="SELECT * FROM articles_lp LIMIT $variabPag, 4";
    $method= mysqli_query($conection, $select);

    
    
        

    

    








?>