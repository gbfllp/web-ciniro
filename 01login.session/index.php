<?php
session_start();
if (isset($_SESSION['erro'])) {
    $mensagem = 'Login ou senha incorreto';
    $mensagem .= '<br>Login:
            <input type="text" name="txtLogin" />
            <br>Senha:
            <input type="password" name="txtSenha" />
            <br>
            <input type="submit" name="btnEnviar" />';
    session_destroy();
} else if (isset($_SESSION['locked'])) {
    $mensagem = 'A página que você acessou está bloqueada';
    $mensagem .= '<br>Login:
            <input type="text" name="txtLogin" />
            <br>Senha:
            <input type="password" name="txtSenha" />
            <br>
            <input type="submit" name="btnEnviar" />';
    session_destroy();
} else if (isset($_SESSION['login'])) {
    $mensagem = 'Login já realizado';
    $mensagem .= '<br><a href="pagina1.php">Menu 1</a><a href="pagina2.php">Menu 2</a><a href="pagina3.php">Menu 3</a>';
} else {
    $mensagem = 'Login:
            <input type="text" name="txtLogin" />
            <br>Senha:
            <input type="password" name="txtSenha" />
            <br>
            <input type="submit" name="btnEnviar" />';
}
?>

<!DOCTYPE html>
<html>

<head>
    <style>
        /* Estilização do corpo da página */
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            background-color: #f0f2f5;
            display: flex;
            /* Habilita o Flexbox */
            justify-content: center;
            /* Centraliza horizontalmente */
            align-items: center;
            /* Centraliza verticalmente */
            height: 100vh;
            /* Ocupa a altura inteira da tela */
            margin: 0;
            color: #333;
        }

        /* Estilização do formulário (o container branco) */
        form {
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 380px;
            box-sizing: border-box;
            text-align: center;
            font-size: 1.1em;
            line-height: 1.8;
        }

        /* Estilização dos campos de texto e senha */
        form input[type="text"],
        form input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            /* Espaço acima do input */
            margin-bottom: 8px;
            /* Espaço abaixo do input */
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            /* Importante para o padding não estourar a largura */
            font-size: 1em;
        }

        /* Estilização do botão de envio */
        form input[type="submit"] {
            width: 100%;
            padding: 12px;
            margin-top: 15px;
            /* Mais espaço antes do botão */
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            font-weight: bold;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        form input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Estilização dos links para quando o usuário está logado */
        form a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            margin: 0 15px;
            /* Espaçamento entre os links */
            transition: color 0.2s;
        }

        form a:hover {
            color: #0056b3;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <form action="login.php" method="post">
        <?php echo $mensagem; ?>
    </form>
</body>

</html>