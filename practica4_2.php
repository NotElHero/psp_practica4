<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Javier Villacorta">
    <title>Ejercicio 2</title>
</head>
<body>
    <form action="practica4_2.2.php" method="post">
    <!-- ejercicio 1: radio/test
    ejercicio 2: checkbox/multiple (resta por fallo)
    ejercicio 3: desplegable/select option
    ejercicio 4: texto
    ejercicio 5: texto -->

        <h3>Nombre</h3>
        <input type="text" id="nombre" name="nombre" placeholders="Nombre" />
        <br><br>

        <h3>1. ¿Qué capa es la que realiza la petición de recursos al servidor?</h3>
        <input type="radio" id="opc1" name="opcion" value="opc1"/>Capa de cliente
        <br>
        <input type="radio" id="opc2" name="opcion" value="ocp2"/>Capa de servidor
        <br>
        <input type="radio" id="opc3" name="opcion" value="opc3"/>Capa de datos
        <br><br>

        <h3>2. Selecciona los sucesos que ocurran cuando se ejecuta un programa</h3>
        <input type="checkbox" id="sel1" name="selecciones" value="sel1"/>Se crea una nueva entrada en la tabla de procesos del sistema
        <br>
        <input type="checkbox" id="sel2" name="selecciones" value="sel2"/>Se cargan las páginas del programa en memoria RAM
        <br>
        <input type="checkbox" id="sel3" name="selecciones" value="sel3"/>Se crea un archivo para guardar las instrucciones
        <br>
        <input type="checkbox" id="sel4" name="selecciones" value="sel4"/>Se pone el proceso en la lista de espera para que el planificador le conceda el procesador
        <br>

        <h3>3. Cuando un proceso está esperando un evento se dice que está:</h3>
        <select name="campo" id="camp">
            <option value="ejecucion">En ejecucion</option>
            <option value="preparado">Preparado</option>
            <option value="terminado">Terminado</option>
            <option value="bloqueado">Bloqueado</option>
        </select>
        <br>

        <h3>4. ¿Qué procesos ofrecen servicios?</h3>
        <input type="text" id="resp4" name="resp4">
        <br>

        <h3>5. </h3>
        <input type="text" name="resp5" id="resp5">
        <br>

        <input type="submit" value="Enviar" name="enviar" />
        
    </form>

    <h3>Valor de cada ejercicio</h3>
    <p>Ejercicio 1: 2 puntos</p>
    <p>Ejercicio 2: 2 puntos (fallo -1 punto)</p>
    <p>Ejercicio 3: 2 puntos</p>
    <p>Ejercicio 4: 2 puntos</p>
    <p>Ejercicio 5: 2 puntos</p>

    <?php
    if ($_POST) {
        # code...
    }
    ?>
</body>
</html>