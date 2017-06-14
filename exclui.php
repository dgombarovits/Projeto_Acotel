<?php
include "conecta.php";
// seleciona a base de dados em que vamos trabalhar
mysql_select_db($db, $con);


#guarda o id do produto selecionado pelo usuario
$id = $_POST['select'];

	$sql = "DELETE FROM produtos WHERE id = '".$id."' "; 
	mysql_query($sql, $con) or die("Erro ao tentar excluir registro");# mesnagem se der errado
	echo "Produto excluido com sucesso!";#mensagem se der certo
	echo "<a href=../adm.php><br>VOLTAR</a>";?>

  



