<!-- <?php
require 'config.php';

$address = [];
$id = filter_input(INPUT_GET, 'id');
if($id){
    $sql = $pdo->prepare("SELECT * FROM trabalho.address WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() > 0){
        $address = $sql->fetch(PDO::FETCH_ASSOC);
    }else{
        header("Location: index.php");
        exit;
    }
}else{
    header("Location: index.php");
}

?> -->

<h1>Editar Endereço</h1>
<form method="POST" action="editarAddress_action.php">
    <input type="hidden" name="id" value="<?=$address['id'];?>"/>   
<label>
        rua: <input type="text" name="rua" value="<?=$address['rua'];?>"/>
    </label>
    <label>
        Bairro: <input type="text" name="bairro" value="<?=$address['bairro'];?>"/>
    </label>
    <label>
        Cidade: <input type="text" name="cidade" value="<?=$address['cidade'];?>"/>
    </label>
    <label>
        Estado: <input type="text" name="estado" value="<?=$address['estado'];?>"/>
    </label>
    <label>
        País: <input type="text" name="pais" value="<?=$address['pais'];?>"/>
    </label>
    <input type="submit" value = "Atualizar"/>
</form>