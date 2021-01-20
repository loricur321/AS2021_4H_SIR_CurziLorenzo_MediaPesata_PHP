<?php
    print_r($_POST);

    $op1 = $_POST["txtOp1"]; //ricava il valore dalla form html
    $peso1 = $_POST["txtPeso1"];

    $op2 = $_POST["txtOp2"]; 
    $peso2 = $_POST["txtPeso2"];

    $op3 = $_POST["txtOp3"]; 
    $peso3 = $_POST["txtPeso3"];

    $ris = 0;

    if(($peso1 + $peso2 + $peso3) != 0) //controllo che non si effetuino divisioni per zero
        {
            $ris = (($op1 * $peso1) + ($op2 + $peso2) + ($op3 * $peso3)) / ($peso1 + $peso2 + $peso3); //calcola la media
            echo "<br><br>La media equivale a:".$ris;
        }
        else
        {   
            echo "<br><br>Non si puo' dividere per zero!!" ;
        }

    


?>