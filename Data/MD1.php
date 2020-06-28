<?php
  include '../View/MenuLogica.html';

  $lambda = $_POST['lambda'];
  $miu    = $_POST['mi'];
  $num1   = 1;
  $num2   = 2;

  $div = ($num2 * $miu *($miu-$lambda));
  $Lq  = pow($lambda,2) / $div;
  $Wq  = $lambda / $div;
  $L   = $Lq + ($lambda/$miu);
  $W   = $Wq + ($num/$miu);
?>

<div class="container">
  <h1>El valor de Lq  es:</h1>
  <p><?php $Lq; ?></p>
  <h1>El valor de Wq  es:</h1>
  <p><?php $Wq; ?></p>
  <h1>El valor de L   es:</h1>
  <p><?php $L; ?></p>
  <h1>El valor de Q   es:</h1>
  <p><?php $W; ?></p>
</div>