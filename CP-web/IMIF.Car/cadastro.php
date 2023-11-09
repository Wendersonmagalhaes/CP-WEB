<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$db_name = "db_carros";


$conexao = new mysqli($servidor, $usuario, $senha, $db_name);


if ($conexao->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conexao->connect_error);
}

if (isset($_POST['submit'])) {
    $modelo = $_POST['modelo'];
    $marca = $_POST['marca'];
    $ano = $_POST['ano'];
    $placa = $_POST['placa'];
    $status = $_POST['status'];
    $preco_diaria = $_POST['preco_diaria'];
    
    $sql = "INSERT INTO carros (modelo, marca, ano, placa, status, preco_diaria) VALUES ('$modelo', '$marca', '$ano', '$placa', '$status', '$preco_diaria')";

    if ($conexao->query($sql) === true) {
        echo "Cadastro efetuado com sucesso!";
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
            background-color: #f4f4f4;
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
            width: 50%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        select {
            height: 40px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <h1>Cadastro de Carros</h1>
    <form method="POST" action="cadastro.php">
        <input type="text" name="modelo" placeholder="Modelo">
        <input type="text" name "marca" placeholder="Marca">
        <input type="text" name="ano" placeholder="Ano">
        <input type="text" name="placa" placeholder="Placa">
        <input type="text" name="status" placeholder="Status">
        <input type="text" name="preco_diaria" placeholder="Preço da Diária">
        <input type="submit" name="submit" value="Cadastrar Carro">
    </form>
</body>
</html>

