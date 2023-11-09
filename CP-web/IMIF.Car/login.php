<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Novo Projeto 1.2</title>
<style>
    body {
        font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
        background-color: #f2f2f2;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    form {
        font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
        background-color: white;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        text-align: center;
    }

    form div {
        display: flex;
        flex-direction: column;
        margin-bottom: 20px;
    }

    form input,
    form textarea {
        outline: none;
        padding: 10px;
        min-width: 300px;
        border: 2px solid black;
        border-radius: 20px;
    }

    form input:focus,
    form textarea:focus {
        background-color: wheat;
    }

    form input[type=submit] {
        background-color: black;
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
