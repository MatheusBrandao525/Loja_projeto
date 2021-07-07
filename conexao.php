<?php
    $servidor ="Localhost";
    $usuario ="MatheusB";
    $senha ="matheus525";
    $banco ="db_loja1";

    $cn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
?>