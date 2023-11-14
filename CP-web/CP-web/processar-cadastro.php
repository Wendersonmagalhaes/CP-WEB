<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$db_name = "db_carros";

$conn = new mysqli($servidor, $usuario, $senha, $db_name);

if ($conexao->connect_error) {
    echo("Falha na conexão com o banco de dados: " . $conexao->connect_error);
}

$modelo = $_POST['modelo'];   
$marca = $_POST['marca'];
$ano = $_POST['ano'];
$placa = $_POST['placa'];
$status = $_POST['status'];
$preco_diaria = $_POST['preco_diaria'];

$sql = "INSERT INTO carros (modelo, marca, ano, placa, status, preco_diaria) VALUES ('$modelo', '$marca',
 $ano, '$placa', '$status', $preco_diaria)";

if ($conexao->query($sql) === TRUE) {
    echo "Carro cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar o carro: " . $conexao->error;
}

$conexao->close();
?>