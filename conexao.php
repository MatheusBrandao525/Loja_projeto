<?php
    $servidor ="Localhost";
    $usuario ="root";
    $senha ="matheus525";
    $banco ="db_talisma";

    $cn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
?>