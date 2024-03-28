<?php 
 
$nome = "julia";
$peso = 60.00;
$altura = 1.75;


function imc ($peso,$altura,){
	$imc = $peso / ($altura *$altura);
    return $imc;
}

$resp = imc($peso,$altura,);

if($resp <= 18.5){

	echo "Você está abaixo do peso !. <br />";
}
elseif ($resp >= 18.5 && $resp <= 24.9) {

	echo "Você está com o peso ideal !. <br />";
}
elseif ($resp >= 25.0 && $resp <= 29.9) {

	echo "Você está Levemente acima do peso !. <br />";
}
elseif ($resp >= 30.0 && $resp <= 34.9) {

	echo " você está com Obesidade grau 1 !. <br />";
}
elseif ($resp >= 35.0 && $resp <= 39.9) {

	echo "Você está com Obesidade grau 2, tome cuidado !. <br />";
}
elseif ($resp <= 40.0) {
	
	echo "Você está com o Obesidade grau 3 ! mórbita. <br />";
}



printf("Seu peso é $peso sua altura $altura seu IMC %.2f", $resp);



?>