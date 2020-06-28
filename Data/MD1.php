<?php
  include '../View/MenuLogica.html';

  $lambda = $_POST['inputLambda'];
  $miu    = $_POST['inputPromedio'];
  $num1   = 1;
  $num2   = 2;

  $div = ($num2 * $miu *($miu-$lambda));
  $Lq  = pow($lambda,2) / $div;
  $Wq  = $lambda / $div;
  $L   = $Lq + ($lambda/$miu);
  $W   = $Wq + ($num1/$miu);
?>

<div class="container" style="background-color: rgb(117,117,177)">
  <h1>Resultados del Cálculo para &micro; = <?php echo $miu?> y &lambda; = <?php echo $lambda?><br></h1>
  <h2><?php echo'El valor de Lq  es: ' . $Lq; ?></h2>
  <h2><?php echo'El valor de Wq  es: ' . $Wq; ?></h2>
  <h2><?php echo'El valor de L   es: ' . $L; ?></h2>
  <h2><?php echo'El valor de W   es: ' . $W; ?></h2>
</div>