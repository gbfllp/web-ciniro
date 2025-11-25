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

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th, td {
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
                            <?php if($dados_usuario[4] == 1) {
                                echo '<b>Administrador</b><br><a href="novo_usuario.php">Novo usuário</a><br><a href="lista_usuario.php">Gerenciar usuários</a>';
                            } else {
                                echo '<b>Usuário</b><br>Você não tem acesso!';
                            }?>
                        </td>
                        <td style="width:100%;vertical-align:middle;text-align:center;">
                            Nenhum cadastro selecionado
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