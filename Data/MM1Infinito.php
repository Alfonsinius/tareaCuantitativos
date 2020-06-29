﻿<?php
include '../View/MenuLogica.html';
                                                                                       
//valor
$valorU= $_POST["valorU"];
$valorH=$_POST['valorH'];
$valorN=$_POST['valorN'];

 //valor calcular
 $L=0.0;
 $W=0.0;
 $Lq=0.0;
 $Wq=0.0;
 $Po=0.0;
 
 $Po=(1/obtieneDenominadorPo($valorN, $valorH, $valorU));
 $Lq=($valorN-(($valorH+$valorU)/$valorH)*(1-$Po));
 $L=($Lq+(1-$Po));
 $W=$L/$valorH;
 $Wq=($Lq/(($valorN-$L)*$valorH));
 
 $MinutosW=$W*60;
 $MinutosWq=$Wq*60;
 
 function obtieneFactorial($numero){ 
    $factorial = 1; 
    for ($i = 1; $i <= $numero; $i++){ 
      $factorial = $factorial * $i; 
    } 
    return $factorial; 
} 

function obtieneDenominadorPo($limite, $valorH, $valorU){
    $denominadorPo = 0;
    for($i = 0; $i <= $limite; $i++) {
        $denominadorPo = $denominadorPo + 
                (obtieneFactorial($i)/obtieneFactorial($limite-$i))*
                (($valorH/$valorU)^$i);
    }
    return $denominadorPo;
}
?>

<h1><span class="label label-danger">El resultado de MM1 infinito para un valor de la tasa de llegadas en promedio de: <?php echo $valorH ?>,  valor de la tasa de servicios en promedio de: <?php echo $valorU?> ,  numero de canales abiertos de:  y N de: <?php echo $valorN?>   es el siguiente:</span></h1><br><br>

<center><h1> <span class="label label-success"><?php echo'El numero promedio de clientes (unidades) dentro del sistema es de: ' . $L; ?> </span></h1></center><hr>
<center><h1> <span class="label label-success"><?php echo'El tiempo promedio en el sistema es de: ' . $W. ' convertido en minutos sería: '.$MinutosW; ?> </span></h1></center><hr>
<center><h1> <span class="label label-success"><?php echo'La longitud promedio de la cola es: ' . $Lq; ?> </span></h1></center><hr>
<center><h1> <span class="label label-success"><?php echo'El tiempo de espera promedio en la cola es: ' . $Wq. ' convertido en minutos sería: '.$MinutosWq; ?> </span></h1></center><hr>
<center><h1> <span class="label label-success"><?php echo'La probabilidad de que el sistema este vacio es de ' . ($Po); ?> </span></h1></center><hr>
