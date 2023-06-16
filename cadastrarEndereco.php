<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Endereço</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: #333;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"] {
            padding: 5px;
            width: 200px;
        }
        input[type="submit"], button {
            padding: 5px 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }
        input[type="submit"]:hover, button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Cadastro de Endereço</h1>
    <form method="POST" action="cadastrar_action.php">
        <label>
            Rua: <input type="text" name="rua" required>
        </label>
        
        <label>
            Bairro: <input type="text" name="bairro" required>
        </label>
        
        <label>
            Cidade: <input type="text" name="cidade" required>
        </label>
        
        <label>
            Estado: <input type="text" name="estado" required>
        </label>

        <label>
            Curso: <input type="text" name="curso" required>
        </label>

        <label>
            ID Usuário: <input type="text" name="idUser" required>
        </label>

        <input type="submit" value="Salvar">
    </form>

    <a href="index.php"><button>Voltar</button></a>
</body>
</html>
