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
        @import url('https://fonts.googleapis.com/css2?family=Anton&display=swap');

        body {
            font-family: 'Anton', sans-serif;
            position: relative;
            overflow: hidden;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }

        /* Fundo animado e responsivo */
        body::before {
            content: "";
            position: absolute;
            width: 100vw;
            /* maior que a tela pra cobrir durante rotação */
            height: 100vh;
            transform: translate(-50%, -50%);
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('./img/glima.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            transform-origin: center center;
            animation: rotateBG 10s linear infinite, pulseBG 0.5s ease-in-out infinite;
            z-index: -1;
        }

        @keyframes rotateBG {
            0% {
                transform: translate(-50%, -50%) rotate(0deg) scale(1.1);
            }

            100% {
                transform: translate(-50%, -50%) rotate(360deg) scale(1.1);
            }
        }

        @keyframes pulseBG {

            0%,
            100% {
                filter: brightness(100%);
                transform: scale(1);

            }

            50% {
                filter: brightness(130%);
                transform: scale(1.1);
            }
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1.1);
            }

            50% {
                transform: scale(1);
            }
        }

        form {
            background-color: rgba(0, 0, 0, 0.75);
            padding: 30px 40px;
            border-radius: 10px;
            border: 2px solid #ffd700;
            box-shadow: 0 0 25px rgba(255, 215, 0, 0.5);
            width: 100%;
            max-width: 400px;
            box-sizing: border-box;
            text-align: center;
            font-size: 1.2em;
            line-height: 2;
            text-transform: uppercase;
            letter-spacing: 1px;
            z-index: 1;
        }

        form div {
            animate: pulse 0.5s ease-in-out infinite;
        }

        form input[type="text"],
        form input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            margin-bottom: 8px;
            border: 1px solid #ffd700;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 1em;
            background-color: #222;
            color: #fff;
            font-family: Arial, sans-serif;
        }

        form input[type="submit"] {
            width: 100%;
            padding: 12px;
            margin-top: 15px;
            border: none;
            border-radius: 5px;
            background-color: #ffd700;
            color: #000;
            font-weight: bold;
            font-family: 'Anton', sans-serif;
            font-size: 1.1em;
            text-transform: uppercase;
            letter-spacing: 2px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        form input[type="submit"]:hover {
            background-color: #e6c300;
            transform: scale(1.02);
            box-shadow: 0 0 15px rgba(255, 215, 0, 0.8);
        }

        form a {
            text-decoration: none;
            color: #ffd700;
            font-weight: bold;
            margin: 0 15px;
            transition: color 0.2s;
            display: inline-block;
            padding: 10px;
            border: 1px solid #ffd700;
            border-radius: 5px;
            margin-top: 10px;
        }

        form a:hover {
            color: #000;
            background-color: #ffd700;
        }

        #musica-embaixador {
            display: none;
        }
    </style>
</head>

<body>

    <audio id="musica-embaixador" src="music/tche.mp3" loop></audio>

    <script>
        const audio = document.getElementById('musica-embaixador');
        document.addEventListener('click', () => {
            audio.play().catch(err => console.log('Autoplay bloqueado:', err));
        }, { once: true });
    </script>
    <form action="login.php" method="post">
        <div>
            <?php echo $mensagem; ?>
        </div>
    </form>
</body>

</html>