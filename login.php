<?php
    $usuario = 'root';
    $senha = '';
    $database = 'productsoftware';
    $host =  'localhost';

    $mysqli = new mysqli($host, $usuario, $senha, $database);

    if ($mysqli->error) {
        die("falha".$mysqli->error);
    }