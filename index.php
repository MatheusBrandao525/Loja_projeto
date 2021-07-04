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
    <?php include'nav.php'?>
    <?php include'cabecalho.html'?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <img src="capa_exemplo.jpg" class="img-responsive" style="width: 100%;  height: 300px;" alt="">
                <div><h3>Nome do produto</h3></div>
                <div><h4>R$500,00</h4></div>

                <div class="center">
                    <button class="btn btn-lg btn-block btn-info">
                        <span class="glyphicon glyphicon-info-sign"> Detalhes</span>
                    </button>
                </div>

                <div class="center" style="margin-top: 5px; margin-bottom:5px;">
                    <button class="btn btn-lg btn-block btn-danger">
                        <span class="glyphicon glyphicon-usd"> Comprar</span>
                    </button>
                </div>

            </div>


        </div><!--row-->
    </div><!--container-fluid-->
    <?php
        include 'footer.html'
    ?>
</body>
</html>