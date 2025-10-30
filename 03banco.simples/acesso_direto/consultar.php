<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$conexao = mysqli_connect('127.0.0.1','root','','bd_teste');
if (!$conexao) {
    die('Erro de conexão: ' . mysqli_connect_error());
}

$sql = 'SELECT * FROM tb_pessoa;';

$tabela = mysqli_query($conexao, $sql) or die('Erro na consulta: ' . mysqli_error($conexao) . '<br><a href="menu.php">Voltar</a>');

if(mysqli_num_rows($tabela) > 0) {
    echo 'Existem ' . mysqli_num_rows($tabela) . ' pessoas no banco:<br><br>';
    while($linha = mysqli_fetch_row($tabela)) {
        echo 'ID: ' . $linha[0] . '<br>Nome: ' . $linha[1] . '<br>Idade: ' . $linha[2] . '<hr>';
    }
} else {
    echo 'Nenhum registro encontrado';
}

mysqli_close($conexao);

echo '<br><a href="menu.php">Voltar</a>';
?>