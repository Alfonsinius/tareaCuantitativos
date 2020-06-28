<?php
include '../View/MenuLogica.html';

$lambdaDigitado = $_POST['lambda'];
$miDigitado = $_POST['mi'];
$k = 1;

$calculoL = $lambdaDigitado / ($miDigitado - $lambdaDigitado);
$calculoW = 1 / ($miDigitado - $lambdaDigitado);
$calculoLq = pow($lambdaDigitado, 2) / $miDigitado * ($miDigitado - $lambdaDigitado);
$calculoWq = $lambdaDigitado / $miDigitado * ($miDigitado - $lambdaDigitado);
$calculoRo = ($lambdaDigitado / $miDigitado)*100;
$calculoP0 = (1 - ($lambdaDigitado / $miDigitado))*100;
$calculoPnK = (pow(($lambdaDigitado / $miDigitado), $k + 1))*100;

?>
<h1><span class="label label-danger">El resultado de MM1 para un λ de: <?php echo $lambdaDigitado ?> y un μ de: <?php echo $miDigitado?> es el siguiente:</span></h1><br><br>

<center><h1> <span class="label label-success"><?php echo'El valor de L es: ' . $calculoL; ?> </span></h1></center><hr>
<center><h1> <span class="label label-success"><?php echo'El valor de W es: ' . $calculoW. ' convertido en minutos sería: '.$calculoW*60; ?> </span></h1></center><hr>
<center><h1> <span class="label label-success"><?php echo'El valor de Lq es: ' . $calculoLq; ?> </span></h1></center><hr>
<center><h1> <span class="label label-success"><?php echo'El valor de Wq es: ' . $calculoWq. ' convertido en minutos sería: '.$calculoWq*60; ?> </span></h1></center><hr>
<center><h1> <span class="label label-success"><?php echo'El valor de Ro es: ' . round($calculoRo).'%'; ?> </span></h1></center><hr>
<center><h1> <span class="label label-success"><?php echo'El valor de P0 es: ' . round($calculoP0).'%'; ?> </span></h1></center><hr>
<center><h1> <span class="label label-success"><?php echo'El valor de Pn>K es: ' . round($calculoPnK).'%'; ?> </span></h1></center><hr>
