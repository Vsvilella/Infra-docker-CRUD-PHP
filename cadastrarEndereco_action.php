<?php
require 'config.php';

$id_user = filter_input(INPUT_POST, 'id_user');
$rua = filter_input(INPUT_POST, 'rua');
$bairro = filter_input(INPUT_POST, 'bairro');
$cidade = filter_input(INPUT_POST, 'cidade');
$estado = filter_input(INPUT_POST, 'estado');
$pais = filter_input(INPUT_POST, 'pais');




if($rua && $bairro && $cidade && $estado && $pais && $id_user){
    
    $sql = $pdo->prepare("SELECT * FROM trabalho.address WHERE rua = :rua");
    $sql->bindValue(':rua', $rua);
    $sql->execute();

    if($sql->rowCount() === 0){

        $sql = $pdo->prepare("INSERT INTO address (rua, id_user, bairro, cidade, estado, pais) VALUES (:rua, :id_user, :bairro, :cidade, :estado, :pais)");
        $sql->bindvalue(':rua', $rua);
        $sql->bindvalue(':id_user', $id_user);
        $sql->bindvalue(':bairro', $bairro);
        $sql->bindvalue(':cidade', $cidade);
        $sql->bindvalue(':estado', $estado);
        $sql->bindvalue(':pais', $pais);
        $sql->execute();
        header("Location: index.php");
        exit;
    }else{
        header('location: cadastrarEndereco.php');

    }

}else{
    header('location: cadastrarEndereco.php');
    exit;
}