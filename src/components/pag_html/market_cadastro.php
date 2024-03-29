<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GO</title>
    <link rel="stylesheet" href="/src/components/css/style_login_cadastro.css">
</head>
<body>
    <h1>Seja bem vindo, faça seu cadastro!</h1>
    <form action="../php/inserir_user.php" method="post">
        <div>
            <label for="name_user">
                <p>Digite o seu nome:</p>
                <input type="text" name="name_nuser" id="name_iuser" required>
            </label>
            <label for="email_user">
                <p>Digite seu email:</p>
                <input type="email" name="email_nuser" id="email_iuser" required>
            </label>
            <label for="senha_user">
                <p>Digite a sua senha:</p>
                <input type="password" name="senha_nuser" id="senha_iuser" maxlength="8" required>
            </label>
            <label for="telefone_user">
                <p>Digite seu telefone:</p>
                <input type="tel" name="telefone_nuser" id="telefone_iuser" maxlength="11">
            </label>
            <label for="escolha_user">
                <p></p>
                <input type="radio" name="escolha_user" id="empresa" value="A">Empresa
                <input type="radio" name="escolha_user" id="cliente" value="C">Cliente
            </label>
            <label for="php_db">
            <p></p>
            <input type="submit" value="Cadastrar">
            </label>
        </div>
    </form>
</body>
</html>