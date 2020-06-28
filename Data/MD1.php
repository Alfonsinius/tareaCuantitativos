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

<div class="container">
  <h1>El valor de Lq  es:</h1>
  <p><?php $Lq; ?></p>
  <h1>El valor de Wq  es:</h1>
  <p><?php echo'El valor de L es: ' . $Lq; ?></p>
  <h1>El valor de L   es:</h1>
  <p><?php $L; ?></p>
  <h1>El valor de Q   es:</h1>
  <p><?php $W; ?></p>
<center><h1> <span class="label label-success"><?php echo'El valor de L es: ' . $Lq; ?> </span></h1></center><hr>
<center><h1> <span class="label label-success"><?php echo'El valor de W es: ' . $Wq. ' convertido en minutos sería: '.$calculoW*60; ?> </span></h1></center><hr>
<center><h1> <span class="label label-success"><?php echo'El valor de Lq es: ' . $L; ?> </span></h1></center><hr>
<center><h1> <span class="label label-success"><?php echo'El valor de Wq es: ' . $W. ' convertido en minutos sería: '.$calculoWq*60; ?> </span></h1></center><hr>

</div>