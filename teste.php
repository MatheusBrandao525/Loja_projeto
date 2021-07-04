<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>testando</title>
</head>
<body>
    <?php
        include 'conexao.php';
        // variaavel consulta vai receber variavel $cn que receberá o resultado de uma consulta.
        $consulta = $cn->query('select * from vw_produto');

        // variavel $exibe receberá o resultado da consulta em forma de uma matriz tabela.
       while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) {
        echo $exibe['nm_produto'] .'<br>';
        echo $exibe['vl_preco'] .'<br>';
        echo $exibe['ds_categoria'] .'<br>';
        echo '<hr>';

       }

    ?>
</body>
</html>