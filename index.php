<?php
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
                <a href="excluir.php?<?=$clientes['id'];?>">[ Excluir ]</a>
            </td>

        </tr>
    
    <?php endforeach; ?>


</table>

<a href="cadastrar.php"> Cadastrar Usuários </a>