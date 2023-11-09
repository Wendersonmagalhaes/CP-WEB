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
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
	
    <title>imif.car</title>
</head>
<style> body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
}

header img {
    height: 50px;
    width: auto;
    margin-right: 10px;
}

nav {
    text-align: right;
    background-color: #444;
    padding: 10px;
}

nav a {
    color: #fff;
    text-decoration: none;
    margin: 0 20px;
}

nav a:hover {
    text-decoration: underline;
}

.search {
    display: flex;
    align-items: center;
}

.search input[type="text"] {
    padding: 5px;
    border: none;
    border-radius: 4px;
}

.search button {
    background-color: #444;
    color: #fff;
    border: none;
    border-radius: 4px;
    padding: 5px 10px;
    margin-left: 10px;
    cursor: pointer;
}

.section {
    padding: 20px;
    text-align: center;
}

.section h2 {
    text-align: center;
}</style>
<body>
    <header>
        <img link="https://www.bing.com/images/search?view=detailV2&ccid=TlGJ8sEG&id=9D5E7F757DC9D7342CAA725418D13476B79D1A8C&thid=OIP.TlGJ8sEGXVhJ9rBFIsWlyQHaHa&mediaurl=https%3a%2f%2fs3-sa-east-1.amazonaws.com%2fprojetos-artes%2ffullsize%252f2011%252f03%252f30%252f07%252fWDL-Logo-2729_5335_034943572_2026373380.jpg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.4e5189f2c1065d5849f6b04522c5a5c9%3frik%3djBqdt3Y00RhUcg%26pid%3dImgRaw%26r%3d0&exph=500&expw=500&q=logo+para+aluguel+de+automoveis&simid=608045624570244897&FORM=IRPRST&ck=646497C7A44CAF37F9875BBBA98EEA66&selectedIndex=7" alt="imif.car Logo">
        <nav>
            <a href="cadastro.php">Cadastro</a>
            <a href="veiculos-disponiveis.php">login</a>
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
        echo "<p>Modelo: " . $row['modelo'] . "<br>";
        echo "Marca: " . $row['marca'] . "<br>";
        echo "Ano: " . $row['ano'] . "<br>";
        echo "Placa: " . $row['placa'] . "<br>";
        echo "Preço da Diária: $" . $row['preco_diaria'] . "</p>";
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
