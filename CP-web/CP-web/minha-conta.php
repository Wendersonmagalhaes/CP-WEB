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

        header {
            background-color: #333;
            padding: 20px;
            text-align: center;
        }

        h1 {
            margin: 0;
        }

        section {
            width: 40%;
            margin: 20px auto;
            background-color: #444;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #555;
            border-radius: 5px;
            box-sizing: border-box;
            background-color: #333;
            color: #fff;
            outline: none;
        }

        select {
            height: 40px;
        }

        input[type="submit"] {
            background-color: #777;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>

<body>
    <header>
        <h1>Minha Conta</h1>
    </header>

    <section>
        <form method="POST" action="atualizar_conta.php">
            <label for="nome">Nome Completo:</label>
            <input type="text" name="nome" placeholder="Seu Nome" required>

            <label for="email">E-mail:</label>
            <input type="text" name="email" placeholder="Seu E-mail" required>

            <label for="senha">Senha:</label>
            <input type="password" name="senha" placeholder="Sua Senha" required>

            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" placeholder="Seu Telefone" required>

            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco" placeholder="Seu Endereço" required>

            <input type="submit" name="submit" value="confirmar">
        </form>
    </section>
</body>

</html>
