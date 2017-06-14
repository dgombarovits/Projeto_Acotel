<?php
include "conecta.php";
// seleciona a base de dados em que vamos trabalhar
mysql_select_db($db, $con);


#guarda os valores inseridos pelo usuario em uma variavel
$img = $_POST['imgSrc'];
$prod = $_POST['nomeProduto'];
$desc = $_POST['descProduto'];

	#valida os dados inseridos. Nenhum valor pode ser nulo caso esteja errado retorna para formulario
	if ($img == "") {?>
		<script type="text/javascript">
  				alert("O Caminho da Imagem é invalido")
  				</script><?php header("Location: ../adm.php");
	 }
	elseif ($prod == "") {?>
		<script type="text/javascript">
  				alert("O nome do produto é um campo obrigatório")
  				</script><?php header("Location: ../adm.php");
	}
	elseif ($desc == "") {?>

		<script type="text/javascript">
  				alert("A descrição do produto é um campo obrigatório")
  				</script><?php header("Location: ../adm.php");
	}else{#se tudo estiver correto os valores são inseridos no banco de dados
$sql = "INSERT INTO produtos VALUES (NULL, '".$img."', '".$prod."', '".$desc."')";
mysql_query($sql, $con) or die("Erro ao tentar cadastrar registro");# mesnagem se der errado
echo "Produto cadastrado com sucesso!";#mensagem se der certo
echo "<a href=../adm.php><br>VOLTAR</a>";
}
?>  
