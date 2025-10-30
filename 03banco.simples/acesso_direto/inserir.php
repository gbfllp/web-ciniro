<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

/*
Neste caso, usaremos o driver mysqli.
Se algum dia for necessário, procurar fontes odbc no Windows
Este é um gerenciador de drivers para conexão de banco exclusivo
de computadores Windows. Dar preferência para 64 bits
*/

$conexao = mysqli_connect('127.0.0.1','root','','bd_teste');
if (!$conexao) {
    die('Erro de conexão: ' . mysqli_connect_error());
}

$sql = 'INSERT INTO tb_pessoa (nome, idade) VALUES ("0",0);';

$resultado = mysqli_query($conexao, $sql);
if($resultado) {
    echo 'Registro inserido';
} else {
    echo 'Erro ao inserir: ' . mysqli_error($conexao);
}

mysqli_close($conexao);

echo '<br><a href="menu.php">Voltar</a>';
?>