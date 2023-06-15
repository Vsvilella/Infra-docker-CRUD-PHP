<?php
header('Content-Type: text/html; charset=utf-8');
require 'config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM clientes");
if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>


<h1>Listagem de Usuários</h1>

<table border = "1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    <?php foreach($lista as $clientes): ?>
        <tr>
            <td><?=$clientes['id'];?></td>
            <td><?=$clientes['nome'];?></td>
            <td><?=$clientes['email'];?></td>
            <td>
                <a href="editar.php?id=<?=$clientes['id'];?>">[ Editar ]</a>
                <a href="excluir.php?id=<?=$clientes['id'];?>">[ Excluir ]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<hr><br><br>
<h1>Endereço</h1>

<table border = "1">
        <tr>
            <th>ID</th>
            <th>Rua</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>País</th>
        </tr>

        <?php foreach($lista as $adress): ?>
            <tr>
                <td><?=$adress['id'];?></td>
                <td><?=$adress['Rua'];?></td>
                <td><?=$adress['Bairro'];?></td>
                <td><?=$adress['Cidade'];?></td>
                <td><?=$adress['Estado'];?></td>
                <td><?=$adress['País'];?></td>

            <td>
                <a href="editar.php?id=<?=$adress['id'];?>">[ Editar ]</a>
                <a href="editar.php?id=<?=$adress['id'];?>">[ Editar ]</a>
            </td>    
            
            </tr>
</table>

<a href="cadastrar.php"> Cadastrar Usuários </a>
<a href="cadastrarEndereco.php"> Cadastrar Endereço </a>