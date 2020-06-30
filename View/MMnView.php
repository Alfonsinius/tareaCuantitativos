<?php include './Menu.html'; ?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <form action="../Data/MMN.php" method="post">
            <label for="fname">Ingrese el valor de la tasa de llegadas promedio:</label><br>
            <input type="number"  name="valorU"><br>
            <label for="lname">Ingrese el valor de la tasa de servicio en promedio:</label><br>
            <input type="number" name="valorH"><br><br>
            <label for="lname">Ingrese el valor de M:</label><br>
            <input type="number" name="valorM"><br><br>
                        <label for="lname">Costos:</label><br>
            <label for="lname">Horas laboradas:</label><br>
            <input type="number"  name="valorHoras"><br><br>

             <label for="lname">Costo espera:</label><br>
            <input type="number"  name="valorCespera"><br><br>
              <label for="lname">Costo asignado al servicio:</label><br>
            <input type="number"  name="valorServicio"><br><br>
            
            <input type="submit" value="Calcular">
        </form>
<?php
// put your code here
?>
    </body>
</html>
