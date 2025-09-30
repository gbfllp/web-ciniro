<style>
    * {
    font-family: Arial, sans-serif;
    font-size: 18px;
}

</style>

<?php
$campo_escondido = $_POST['txtId'];
echo '<b>txtId:</b> ' . $campo_escondido;
echo '<br><b>txtCodigo:</b> ' . $_POST['txtCodigo'];
echo '<br><b>txtNome:</b> ' . $_POST['txtNome'];
echo '<br><b>txtSenha:</b> ' . $_POST['txtSenha'];
echo '<br><b>txtEmail:</b> ' . $_POST['txtEmail'];
echo '<br><b>txtWebsite:</b> ' . $_POST['txtWebsite'];
echo '<br><b>txtTelefone:</b> ' . $_POST['txtTelefone'];
echo '<br><b>txtCpf:</b> ' . $_POST['txtCpf'];
echo '<br><b>txtBusca:</b> ' . $_POST['txtBusca'];

?>