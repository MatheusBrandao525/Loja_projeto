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
                <img src="https://th.bing.com/th/id/R43620c4523f2e554964864485c693976?rik=k1Iby6aJ8qmT8w&pid=ImgRaw/450x320" class="img-responsive" style="width: 100%;  height: 200px;" alt="">
                <div><h1>Nome do produto</h1></div>
                <div><h4>R$500,00</h4></div>
            </div>

            <div class="col-sm-3">
                <img src="https://http2.mlstatic.com/como-montar-loja-de-material-de-construco-e-book-D_NQ_NP_638794-MLB27795903641_072018-F.jpg/450x320" class="img-responsive" style="width: 100%; height: 200px;" alt="">
                <div><h1>Nome do produto</h1></div>
                <div><h4>R$500,00</h4></div>
            </div>

            <div class="col-sm-3">
                <img src="https://th.bing.com/th/id/R43620c4523f2e554964864485c693976?rik=k1Iby6aJ8qmT8w&pid=ImgRaw/450x320" class="img-responsive" style="width: 100%;  height: 200px;" alt="">
                <div><h1>Nome do produto</h1></div>
                <div><h4>R$500,00</h4></div>
            </div>

            <div class="col-sm-3">
                <img src="https://http2.mlstatic.com/como-montar-loja-de-material-de-construco-e-book-D_NQ_NP_638794-MLB27795903641_072018-F.jpg/450x320" class="img-responsive" style="width: 100%; height: 200px;" alt="">
                <div><h1>Nome do produto</h1></div>
                <div><h4>R$500,00</h4></div>
            </div>

            <div class="col-sm-3">
                <img src="https://th.bing.com/th/id/R43620c4523f2e554964864485c693976?rik=k1Iby6aJ8qmT8w&pid=ImgRaw/450x320" class="img-responsive" style="width: 100%;  height: 200px;" alt="">
                <div><h1>Nome do produto</h1></div>
                <div><h4>R$500,00</h4></div>
            </div>
        </div><!--row-->
    </div><!--container-fluid-->
    <?php
        include 'footer.html'
    ?>
</body>
</html>