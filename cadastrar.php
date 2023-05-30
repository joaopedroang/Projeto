<?php
include ('conexao.php');
$login = isset ($_POST ['login'])?$_POST['login']: '';
$senha = isset ($_POST ['senha'])?$_POST ['senha']: '';

$insert = "insert into login (nome, login, senha) values
nome='$nome2', login='$login2' and senha='$senha2'";
$query = mysqli_query ($conexao, $insert);
$dados = mysqli_fetch_row ($query);

?> 