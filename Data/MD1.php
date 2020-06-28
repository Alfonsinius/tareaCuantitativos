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
<style>
body {
  background-image: url('https://c0.wallpaperflare.com/preview/663/817/172/equipment-illustration-letter-message.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: 100% 100%;
}
</style>


<div class="container" style="color: #00796B; margin-left:750px;  ">
  <h1 style="color:#5D4037; width:750px;">Resultados del Cálculo para &micro; = <?php echo $miu?> y &lambda; = <?php echo $lambda?><br></h1>
  <h2><b>El valor de Lq es: </b><?php echo $Lq; ?></p></h2>
  <h2><b>El valor de Wq  es: </b><?php echo $Wq; ?></h2>
  <h2><b>El valor de L   es: </b><?php echo $L; ?></h2>
  <h2><b>El valor de W   es: </b><?php echo $W; ?></h2>
</div>
