<?php
include ("conexao.php");
$login = isset ($_POST ['login']) ? $_POST['login'] : '';
$nome= isset ($_POST ['nome']) ? $_POST ['nome'] : '';

$delet="DELETE FROM login WHERE nome = '$nome'";
$query= mysqli_query ($conexao, $delet);
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
    <section>
        <center>
            <h2>Usuário deletado!</h2>
            <a href="index.php">Voltar</a>
        </center>
    </section>
</body>
</html>