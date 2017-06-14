<?php
include "php/conecta.php";
// seleciona a base de dados em que vamos trabalhar
mysql_select_db($db, $con);
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT id, login, senha FROM login");
// executa a query
$dados = mysql_query($query, $con) or die(mysql_error());
// transforma os dados em um array
$linha = mysql_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysql_num_rows($dados);

	if ($total > 0) {
		do {
			if ($linha['login'] == $_POST['usuario'] && $linha['senha'] == $_POST['password']){

				header ("Location: adm.html");
			}
			else{?>

				<script type="text/javascript">
  				alert("Login ou senha incorreta")
  				</script>
 
  				<?php
  			echo "<a href=index.html>VOLTAR</a>";
  				}
  
			}

		} while ( $linha = mysql_fetch_assoc($dados));
	}
?>

<?php
// tira o resultado da busca da memória
mysql_free_result($dados);
?>