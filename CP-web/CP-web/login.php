<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$db_name = "usuarios";

$conexao = new mysqli($servidor, $usuario, $senha, $db_name);

if ($conexao->connect_error) {
    echo ("Falha na conexão com o banco de dados: " . $conexao->connect_error);
}


if (isset($_POST['submit'])) {
    $nome  = $_POST['nome'];
    $data_nascimento = $_POST['Data de nascimento'];
    $telefone= $_POST['telefone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $sql = "INSERT INTO usuarios (nome, Data de nascimento, telefone, email, senha) VALUES ('$nome', 
    '$data_nascimento', '$telefone', '$email', '$senha')";

    if ($conexao->query($sql) === true) {
        echo "Cadastro efetuado com sucesso!";
        header("Location: index.php");
        exit();
    } else {
        echo "Erro ao cadastrar o carro: " . $conexao->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Cadastro</title>
    <style>
        body {
            font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
            background-color: #1c1c1c;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
            background-color: #333;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.2);
            text-align: center;
        }

        form div {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        form label {
            color: #fff;
        }

        form input,
        form textarea {
            outline: none;
            padding: 10px;
            min-width: 300px;
            border: 2px solid #fff;
            border-radius: 20px;
            color: #333;
            background-color: #fff;
        }

        form input:focus,
        form textarea:focus {
            background-color: #eee;
        }

        form button {
            background-color: #000;
            color: white;
            cursor: pointer;
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
        }
    </style>
</head>

<body>
    <form>
        <h1>Cadastro</h1>
        <div>
            <label>Nome Completo</label>
            <input type="text" name="nome">
        </div>
        <div>
            <label>Data de Nascimento</label>
            <input type="date" name="data_nascimento">
        </div>
        <div>
            <label>Telefone</label>
            <input type="tel" name="telefone">
        </div>
        <div>
            <label>E-mail</label>
            <input type="email" name="email">
        </div>
        <div>
            <label>Senha</label>
            <input type="password" name="senha">
        </div>
        <div>
            <button type="submit">Cadastrar</button>
        </div>
    </form>
</body>

</html>
