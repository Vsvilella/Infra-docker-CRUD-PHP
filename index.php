<?php
header('Content-Type: text/html; charset=utf-8');
require 'config.php';

$lista = [];

// // $sql = $pdo->query("SELECT * FROM clientes");
// if($sql->rowCount() > 0){
//     $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
// }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Site de Cadastro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
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
    <h1>Listagem de Usuários</h1>

    <table border="1">
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

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Rua</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>País</th>
            <th>Ações</th>
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
        <?php endforeach; ?>
    </table>

    <div class="btn-container">
        <a href="cadastrar.php">Cadastrar Usuários</a>
        <a href="cadastrarEndereco.php">Cadastrar Endereço</a>
    </div>
</body>
</html>
