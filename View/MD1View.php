<?php

include 'Menu.html';

?>

<div class="container">
    <form action="../Data/MD1.php" method="post" class="form-inline">
        <div class="form-group">
            <label for="inputPromedio">Digite el valor de &micro;:</label>
            <input class="form-control" type="number" id="inputPromedio">  
        </div>
        <div class="form-group">
            <label for="inputLamba">Digite el valor &lambda;:</label>
            <input class="form-control" type="number" id="inputLambda">
        </div>
        <button class="btn btn-success" submit="submit">Calcular</button>
        <input type="submit" name="BtnGuardar" value="Calcular" class="btn btn-primary btn-lg">
    </form>
    
    
    
</div>