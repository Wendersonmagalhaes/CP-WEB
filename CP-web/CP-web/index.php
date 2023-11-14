<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$db_name = "db_carros";

$conexao = new mysqli($servidor, $usuario, $senha, $db_name);

if ($conexao->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conexao->connect_error);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
	
    <title>imif.car</title>
</head>
<style>
</style>
<body>
    <header>
        <img link="background.jpg
    " alt="imif.car Logo">
        <nav>
            <a href="minha-conta.php">minha conta</a>
            <a href="cadastro.php">Cadastro</a>
            <a href="login.php">login</a>
            <a href="#quem-somos">Quem Somos</a>
        </nav>
    </header>
    <div class="section" id="pagina-inicial">
        <h2>Carros Disponíveis para Exposição</h2>

        <?php
$sql = "SELECT modelo, marca, ano, placa, preco_diaria FROM carros";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='car-info'>";
        echo "<p><strong>Modelo:</strong> " . $row['modelo'] . "</p>";
        echo "<p><strong>Marca:</strong> " . $row['marca'] . "</p>";
        echo "<p><strong>Ano:</strong> " . $row['ano'] . "</p>";
        echo "<p><strong>Placa:</strong> " . $row['placa'] . "</p>";
        echo "<p><strong>Preço da Diária:</strong> $" . $row['preco_diaria'] . "</p>";

        // Adiciona um botão de aluguel de carro
        echo "<button onclick='alugarCarro(\"" . $row['modelo'] . "\", \"" . $row['placa'] . "\")'>Alugar Carro</button>";

        echo "</div>";
    }
} else {
    echo "<p>Nenhum carro disponível para exposição no momento.</p>";
}

        ?>

    </div>
    <div class="section" id="quem-somos" style="color: #000;">
        <h2>Quem Somos</h2>
        <p></p>
</div>
</body>
</html>
