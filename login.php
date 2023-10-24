<?php
    $usuario = 'root';
    $senha = 'Fil@202810';
    $database = 'biblioteca';
    $host =  'localhost';

    $mysqli = new mysqli($host, $usuario, $senha, $database);

    if ($mysqli->error) {
        die("falha".$mysqli->error);
    }