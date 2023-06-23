<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Usuário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            flex-direction: column;
            background-color: #f1f1f1;
            position: relative;
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
        input[type="text"], input[type="email"] {
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
        .top-bar,
        .bottom-bar {
            position: absolute;
            left: 0;
            right: 0;
            height: 40px;
            background-color: #008B8B;
        }
        .top-bar {
            top: 0;
        }
        .bottom-bar {
            bottom: 0;
        }
    </style>
</head>
<body>
    <div class="top-bar"></div>
    <h1>Cadastro de Usuário</h1>
    <form method="POST" action="cadastrar_action.php">
        <label>
            Nome: <input type="text" name="nome" required>
        </label>
        
        <label>
            E-mail: <input type="email" name="email" required>
        </label>
        
        <input type="submit" value="Salvar">
    </form>
    <div class="bottom-bar"></div>
    <a href="index.php"><button>Voltar</button></a>
</body>
</html>
