<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body>
    <section>
        <center>
        <h1>
            <form id="login" action="cadastrar.php" method="POST">
                Nome: <input type="text" name="nome" required><br> 
                Login: <input type="text" name="login" required><br>
                Senha: <input type="password" name = "senha" required><br>
                <input type = "submit" name = "cadastrar" value = "Cadastrar"><br>
                <a href="index.php">Voltar</a>
            </form>
        </h1>
        </center>
    </section>
</body>
</html>