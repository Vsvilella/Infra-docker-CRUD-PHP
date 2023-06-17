<?php
require 'config.php';

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


if($id && $nome && $email){
    $sql = $pdo->prepare("UPDATE clientes SET nome = :nome, email = :email WHERE id = :id LIMIT 1");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':id', $id);
    $sql->execute();
    header("Location: index.php");
    exit;
}else{
    header("Location: index.php");
    exit;
}