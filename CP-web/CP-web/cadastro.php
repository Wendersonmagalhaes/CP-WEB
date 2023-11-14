<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$db_name = "db_carros";

$conexao = new mysqli($servidor, $usuario, $senha, $db_name);


if ($conexao->connect_error) {
    echo("Falha na conexão com o banco de dados: " . $conexao->connect_error);
}

if (isset($_POST['submit'])) {
    $modelo = $_POST['modelo'];
    $marca = $_POST['marca'];
    $ano = $_POST['ano'];
    $placa = $_POST['placa'];
    $status = $_POST['status'];
    $preco_diaria = $_POST['preco_diaria'];

    $sql = "INSERT INTO carros (modelo, marca, ano, placa, status, preco_diaria) 
            VALUES ('$modelo', '$marca', '$ano', '$placa', '$status', '$preco_diaria')";

    if ($conexao->query($sql) === true) {
        echo "Cadastro efetuado com sucesso!";
        // Adiciona o redirecionamento após o cadastro bem-sucedido
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
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1c1c1c;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            background-color: #333;
            color: #fff;
            padding: 20px;
        }

        form {
            width: 40%;
            margin: 20px auto;
            background-color: #333;
            padding: 20px;
            border: 1px solid #555;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
            color: #fff;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #555;
            border-radius: 5px;
            box-sizing: border-box;
            background-color: #1c1c1c;
            color: #fff;
        }

        select {
            height: 40px;
        }

        input[type="submit"] {
            background-color: #555;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #777;
        }
    </style>
</head>

<body>
    <h1>Cadastro de Carros</h1>
    <form method="POST" action="cadastro.php">
        <label for="modelo">Modelo:</label>
        <input type="text" name="modelo" placeholder="Insira o Modelo" required>

        <label for="marca">Marca:</label>
        <input type="text" name="marca" placeholder="Insira a Marca" required>

        <label for="ano">Ano:</label>
        <input type="text" name="ano" placeholder="Insira o Ano" required>

        <label for="placa">Placa:</label>
        <input type="text" name="placa" placeholder="Insira a Placa" required>

        <label for="status">Status:</label>
        <input type="text" name="status" placeholder="Insira o Status" required>

        <label for="preco_diaria">Preço da Diária:</label>
        <input type="text" name="preco_diaria" placeholder="Insira o Preço da Diária" required>

        <input type="submit" name="submit" value="Cadastrar Carro">
    </form>
</body>

</html>
