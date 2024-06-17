<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bloqueando Páginas por sessões</title>
	<?php 

	session_start();

	$_SESSION['nome'] = $_POST['nome'];

	$_SESSION['senha'] = $_POST['senha'];

	 ?>
</head>
<body>
<b>Funcionário:</b> <?php echo $_SESSION['nome'] ?>, logado com sucesso.<br/>

<b>Data de Conexão:</b> <?php echo date("d/m/y") ?><br/>

<b>Hora da Conexão:</b> <?php echo date("h:i:s") ?><br/>

<a href="sessoes_verifica_sessao.php">Área de administrador</a>

</body>                                                                          
</html>