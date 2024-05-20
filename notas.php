<?php 
$soma = 0;
$notas = array("João" => 10,"Maria" => 8,"José" => 8,"Ana" => 7,"Leo" => 6,"Julia" => 4,"Matheus" => 5,"Ricardo" => 8,"Rogerio" => 9,"Ivone" => 9);
$valor = 0;
$nome = "";
$nota = 0;
$maior_valor = 0;
$nome_maior_nota = "";

foreach ($notas as $valor) {
	$soma += $valor;
}

foreach ($notas as $nome => $nota) {
	if ($nota > $maior_valor) {
		$maior_valor = $nota;
		$nome_maior_nota = $nome;
	}
}

$soma = $soma / 10;
echo "A média dos alunos é de: $soma. </br>";
echo "O nome do aluno com maior nota é o/a $nome_maior_nota, com a nota de $maior_valor.";

 ?>
