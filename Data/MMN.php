<?php
include '../View/MenuLogica.html';
                                                                                       
//valor
$valorFormula=1;
$valorU= $_POST["valorU"];
$valorH=$_POST['valorH'];
$valorM=$_POST['valorM'];
$valorN=$_POST['valorN'];
 //valor calcular
 
 $L=0.0;
 $W=0.0;
 $Lq=0.0;
 $Wq=0.0;
 $Ro=0.0;
 $Po=0.0;
 $valorFormula=1;
 
 $P1=(1/((obtieneFactorial(0))*pow(($valorH/$valorU),0)));
 $P2=((1/( obtieneFactorial(1))*pow($valorH/$valorU,1)));
 $P3=((1/(obtieneFactorial($valorM))*pow(($valorH/$valorU),$valorM)));
 $P4=(($valorM*$valorU)/(($valorM*$valorU)-$valorH));
 $Po=(1/($P1+$P2+($P3*$P4)));
 $L=((($valorH*$valorU*pow(($valorH/$valorU),$valorM))/(obtieneFactorial ($valorM-1)*pow($valorM*$valorU-$valorH,2) ))*$Po+($valorH/$valorU));
 $W=$L/$valorH;
 $Lq=$L-($valorH/$valorU);
 $Wq=$W-($valorFormula/$valorU);
 $Ro=$valorH/($valorU*$valorM);
 
 $MinutosW=$W*60;
 $MinutosWq=$Wq*60;
 
 
 $horas=$_POST['valorHoras'];
 $valorCespera=$_POST['valorCespera'];
 $valorServicio=$_POST['valorServicio'];
 
 $costototalServicio=(($horas*$valorM)+$valorServicio);
 $costototalespera=$horas*$valorH*$valorCespera*$Wq;
 $costototalservicioesperado=$costototalServicio+$costototalespera;
 function obtieneFactorial($numero){ 
    $factorial = 1; 
    for ($i = 1; $i <= $numero; $i++){ 
      $factorial = $factorial * $i; 
    } 
    return $factorial; 
} 
?>

<h1><span class="label label-danger">El resultado de MMN para  un valor de la tasa de llegadas en promedio de: <?php echo $valorH ?>,  valor de la tasa de servicios en promedio de: <?php echo $valorU?> ,  numero de canales abiertos de: <?php echo $valorM?> y N de: <?php echo $valorN?>   es el siguiente:</span></h1><br><br>

<center><h1> <span class="label label-success"><?php echo'El valor de L es: ' . $L; ?> </span></h1></center><hr>
<center><h1> <span class="label label-success"><?php echo'El valor de W es: ' . $W. ' convertido en minutos sería: '.$MinutosW; ?> </span></h1></center><hr>
<center><h1> <span class="label label-success"><?php echo'El valor de Lq es: ' . $Lq; ?> </span></h1></center><hr>
<center><h1> <span class="label label-success"><?php echo'El valor de Wq es: ' . $Wq. ' convertido en minutos sería: '.$MinutosWq; ?> </span></h1></center><hr>
<center><h1> <span class="label label-success"><?php echo'El valor de Ro es: ' . ($Ro*100); ?> </span></h1></center><hr>
<center><h1> <span class="label label-success"><?php echo'El valor de P0 es: ' . ($Po*100).'%'; ?> </span></h1></center><hr>
<center><h1> <span class="label label-success"><?php echo'El valor del costo total servicio es: ' . $costototalServicio; ?> </span></h1></center><hr>
<center><h1> <span class="label label-success"><?php echo'El valor del costo total de espera es: ' . $costototalespera; ?> </span></h1></center><hr>
<center><h1> <span class="label label-success"><?php echo'El valor del costo total diario es: ' . $costototalservicioesperado; ?> </span></h1></center><hr>
