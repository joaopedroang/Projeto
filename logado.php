<?php
include ('conexao.php');
$login = isset ($_POST ['login'])?$_POST['login']: '';
$senha = isset ($_POST ['senha'])?$_POST ['senha']: '';

$select = "select nome, login, senha from login where login = '$login' and senha = '$senha'";
$query = mysqli_query ($conexao, $select);
$dados = mysqli_fetch_row ($query);

if ($login==$dados[1] && $senha==$dados[2]) {
    echo "Conectado";
} else {
    echo "Dados inválidos";
}
?>