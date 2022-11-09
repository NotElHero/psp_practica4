<?php
    if (isset($_POST['enviar'])) {
        $c1 = $_POST['campo1'];
        $currency = $_POST['currency'];

        //Valores redondeados y de 11/2022
        $valorEur = 1;
        $valorUsd = 1;
        $valorBtc = 17036;
        
        if (isset($currency['eur'])) {
            echo "El valor en USD es de: ", $c1 * $valorUsd;
            echo "<br>";
            echo "El valor en BTC es de: ", $c1 * $valorBtc;
        }elseif (isset($currency['usd'])) {
            echo "El valor en EUR es de: ", $c1 * $valorEur;
            echo "<br>";
            echo "El valor en BTC es de: ", $c1 * $valorBtc;
        }elseif (isset($currency['btc'])) {
            echo "El valor en USD es de: ", $c1 * $valorUsd;
            echo "<br>";
            echo "El valor en EUR es de: ", $c1 * $valorEur;
        }
    }
