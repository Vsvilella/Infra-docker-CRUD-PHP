<?php
require 'config.php';

$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');

$sql = $pdo->prepare("INSERT INTO clientes (nome, email) VALUES (:nome, :email)");

$sql->bindvalue(':nome', $nome);
$sql->bindvalue(':email', $email);
$sql->execute();

header("Location: index.php");

?>