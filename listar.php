<?php
include ("conexao.php");
$login= $login = isset ($_POST ['login']) ? $_POST['login'] : '';
$senha= isset ($_POST ['senha']) ? $_POST ['senha'] : '';

$select="SELECT nome, login FROM login";
$query= mysqli_query ($conexao, $select);
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
        
    </center>
</body>
</html>