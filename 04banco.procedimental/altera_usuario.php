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
$sql = 'SELECT * FROM tb_usuario WHERE id_usuario = ' . $codigo . ';';
$tabela = mysqli_query($conexao, $sql);
$linha = mysqli_fetch_row($tabela);

$nome = '';
$login = '';
$senha = '';
$perfil = '';

if (mysqli_num_rows($tabela) > 0) {
    $nome = $linha[1];
    $login = $linha[2];
    $senha = $linha[3];
    $perfil = $linha[4];
}

?>

<html>

<style>
    table {
        width: 100%;
    }

    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 5px;
        text-align: left;
    }

    table#t01 tr:nth-child(even) {
        background-color: #eee;
    }

    table#t01 tr:nth-child(odd) {
        background-color: #fff;
    }

    table#t01 th {
        background-color: black;
        color: white;
    }
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>
    <table border=1>
        <tr>
            <td style="height: 50px;" colspan="2">
                <h1>Menu do sistema</h1>
            </td>
        </tr>
        <tr>
            <td style="height: 50px;">
                <img style="height:50px" src="imagens/<?= $dados_usuario['nome_usuario'] ?>.jpg"></img>
                <br>
                Seja bem-vindo, <?= $dados_usuario['nome_usuario'] ?>!
            </td>
            <td>
                <a style="display:block, width:100%, height:100%" href="logout.php">
                    <marquee direction="up"><img style="width:60px;" src="imagens/quit.webp"></img></marquee>
                </a>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <table border="2px" style="height:200px;width:100%">
                    <tr style="width:150px;vertical-align:top;">
                        <td>
                            <?php if ($dados_usuario[4] == 1) {
                                echo '<b>Administrador</b><br><a href="novo_usuario.php">Novo usuário</a><br><a href="lista_usuario.php">Gerenciar usuários</a>';
                            } else {
                                echo '<b>Usuário</b><br>Você não tem acesso!';
                            } ?>
                        </td>
                        <td style="width:100%;vertical-align:top;text-align:left;">
                            <form method="POST" action="salva_alteracao_usuario.php" enctype="multipart/form-data">
                                <input type="hidden" name="hddCodigo" id="hddCodigo" value="<?= $codigo ?>" />
                                <table>
                                    <tr>
                                        <th>
                                            Alterar usuário
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>
                                            Nome:
                                        </td>
                                        <td>
                                            <input type="text" name="txtNome" id="txtNome" value="<?= $nome ?>" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Login:
                                        </td>
                                        <td>
                                            <input readonly type="text" name="txtLogin" id="txtLogin" value="<?= $login ?>" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Senha:
                                        </td>
                                        <td>
                                            <input type="password" name="txtSenha" id="txtSenha" value="<?= $senha ?>" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Perfil:
                                        </td>
                                        <td>
                                            <select name="slcPerfil" id="slcPerfil" value="<?= $perfil ?>">
                                                <?php
                                                require('conexao.php');
                                                $sql = 'SELECT * FROM tb_perfil;';
                                                $tabela = mysqli_query($conexao, $sql);
                                                while ($linha = mysqli_fetch_row($tabela)) {
                                                    if ($linha[0] == $perfil) {
                                                        echo '<option value="' . $linha[0] . '"selected>' . $linha[1] . '</option>';
                                                    } else {
                                                        echo '<option value="' . $linha[0] . '">' . $linha[1] . '</option>';
                                                    };
                                                }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Foto:
                                        </td>
                                        <td>
                                            <img style="height:150px;" src="imagens/<?= $login ?>.jpg"><br>
                                            <input type="file" name="txtArquivo" id="txtArquivo" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="right">
                                            <button type="reset" name="btnApagar" id="btnApagar">Apagar</button>
                                            <button type="submit" name="btnSalvar" id="btnSalvar">Salvar</button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="height:50px;">
                Rodapé
            </td>
        </tr>
    </table>
</body>

</html>