<?php

$pdo = new PDO("mysql:dbname=trabalho;host:localhost:3306", "root", "");

$sql = $pdo->query('SELECT * FROM clientes');

$dados = $sql->fetchAll(pdo::FETCH_ASSOC);

echo'<pre>';
print_r($dados);