<?php
$conexao = mysqli_connect ('localhost', 'root', '', 'projeto_a3', '3306');

if (!$conexao) {
    die ('Sistemas em manutenção');
}
?>