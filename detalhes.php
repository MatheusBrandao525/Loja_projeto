<!doctype html>

<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Minha Loja</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	
	<style>
	
	.navbar{
		margin-bottom: 0;
	}
	
	
	</style>
	
	
	
</head>

<body>	
	
	<?php
	
	session_start();
	
	include 'conexao.php';	
	include 'nav.php';
	include 'cabecalho.html';

	if(!empty($_GET['cd'])) {



	$cd_produto = $_GET['cd'];

	$consulta = $cn-> query("select * from vw_produto where cd_produto='$cd_produto'");
	$exibir = $consulta ->fetch(PDO::FETCH_ASSOC);
	} else{
		header('location:index.php');
	}

	?>
	
<div class="container-fluid">
	
	
	
	<div class="row">
		
		 <div class="col-sm-4 col-sm-offset-1">
			 
			 <h1>Detalhes do Produto</h1>
			 
			 <img src="imagens/<?php echo $exibir['ds_capa'];?>.jpg" class="img-responsive" style="width:100%;">
			
		</div>
		
				
 		 <div class="col-sm-7"><h1><?php echo $exibir['nm_produto'];?></h1>
		
		<p><?php echo $exibir['ds_descricao_produto'];?></p>
		
		<p>Qt estoque= <?php echo $exibir['qt_estoque'];?></p>
		
		<p>R$ <?php echo number_format($exibir['vl_preco'],'2',',','.');?></p>
			 
			 
		<button class="btn btn-lg btn-success">Comprar</button>
				
		</div>		
	

	
</div>
	
	<?php
	
	include 'footer.html';
	
	?>
	
</body>
</html>