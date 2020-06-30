<?php include './Menu.html'; ?>

<center><div class="container">
    <form action="../Data/MM1Infinito.php" method="post">
        <div class="form-group">
            <label for="fname" >Ingrese el valor de la tasa de llegadas promedio:</label><br>
            <input type="number"  name="valorU"  step="0.01" require><br>
        </div>
        <div class="form-group">
            <label for="lname">Ingrese el valor de la tasa de llegadas en promedio:</label><br>
            <input type="number" name="valorH"  step="0.01" require><br>
        </div>
        <div class="form-group">
            <label for="lname">Ingrese el valor de N:</label><br>
            <input type="number"  name="valorN"  step="0.01" require><br>
        </div>
        <input type="submit" value="Calcular">
    </form>
 </div>
 </center>