<?php

include 'Menu.html';

?>

<style>
body {
  background-image: url('https://c0.wallpaperflare.com/preview/663/817/172/equipment-illustration-letter-message.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: 100% 100%;
}
</style>

<div class="container" ">
    <form action="../Data/MD1.php" method="post" class="form">
        <div class="form-group">
            <label for="inputPromedio">Digite el valor de &micro;:</label>
            <input class="form-control" type="number" name="inputPromedio" style="width:80px;">  
        </div>
        <div class="form-group">
            <label for="inputLambda">Digite el valor de &lambda;:</label>
            <input class="form-control" type="number" name="inputLambda" style="width:80px;">
        </div>
        <div class="form-group">
            <button class="btn btn-success" submit="submit">Calcular</button>
        </div>
    </form>
    
</div>