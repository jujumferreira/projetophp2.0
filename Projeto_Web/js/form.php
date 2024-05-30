<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário</title>
</head>
<body>
    <h1>Formulário PHP</h1>
    <form action="recebido.php" method="post">
    	<label for="nome">Nome</label>
    	<input type="text" name="nome" id="nome" maxlength="25" placeholder="Insira seu Nome!!" autocomplete="on" autofocus required><br><br>

    	<label for="email">Email</label>
    	<input type="email" name="email" id="email" maxlength="25" placeholder="Insira seu Email!!" autocomplete="on" required><br><br>

    	<input type="submit" name="enviar" value="Enviar">
    	<input type="reset" name="Limpar" value="Limpar">

    	
    </form>

</body>
</html>