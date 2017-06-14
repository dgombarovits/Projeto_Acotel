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
//variavel recebe o resultado do login
$logado=0;

	//se a consulta tiver resultados entrara no proximo bloco
	if ($total > 0) {
		do {//loop que percorre a tabela login conferindo o usuario e senha
			if ($linha['login'] == $_POST['usuario'] && $linha['senha'] == $_POST['password']){
				$logado=1;
				header ("Location: adm.php");//se o usuario logar redireciona para pagina de login
			}

		} while ( $linha = mysql_fetch_assoc($dados));

			if ($logado == 0) {?> <!--se o login falhar vai esvrever uma mensagem -->

				<script type="text/javascript">
  				alert("Login ou senha incorreta")
  				</script>
 
  				<?php
  			
  				}
  
		//retorna para pagina anterior caso login falhe
		echo "<a href=login.php>VOLTAR</a>";
	}
?>

<?php
// tira o resultado da busca da memória
mysql_free_result($dados);
?>