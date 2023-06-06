<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type= "text/css" href="estilo.css">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>
            <h1>Olá, 
                <?php 
					if(isset($_SESSION['nome_usuario']) == null) { ?>
						Visitante</h1>
						<a href="login.php">Login</a><br>
					<?php } else {
						echo $_SESSION['nome_usuario']; ?>
					</h1>
					<a href="cadastro.php">Cadastrar</a><br>
					<a href="listar.php">Listar Usuários</a><br>
					<a href="alterar.php">Alterar Senha</a><br>
					<a href="logout.php">Sair</a>
					<?php 
				} ?>
        </h1>
    </center>   
</body>
</html>