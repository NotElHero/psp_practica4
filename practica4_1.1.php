<?php
    if (isset($_POST['enviar'])) { //se comprueba que ya está definido el formulario por su nombre
        $c1 = $_POST['campo1'];
        $eur = $_POST['eur'];
        $usd = $_POST['usd'];
        $btc = $_POST['btc'];

    if (!empty($_POST['eur'])) {

        $eur = $_POST['eur'];
    }
    if (!empty($_POST['usd'])) {

        $usd = $_POST['usd'];
    }
    if (!empty($_POST['btc'])) {

        $btc = $_POST['btc'];
    }
        //Valores redondeados y de 11/2022
        $valorEur = 1;
        $valorUsd = 1;
        $valorBtc = 17036;
        
        if (isset($eur)) {
            echo "El valor en USD es de: ", $c1 * $valorUsd;
            echo "<br>";
            echo "El valor en BTC es de: ", $c1 * $valorBtc;
        } elseif (isset($usd)) {
            echo "El valor en EUR es de: ", $c1 * $valorEur;
            echo "<br>";
            echo "El valor en BTC es de: ", $c1 * $valorBtc;
            
        } elseif (isset($btc)) {
            echo "El valor en USD es de: ", $c1 * $valorUsd;
            echo "<br>";
            echo "El valor en EUR es de: ", $c1 * $valorEur;
        }
    }
