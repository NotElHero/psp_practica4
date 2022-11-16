<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Javier Villacorta">
    <title></title>
</head>
<body>
    <form action="practica4_2.php" method="post">
        <input type="number" id="cantidad" name="campo1" placeholders="Inserta un dato" />
        <br>
        <input type="radio" id="eur" name="currency" value="eur"/>Euro
        <br>
        <input type="radio" id="usd" name="currency" value="usd"/>Dolar
        <br>
        <input type="radio" id="btc" name="currency" value="btc"/>Bitcoin
        <br>
        <input type="submit" value="Enviar" name="enviar" />
    </form>

    <?php
    if (isset($_POST['enviar'])) {
        $c1 = $_POST['campo1'];
        $currency = $_POST['currency'];

        //Valores redondeados y de 11/2022
        $valorEur = 1;
        $valorUsd = 1;
        $valorBtc = 17036;
        
        if ($currency == 'eur') {
            echo "El valor en USD es de: ", $c1 * $valorUsd;
            echo "<br>";
            echo "El valor en BTC es de: ", $c1 * $valorBtc;
        }elseif ($currency == 'usd') {
            echo "El valor en EUR es de: ", $c1 * $valorEur;
            echo "<br>";
            echo "El valor en BTC es de: ", $c1 * $valorBtc;
        }elseif ($currency == 'btc') {
            echo "El valor en USD es de: ", $c1 * $valorUsd;
            echo "<br>";
            echo "El valor en EUR es de: ", $c1 * $valorEur;
        }
    }
    
?>
</body>
</html>