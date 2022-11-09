<?php
    if (isset($_POST['enviar'])) { //se comprueba que ya está definido el formulario por su nombre
        $c1 = $_POST['campo1'];
        $c2 = $_POST['campo2'];
        $c3 = $_POST['campo3'];
        echo $c1 + $c2;
    }
    ?>