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
if (isset($_FILES['fleFoto'])) {
    echo '<br><br><b>Imagem:</b>';
    echo '<br><b>Nome da foto:</b> ' . $_FILES['fleFoto']['name'];
    echo '<br><b>Tipo MIME:</b> ' . htmlspecialchars($_FILES['fleFoto']['type']);
    echo '<br><b>Tamanho:</b> ' . number_format($_FILES['fleFoto']['size'] / 1024, 2) . 'KB';
    echo '<br><b>Arquivo temporário:</b> ' . htmlspecialchars($_FILES['fleFoto']['tmp_name']);
    $extensoes_img = array('jpg', 'jpeg', 'png', 'gif', 'webp');
    $ext_fle = strtolower(pathinfo($_FILES['fleFoto']['name'], PATHINFO_EXTENSION));
    if (in_array($ext_fle, $extensoes_img)) {
        echo '<br><b>Arquivo de imagem válido</b>';
    }
}

?>