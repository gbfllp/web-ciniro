<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculadora do Amor</title>
    <style>
        /* Made with Gemini */
        @import url('https://fonts.googleapis.com/css2?family=Pacifico&family=Press+Start+2P&display=swap');

        body {
            background: linear-gradient(135deg, #ff69b4, #ff1493, #ffb6c1, #ffc0cb);
            animation: girarCores 10s infinite linear;
            font-family: 'Comic Sans MS', cursive, sans-serif;
            color: white;
            text-align: center;
            padding: 50px;
            height: 100%;
        }

        @keyframes girarCores {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        h1 {
            font-family: 'Pacifico', cursive;
            font-size: 60px;
            color: hotpink;
            text-shadow: 3px 3px 5px red, 0 0 20px magenta;
            animation: brilho 2s infinite alternate;
        }

        @keyframes brilho {
            from {
                text-shadow: 0 0 5px red;
            }

            to {
                text-shadow: 0 0 30px fuchsia, 0 0 10px red;
            }
        }

        form {
            background-color: rgba(255, 182, 193, 0.8);
            border: 5px dashed magenta;
            border-radius: 30px;
            padding: 30px;
            width: 400px;
            margin: 0 auto;
            box-shadow: 0 0 30px pink, inset 0 0 15px hotpink;
            animation: pulsar 3s infinite ease-in-out;
        }

        @keyframes pulsar {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }
        }

        input[type="text"] {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 3px solid hotpink;
            border-radius: 20px;
            background: #fff0f5;
            font-size: 18px;
            color: deeppink;
            text-align: center;
            box-shadow: inset 0 0 10px pink;
        }

        input[type="submit"] {
            background: linear-gradient(45deg, deeppink, hotpink, violet);
            color: white;
            font-size: 20px;
            border: none;
            padding: 15px 30px;
            border-radius: 30px;
            cursor: pointer;
            font-family: 'Pacifico', cursive;
            text-shadow: 1px 1px 2px red;
            animation: treme 0.2s infinite alternate;
        }

        @keyframes treme {
            0% {
                transform: rotate(-1deg);
            }

            100% {
                transform: rotate(1deg);
            }
        }

        span {
            font-size: 18px;
            color: fuchsia;
            text-shadow: 1px 1px 2px red;
        }

        /* Corações voando */
        body::before {
            content: "💖 💘 💞 💕 💗 💓 💝";
            font-size: 40px;
            position: fixed;
            top: 10px;
            left: 50%;
            transform: translateX(-50%);
            animation: coracoes 4s infinite linear;
            pointer-events: none;
        }

        @keyframes coracoes {
            0% {
                transform: translateX(-50%) translateY(-60px);
                opacity: 1;
            }

            25% {
                opacity: 1;
            }

            100% {
                transform: translateX(-50%) translateY(100px);
                opacity: 0;
            }
        }
    </style>

</head>

<body>
    <h1>Calculadora do Amor &hearts;</h1>
    <form action="calcula.php" method="post">
        <span>Nome completo: </span><input type="text" name="txtNome1" id="txtNome1" placeholder="Maria do Carmo" />
        <br>
        <span>Nome completo: </span><input type="text" name="txtNome2" id="txtNome2" placeholder="Antônio João" />
        <br>
        <input type="submit" value="Calcular chances" />
    </form>
</body>

</html>