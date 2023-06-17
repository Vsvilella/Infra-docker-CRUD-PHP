<?php
require 'config.php';

$id = filter_input(INPUT_GET, 'id');

if($id){
    $sql = $pdo->prepare("DELETE FROM address where id = :id LIMIT 1");
    $sql->bindValue(':id', $id);
    $sql->execute();
}

header("Location: index.php");

?>