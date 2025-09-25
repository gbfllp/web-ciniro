<!DOCTYPE html>
<html lang="pt-br">

<!-- 
    HTML ENTITIES
    ~ tilde
    ç cedil
    ´ acute
    ^ circ
-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aula 0 - Controles HTML</title>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
    <h1 style="text-align:center;">Demonstra&ccedil;&atilde;o de controles HTML para funcion&aacute;rios</h1>
    <table border="1">
        <tr>
            <td colspan="2" class="secao-titulo">
                FORMUL&aacute;RIO DE CADASTRO COMPLETO
            </td>
        </tr>
        <tr>
            <td colspan="2" class="subsecao-titulo">
                Campos de Texto B&aacute;sicos
            </td>
        </tr>
        <tr>
            <td width="30%">
                C&oacute;digo do cliente:
            </td>
            <td>
                <input type="text" name="txtCodigo" value="CLI-2024-001" readonly/> <small class="tip">(Campo somente leitura)</small>
            </td>
        </tr>
        <form name="frmCadastro" id="frmCadastro" action="processa.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="hddIdSessao" id="hddIdSessao" value="ABC123XYZ" />
        </form>
    </table>

    <!-- JS -->
    <script src="js/script.js"></script>
</body>

</html>