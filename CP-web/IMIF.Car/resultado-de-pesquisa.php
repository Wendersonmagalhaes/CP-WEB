<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultados da Pesquisa</title>
</head>
<body>
    <h1>Resultados da Pesquisa</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $db_name = "db_carros";
        $conexao = new mysqli($servidor, $usuario, $senha, $db_name);

        if ($conexao->connect_error) {
            echo("Falha na conexão com o banco de dados: " . $conexao->connect_error);
        }
        $modelo = $_POST["modelo"];

        $sql = "SELECT * FROM carros WHERE modelo LIKE '%$modelo%'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>Modelo</th>";
            echo "<th>Marca</th>";
            echo "<th>Ano</th>";
            echo "<th>Placa</th>";
            echo "<th>Status</th>";
            echo "<th>Preço da Diária</th>";
            echo "</tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['modelo'] . "</td>";
                echo "<td>" . $row['marca'] . "</td>";
                echo "<td>" . $row['ano'] . "</td>";
                echo "<td>" . $row['placa'] . "</td>";
                echo "<td>" . $row['status'] . "</td>";
                echo "<td>R$" . $row['preco_diaria'] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "Nenhum carro encontrado com o modelo '$modelo'.";
        }
        $conexao->close();
    }
    ?>
</body>
</html>
