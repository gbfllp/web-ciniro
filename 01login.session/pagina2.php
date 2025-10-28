<?php
session_start();
if (isset($_SESSION['login'])) {
    $mensagem = 'Bem-vindo a pagina 2, ' . $_SESSION['login'] . '!<br><a href="logout.php">Sair</a>';
}
?>

<!DOCTYPE HTML>
<html>

<head>
</head>

<body>
    <h1>Página restrita</h1>
    <?php echo $mensagem; ?>
    <br><a href="pagina1.php">Menu 1</a><a href="pagina2.php">Menu 2</a><a href="pagina3.php">Menu 3</a>
</body>

</html>