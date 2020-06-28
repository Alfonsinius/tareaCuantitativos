<?php ?>

<?php
include 'Menu.html';
?>

<div class="container">

    <h2><span class="label label-default">Formulario para resolver ejercicios tipo MM1</span></h2>
    <form action = "../Data/MM1.php" method="post">
        <h3><span class="label label-default">Digite el valor de lambda (λ)</span></h3>
        <input name="lambda" type="number" class="form-control" placeholder="número de links">


        <h3><span class="label label-default">Digite el valor de mi (μ)</span></h3>
        <input name="mi" type="number" class="form-control" placeholder="número de links">
        <center><input type="submit" name="BtnGuardar" value="Calcular" class="btn btn-primary btn-lg"></center> 

    </form>
</div>