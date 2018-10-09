<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'projeto_db';

$link = mysqli_connect($host, $user, $password, $database) or die("Falha na conexão com o Banco de Dados.");

mysqli_select_db($link, $database);
