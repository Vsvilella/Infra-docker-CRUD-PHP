<?php
require 'config.php';

$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($nome && $email){
    
    $sql = $pdo->prepare("SELECT * FROM clientes WHERE email = :email");
    $sql->bindValue(':email', $email);
    $sql->execute();

    if($sql->rowCount() === 0){

        $sql = $pdo->prepare("INSERT INTO clientes (nome, email) VALUES (:nome, :email)");
        $sql->bindvalue(':nome', $nome);
        $sql->bindvalue(':email', $email);
        $sql->execute();
        header("Location: index.php");
        exit;
    }else{
        header('location: cadastrar.php');
    }

}else{
    header('location: cadastrar.php');
    exit;
}


?>