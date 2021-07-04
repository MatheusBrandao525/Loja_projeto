<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Minha Loja</title>
    <! - CSS ->
<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<! - jQuery livraria ->
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>

<! - JavaScript compilado ->
<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>

<style type="text/css">
    .navbar{ margin-bottom: 0;}
</style>
</head>
<body>
    <?php
    session_start();
    include'conexao.php';
    include'nav.php';
    include'cabecalho.html';
     
    // variaavel consulta vai receber variavel $cn que receberá o resultado de uma consulta.
    $consulta = $cn->query('select * from vw_produto');

    ?>;

    <div class="container-fluid">
        <div class="row">
        <?php while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) {?>
            <div class="col-sm-3">
                <img src="imagens/<?php echo $exibe['ds_capa'];?>.jpg" class="img-responsive" style="width: 100%;  height: 300px;" alt="">
                <div><h3><b><?php echo mb_strimwidth($exibe['nm_produto'],0, 25,'...');?></b></h3></div>
                <div><h4>R$ <?php echo number_format($exibe['vl_preco'],2,',','.');?></h4></div>

                <div class="center">
                    <a href="detalhes.php?cd=<?php echo $exibe['cd_produto'];?>">
                    <button class="btn btn-lg btn-block btn-default">
                        <span class="glyphicon glyphicon-info-sign" style="color: cadetblue;"> Detalhes</span>
                    </button>
                    </a>
                </div>

                <div class="center" style="margin-top: 5px; margin-bottom:5px;">
                    <button class="btn btn-lg btn-block btn-info">
                        <span class="glyphicon glyphicon-usd"> Comprar</span>
                    </button>
                </div>

            </div>

            <?php } ?>


            


        </div><!--row-->
    </div><!--container-fluid-->
    <?php
        include 'footer.html'
    ?>
</body>
</html>