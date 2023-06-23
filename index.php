<?php
header('Content-Type: text/html; charset=utf-8');
require 'config.php';
$lista = [];
$sql = $pdo->query("SELECT * FROM clientes");
if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
$lista2 = [];
$sql = $pdo->query("SELECT * FROM address");
if($sql->rowCount() > 0){
    $lista2 = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Site de Cadastro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f2f2f2;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 4px;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table th, table td {
            padding: 10px;
            text-align: left;
        }
        table th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        a {
            text-decoration: none;
            margin-right: 10px;
        }
        .btn-container {
            margin-top: 20px;
        }
        .btn-container a {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Listagem de Usuários</h1>

        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Última Modificação</th>
                <th>Ações</th>
            </tr>
            <?php foreach($lista as $clientes): ?>
                <tr>
                    <td><?=$clientes['id'];?></td>
                    <td><?=$clientes['nome'];?></td>
                    <td><?=$clientes['email'];?></td>
                    <td><?=$clientes['last_modified'];?></td>

                    <td>
                        <a href="editar.php?id=<?=$clientes['id'];?>">[ Editar ]</a>
                        <a href="excluir.php?id=<?=$clientes['id'];?>">[ Excluir ]</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

        <hr><br><br>
        <h1>Endereço</h1>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Id Usuário</th>
                <th>Rua</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>País</th>
                <th>Ações</th>
            </tr>

            <?php foreach($lista2 as $address): ?>
                <tr>
                    <td><?=$address['id'];?></td>
                    <td><?=$address['id_user'];?></td>
                    <td><?=$address['rua'];?></td>
                    <td><?=$address['bairro'];?></td>
                    <td><?=$address['cidade'];?></td>
                    <td><?=$address['estado'];?></td>
                    <td><?=$address['pais'];?></td>

                    <td>
                        <a href="editarAddress.php?id=<?=$address['id'];?>">[ Editar ]</a>
                        <a href="excluirAddress.php?id=<?=$address['id'];?>">[ Excluir ]</a>
                    </td>    
                </tr>
            <?php endforeach; ?>
        </table>

        <div class="btn-container">
            <a href="cadastrar.php">Cadastrar Usuários</a>
            <a href="cadastrarEndereco.php">Cadastrar Endereço</a>
        </div>
    </div>
</body>
</html>
