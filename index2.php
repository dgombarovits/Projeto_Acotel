<!DOCTYPE html>
<html lang="pt-br">
<head>

<?php include "php/query.php"; ?>

<!--<?php
include "php/conecta.php";
// seleciona a base de dados em que vamos trabalhar
mysql_select_db($db, $con);
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT img, nome, descricao FROM produtos");
// executa a query
$dados = mysql_query($query, $con) or die(mysql_error());
// transforma os dados em um array
$linha = mysql_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysql_num_rows($dados);
?>-->

	<title>Projeto Acotel</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href=&#039;http://necolas.github.io/normalize.css/+Sans:300,400,600,700,800&#039; rel=&#039;stylesheet&#039; type=&#039;text/css&#039;>
</head>
<body class="center clearfix">
    <header>
    
<nav>
    <ul>
        <li><a href="#">home</a></li>
        <li><a href="login.php">login</a></li>
    </ul>
</nav><!-- fim nav -->
    </header><!-- fim header -->

  <div class="chamada">       
 <h2>Catalogo de Produtos</h2>   
 <h3 id="subtitulo">Os proditos na sua base de dados aparece aqui!</h3>
 </div><!-- fim .chamada -->


<section class="container">
	
	<?php
	// se o número de resultados for maior que zero, mostra os dados
	if($total > 0) {
		// inicia o loop que vai mostrar todos os dados
		do {
?>
		<div class="desktop">

            <figure>
                <img src="<?=$linha['img']?>" width="238" height="125" alt="">
            </figure>
            <h3><?=$linha['nome']?></h3>
            <p> <?=$linha['descricao']?> <span class="btn"><a href="#" title="Leia mais...">Leia mais...</a></span></p>
            <br/>
        </div><!-- fim #desktop -->

<?php
		// finaliza o loop que vai mostrar os dados
		}while($linha = mysql_fetch_assoc($dados));
	// fim do if 
	}
?>
<footer>
    	<small class="copyright">
        	<p>Copyright © 2017 - Todos os Direitos Reservados <a href="http://facebook.com/dgombarovits">DG-Cunha</a></p>
        </small><!-- fim .copyright -->
        <small class="desenvolvedor"> &nbsp;Desenvolvedor
        </small><!-- fim .desenvolvedor -->
    </footer><!-- fim footer -->
</section>
<br/>
      
</body>
</html>