<?php 

$num = array(10,20,30,40,50,-10,-20,-30,-40,-50);
$impares = array();
$pares = array();
$positivos  = array();
$negativos = array();

foreach ($num as $numeros){
	if($numeros % 2 == 0){
		$pares[] = $numeros;
	}else{
		$impares[] = $numeros;
		
	}
}

if($numeros > 0){
	$positivos[] =$numeros;

}else($numeros < 0){
	$negativos[] = $numeros;
}	
for ($i = 0; $i < $pares; $i++ ){
	echo $pares [$i] . "";
}
echo $pares;







 ?>