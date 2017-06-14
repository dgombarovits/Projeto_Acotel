<!DOCTYPE html>
<html>
<head>
	<?php include "php/query.php";
	mysql_select_db($db, $con);?><!--Incluindo operaçoes de acesso ao bando de dados -->

<?php
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
?>

	<title>Administrador de projeto</title>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href=&#039;http://necolas.github.io/normalize.css/+Sans:300,400,600,700,800&#039; rel=&#039;stylesheet&#039; type=&#039;text/css&#039;>
</head>
<body class="center clearfix">
<header>
<nav>
    <ul>
        <li><a href="index2.php">home</a></li>
        <li><a href="login.php">login</a></li>
    </ul>
</nav><!-- fim nav -->
<div class="chamada">       
 <h2><span>Administração </span>de Produtos</h2>   
 <h3 id="subtitulo">Cadastre seus produtos aqui!</h3>
 </div><!-- fim .chamada -->
</header>
 <section class="container">
 <div class="desktopAdm">
 	 <h3>Formulário de Cadastro de Clientes</h3><br>
  <form name="Cadastro" action="php/insert.php" method="POST"><!--Ação do formulario chama insere.php -->
    <label>SRC da imagem<br/>Principal do produto: </label>
    <input type="text" name="imgSrc" size="45"><br>
    <label>Nome do Produto: </label>
    <input type="text" name="nomeProduto" size="45"><br>
    <label>Descrição do Produto: </label><br>
    <textarea name="descProduto" rows="5" cols="46" ></textarea>
    
   <br><br>
    <input type="submit" name="enviar" value="Enviar">
  </form>

  <br><br>
  </div>
 

 <div class="excluir">
  <form name="excluir" method="post" action="php/exclui.php">
   <label >Selecione um produto para excluir</label>
   <select name="select">
   <option>Selecione...</option>
 
   <?php // inicia o loop que vai mostrar todos os nomes dos produtos
		do {?> 
   
   <option value="<?=$linha['id']?>"> <?php echo $linha['nome'] ?></option>

   <?php }while($linha = mysql_fetch_assoc($dados)); ?>
 
 </select>
<br><br>
 <input type="submit" name="enviar" value="Enviar">
</form>
</div>
</section>
</body>
</html>