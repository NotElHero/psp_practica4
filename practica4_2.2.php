<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Javier Villacorta">
    <title>Ejercicio 2.2</title>
</head>
<body>
    
<?php
    if (isset($_POST['enviar'])) {
        $nombre = $_POST['nombre'];
        $opcion = $_POST['opcion'];
        $selecciones = $_POST['selecciones'];

        $nota = 0;

        if ($opcion == 'opc1') {
            $nota =+2;
        }else{
            echo "La respuesta correcta era ", $_POST['opc1'];
        }

        if ($selecciones) {
            # code...
        }

        if ($_POST['campo'] == 'bloqueado') {
            $nota +=2;
        }
        //falta acabar lo del option, lo de las checkbox y el resto
    }
    
?>
</body>
</html>