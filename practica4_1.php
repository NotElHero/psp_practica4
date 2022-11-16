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
    <form action="practica4_1.1.php" method="post">
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
</body>
</html>