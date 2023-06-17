<?php
require 'config.php';
$id = filter_input(INPUT_POST, 'id');
$rua = filter_input(INPUT_POST, 'rua');
$bairro = filter_input(INPUT_POST, 'bairro');
$cidade = filter_input(INPUT_POST, 'cidade');
$estado = filter_input(INPUT_POST, 'estado');
$pais = filter_input(INPUT_POST, 'pais');



if($id && $rua && $bairro && $cidade && $estado && $pais){
    $sql = $pdo->prepare("UPDATE trabalho.address SET rua = :rua, bairro = :bairro, cidade = :cidade, estado = :estado, pais = :pais WHERE id = :id LIMIT 1");
    $sql->bindValue(':rua', $rua);
    $sql->bindValue(':bairro', $bairro);
    $sql->bindValue(':cidade', $cidade);
    $sql->bindValue(':estado', $estado);
    $sql->bindValue(':pais', $pais);
    $sql->bindValue(':id', $id);
    
    $sql->execute();
    header("Location: index.php");
    exit;
}else{
    header("Location: index.php");
    exit;
}