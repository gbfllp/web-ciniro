<?php //echo 'Login: ' . $_POST['txtLogin'] . '<br>Senha: ' . $_POST['txtPassword'];
$sql = 'SELECT * FROM tb_usuario WHERE login_usuario = "' . $_POST['txtLogin'] . '" AND senha_usuario = "' . $_POST['txtPassword'] . '"';
require('conexao.php');
$tabela = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

if(mysqli_num_rows($tabela) == 1) {
    session_start();
    $_SESSION['login'] = $_POST['txtLogin'];
    header('location : menu.php');
} else {
    echo 'usuario invalido';
};