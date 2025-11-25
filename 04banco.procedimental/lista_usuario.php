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
                    <marquee direction="up" style="transform:rotate(-5deg)"><img style="width:100%;height:60px;"
                            src="imagens/quit.webp"></img></marquee>
                </a>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <table border=1 style="height:200px;width:100%">
                    <tr style="width:150px;vertical-align:top;">
                        <td>
                            <?php if ($dados_usuario[4] == 1) {
                                echo '<b>Administrador</b><br><a href="novo_usuario.php">Novo usuário</a><br><a href="lista_usuario.php">Gerenciar usuários</a>';
                            } else {
                                echo '<b>Usuário</b><br>Você não tem acesso!';
                            } ?>
                        </td>
                        <td style="width:100%;vertical-align:middle;text-align:center;">
                            <table style="height:400px;">
                                <tr>
                                    <td style="width:150px;vertical-align:top;text-align:left;">
                                        <div>
                                            <h2>Lista de usuários</h2>
                                            <table class="w3-table-all">
                                                <thead>
                                                    <tr class="w3-red">
                                                        <th>Foto</th>
                                                        <th>Nome</th>
                                                        <th>Login</th>
                                                        <th>Perfil</th>
                                                        <th>
                                                            <center>Alterar</center>
                                                        </th>
                                                        <th>
                                                            <center>Excluir</center>
                                                        </th>
                                                    </tr>
                                                </thead>

                                                <?php
                                                require('conexao.php');
                                                $sql = 'SELECT * FROM tb_usuario WHERE id_usuario != ' . $dados_usuario[0] . ';';
                                                $tabela = mysqli_query($conexao, $sql);

                                                while ($linha = mysqli_fetch_row($tabela)) {
                                                    $cod_perfil = $linha[4];
                                                    $sql = 'SELECT nome_perfil FROM tb_perfil WHERE id_perfil =' . $cod_perfil . ';';
                                                    $tabela_perfil = mysqli_query($conexao, $sql);

                                                    $nome_perfil = '';
                                                    while ($linha_perfil = mysqli_fetch_row($tabela_perfil)) {
                                                        $nome_perfil = $linha_perfil[0];
                                                    }
                                                    echo '<tr>
                                                            <td>
                                                                <img style="height:150px;" src="imagens/' . $linha[2] . '.jpg">
                                                            </td>
                                                            <td>' . $linha[1] . '</td>
                                                            <td>' . $linha[2] . '</td>
                                                            <td>' . $nome_perfil . '</td>
                                                            <td><a href="altera_usuario.php?codigo=' . $linha[0] . '" style="font-size:60px;text-decoration: none;">✏️</a></td>
                                                            <td><a href="exclui_usuario.php?codigo=' . $linha[0] . '" style="font-size:60px;text-decoration: none;">❌</a></td>
                                                    </tr>';
                                                }
                                                ?>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                            </table>
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