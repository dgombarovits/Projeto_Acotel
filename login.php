<?php
include "php/query.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>

<form style="text-align: center; margin: 5px; padding: 5px;" action="conecta_admin.php" method="POST">
	<h2>Login</h2>
  	<p>usuário: <input name="usuario" type="text"  size="30"><br/><br/>
 	senha:  &nbsp;<input name="password"  type="password" size="30"><br/></p>
  <input name="enviar" type="submit" id="enviar"  value="enviar">
</form>
</body>
</html>