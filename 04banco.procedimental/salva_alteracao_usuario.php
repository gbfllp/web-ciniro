<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('location: index.php');
} else {
    require('conexao.php');
    $sql = 'SELECT * FROM tb_usuario WHERE login_usuario = "' . $_SESSION['login'] . '";';
    $tabela = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    $dados_usuario = mysqli_fetch_array($tabela);
}
if ($dados_usuario[4] != 1) {
    header('location: menu.php');
}

$codigo = $_POST['hddCodigo'];
$nome = $_POST['txtNome'];
$senha = $_POST['txtSenha'];
$perfil = $_POST['slcPerfil'];
$foto = $_FILES['txtArquivo'];

require('conexao.php');
$sql = "UPDATE tb_usuario SET nome_usuario = '$nome', senha_usuario = '$senha', id_perfil = $perfil WHERE id_usuario = $codigo";

$resultado = mysqli_query($conexao, $sql);

if ($resultado) {
    if ($foto['name'] != '') {
        $caminho_imagem = 'imagens/' . $codigo . '.jpg';
        if (file_exists($caminho_imagem)) {
            unlink($caminho_imagem);
        }
        move_uploaded_file($foto['tmp_name'], $caminho_imagem);
    }
    header('location: lista_usuario.php');
} else {
    echo 'Erro ao atualizar usuário no banco de dados.<br><a href="lista_usuario.php">Voltar</a>';
}

?>