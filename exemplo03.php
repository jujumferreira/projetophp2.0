<?php 

$data = "06 de março de 2024";
$salario = "850,00";
$cargo = "Estagiário";
$idade = 18;
$resultado = true;


if ($resultado) {
  echo ('Verdadeiro <br />');

}
 
 echo ("<br/>Arquivo criado em $data");

 printf("<br/> saláro minimo: R$ %.2f", $salario);

 $ texto = sprintf("%s recebe R$ %.2f por mes", $cargo, $salario * 2);

 echo $texto;


 ?>