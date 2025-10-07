<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculadora do Amor</title>
</head>

<?php
if (isset($_POST['txtNome1']) && isset($_POST['txtNome2'])): ?>

    <?php
    $p1 = $_POST['txtNome1']; // vai retornar o tamanho da string
    $p2 = $_POST['txtNome2'];

    $dict = [
        'A' => 1,
        'B' => 2,
        'C' => 3,
        'D' => 4,
        'E' => 5,
        'F' => 6,
        'G' => 7,
        'H' => 8,
        'I' => 9,
        'J' => 10,
        'K' => 11,
        'L' => 12,
        'M' => 13,
        'N' => 14,
        'O' => 15,
        'P' => 16,
        'Q' => 17,
        'R' => 18,
        'S' => 19,
        'T' => 20,
        'U' => 21,
        'V' => 22,
        'W' => 23,
        'X' => 24,
        'Y' => 25,
        'Z' => 26
    ];

    $p1Chars = str_split($p1);
    $p2Chars = str_split($p2);
    $value = 0;

    foreach ($p1Chars as $char) {
        $value += $dict[strtoupper($char)];
    }
    foreach ($p2Chars as $char) {
        $value += $dict[strtoupper($char)];
    }
    while ($value > 100) {
        $value = $value / 2;
    }

    ?>

    <body>
        <div>
            <span>Suas chances são de <?= $value ?>%!</span>
        </div>
    </body>

<?php endif; ?>

</html>