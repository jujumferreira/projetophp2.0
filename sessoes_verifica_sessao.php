<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Verifica Sessões</title>
<?php 
session_start();

if($_SESSION['nome'] != "master") {

	session_destroy();
	
	header("location:sessoes_bloqueando_paginas.php");
}


 ?>

</head>
<body>

</body>
</html>