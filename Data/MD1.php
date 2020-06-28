<?php
  include '../View/MenuLogica.html';

  $lambda = $_POST['lambda'];
  $miu    = $_POST['mi'];
  $num    = 1;

  $div = (2*$miu*($miu-$lambda));
  $Lq  = pow($lambda,2)/$div;
  $Wq  = $lambda / $div;
  $L   = $Lq + ($lambda/$miu);
  $W   = $Wq + ($num/$miu);
?>

<div class="container">
  <h1>El valor de Lq  es:</h1>
  <p>{{$Lq}}</p>
  <h1>El valor de Wq  es:</h1>
  <p>{{$Wq}}</p>
  <h1>El valor de L   es:</h1>
  <p>{{$L}}</p>
  <h1>El valor de Q   es:</h1>
  <p>{{$W}}</p>
</div>