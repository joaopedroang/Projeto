<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>
            Olá,
            <?php
                if(isset($_SESSION['nome'])==null) {
            ?>
                visitante <br>
            <a href="login.php"> Login</a>
            <?php
            } else {
                echo $_SESSION['nome'];
            } ?><br>
            <a href = 'cadastro.php'> Cadastro</a><br>
            <a href = 'logout.php'> Sair</a>
        </h1>
    </div>   
</body>
</html>
</body>
</html>