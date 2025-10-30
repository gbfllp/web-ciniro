<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$codigo = $_GET['codigo'];

$conexao = mysqli_connect('127.0.0.1','root','','bd_teste');
if (!$conexao) {
    die('Erro de conexão: ' . mysqli_connect_error());
}

$sql = 'DELETE FROM tb_pessoa WHERE id = ' . $codigo . ';';

$resultado = mysqli_query($conexao, $sql);
if($resultado) {
    echo 'Exclusão realizada';
} else {
    echo 'Erro ao excluir: ' . mysqli_error($conexao);
}

mysqli_close($conexao);

echo '<br><a href="menu.php">Voltar</a>';
?>