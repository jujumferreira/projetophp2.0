<?php 
 
$nome = "julia";
$peso = 60.00;
$altura = 1.75;


function imc ($peso,$altura,){
	$imc = $peso / ($altura *$altura);
    return $imc;
}

$resp = imc($peso,$altura,);


printf("Olá $nome seu peso é $peso sua altura $altura seu IMC %.2f", $resp);



?>