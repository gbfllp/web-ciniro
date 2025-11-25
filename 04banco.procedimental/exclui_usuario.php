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

$codigo = $_GET['codigo'];

require('conexao.php');

// 1. Buscar dados do usuário a ser excluído (Login e Perfil)
$sql = "SELECT login_usuario, id_perfil FROM tb_usuario WHERE id_usuario = $codigo";
$tabela = mysqli_query($conexao, $sql);

if (mysqli_num_rows($tabela) > 0) {
    $usuario_alvo = mysqli_fetch_array($tabela);
    $login_alvo = $usuario_alvo['login_usuario'];
    $perfil_alvo = $usuario_alvo['id_perfil'];

    // 2. Verificar se é o último admin
    $pode_excluir = true;
    if ($perfil_alvo == 1) { // Se for admin
        $sql_admin = "SELECT COUNT(*) as total_admins FROM tb_usuario WHERE id_perfil = 1";
        $res_admin = mysqli_query($conexao, $sql_admin);
        $row_admin = mysqli_fetch_array($res_admin);
        
        if ($row_admin['total_admins'] <= 1) {
            $pode_excluir = false;
            echo 'Erro: Não é possível excluir o último administrador do sistema.<br><a href="lista_usuario.php">Voltar</a>';
        }
    }

    // 3. Excluir se permitido
    if ($pode_excluir) {
        $sql_delete = "DELETE FROM tb_usuario WHERE id_usuario = $codigo";
        $resultado = mysqli_query($conexao, $sql_delete);

        if ($resultado) {
            // 4. Apagar a imagem
            $caminho_imagem = 'imagens/' . $login_alvo . '.jpg';
            if (file_exists($caminho_imagem)) {
                unlink($caminho_imagem);
            }
            header('location: lista_usuario.php');
        } else {
            echo 'Erro ao apagar usuário no banco de dados.<br><a href="lista_usuario.php">Voltar</a>';
        }
    }

} else {
    echo 'Usuário não encontrado!<br><a href="lista_usuario.php">Voltar</a>';
}
?>