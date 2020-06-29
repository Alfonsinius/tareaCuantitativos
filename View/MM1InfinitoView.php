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
        <form action="../Data/MM1Infinito.php" method="post">
            <label for="fname">Ingrese el valor de la tasa de llegadas promedio:</label><br>
            <input type="number"  name="valorU"><br>
            <label for="lname">Ingrese el valor de la tasa de llegadas en promedio:</label><br>
            <input type="number" name="valorH"><br><br>
            <label for="lname">Ingrese el valor de N:</label><br>
            <input type="number"  name="valorN"><br><br>
            
            <input type="submit" value="Calcular">
        </form>
<?php
// put your code here
?>
    </body>
</html>