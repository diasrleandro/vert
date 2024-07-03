<?php
define('HOST', 'vertidb');
define('USER', 'vert');
define('PASS', 'Contabilidade@de16');
define('BASE', 'adminvert1');

$conn = new mysqli(HOST, USER, PASS, BASE);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>