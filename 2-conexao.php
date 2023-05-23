<?php
$conexao = mysqli_connect ('localhost', 'root', '', 'banco_a3', '3306');

if(!$conexao) {
    die ('Banco de dados em manutenção');
}
?>