<?php
session_start();
if ($_POST['txtLogin'] == 'admin' && $_POST['txtSenha'] == '123') {
    $_SESSION['login'] = $_POST['txtLogin'];
    header('location: pagina1.php');
} else {
    $_SESSION['erro'] = '';
    header('location: index.php');
}
;