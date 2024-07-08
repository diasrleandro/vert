<?php
define('HOST', 'adminvert1.mysql.uhserver.com');
define('USER', 'vert');
define('PASS', 'Contabilid@de16');
define('BASE', 'adminvert1');

$conn = new mysqli(HOST, USER, PASS, BASE);
$conn->set_charset("utf8mb4");

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
