<?php
session_start();
if (!isset($_SESSION['login'])) {
    $_SESSION['locked'] = 'Acesso bloqueado';
    header('location: index.php');
}
?>

<!DOCTYPE HTML>
<html>

<head>

</head>

<body>
    <h1>Página restrita</h1>
    <br><a href="pagina1.php">Menu 1</a><a href="pagina2.php">Menu 2</a><a href="pagina3.php">Menu 3</a>
</body>

</html>