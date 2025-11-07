<!DOCTYPE html>
<html>

<head>
    <title>Login - Sistema</title>
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['login'])) {
        echo 'Logado! <a href="menu.php">Ir ao menu</a> ou <a href="logout.php">sair</a>';
    } else {
        echo '
            <h3>Tela de login</h3>
            <form action="login.php" method="POST">
                Login: <input type="text" name="txtLogin" id="txtLogin"><br>
                Senha: <input type="password" name="txtPassword" id="txtPassword"><br>
                <input type="submit" name="btnEnviar">
            </form>
            ';
    }
    ;
    ?>
</body>

</html>