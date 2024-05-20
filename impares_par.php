<?php 
$num = array (10,20,30,40,50,-10,-20,-30,-40,-50);
$positivos = array();
$negativos = array();
$numero = 0;
$res = 0;
$res1 = 0;
foreach ($num as $numero){
	if ($numero >= 0){
		$positivos[] = $numero;

	}else{
		$negativos[] = $numero;
	}
}

foreach($positivos as $positivo){
	echo $positivo . "";
}
echo "\n";
foreach($negativos as $negativo){
	echo $negativo . "";
}

for($positivos >= 0){
	$res = $res + 1;
}
for($negativos < 0){
	$res1 = $res1 + 1;
}

echo $res;
echo $res1;
 ?>

