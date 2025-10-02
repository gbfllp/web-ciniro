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
        <form name="frmCadastro" id="frmCadastro" action="processa.php" method="POST" enctype="multipart/form-data">
            <tr>
                <td colspan="2" class="secao-titulo">
                    FORMUL&Aacute;RIO DE CADASTRO COMPLETO
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
                    <input type="text" name="txtCodigo" value="CLI-2024-001" readonly /> <small class="tip">(Campo
                        somente
                        leitura)</small>
                </td>
            </tr>
            <tr>
                <td>
                    Nome completo:
                </td>
                <td>
                    <input type="text" name="txtNome" id="txtNome" placeholder="Nome" size="40" maxlength="100" required
                        value="Nome qualquer" /><small class="tip">(Máximo 100 caracteres)</small>
                </td>
            </tr>
            <tr>
                <td>
                    Senha:
                </td>
                <td>
                    <input type="password" name="txtSenha" id="txtSenha" placeholder="Senha" size="18" minlength="6"
                        maxlength="32" required value="Senha qualquer" /><small class="tip">(Entre 6 e 32
                        caracteres)</small>
                </td>
            </tr>
            <tr>
                <td>
                    Desabilitado
                </td>
                <td>
                    <input type="text" name="txtDesabilitado" id="txtDesabilitado" value="Campo desabilitado" size="30"
                        disabled />
                </td>
            </tr>
            <tr>
                <td colspan="2" class="subsecao-titulo">
                    Campos HTML5 com Valida&ccedil;&atilde;o Autom&aacute;tica
                </td>
            </tr>
            <tr>
                <td>
                    E-mail:
                </td>
                <td>
                    <input type="email" name="txtEmail" id="txtEmail" placeholder="usuario@exemplo.com" required
                        value="email@qualquer" />
                </td>
            </tr>
            <tr>
                <td>
                    Website:
                </td>
                <td>
                    <input type="url" name="txtWebsite" id="txtWebsite" placeholder="site.com" required
                        value="http://site.qualquer/" />
                </td>
            </tr>
            <tr>
                <td>
                    Telefone:
                </td>
                <td>
                    <input type="tel" name="txtTelefone" id="txtTelefone" placeholder="(11) 1234-5678"
                        pattern="\([0-9]{2}\) [0-9]{5}-[0-9]{4}" required value="(11) 11111-1111" />
                </td>
            </tr>
            <tr>
                <td>
                    CPF:
                </td>
                <td>
                    <input type="text" name="txtCpf" id="txtCpf" placeholder="123.456.789-00"
                        pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}" required value="123.456.789-00" />
                </td>
            </tr>
            <tr>
                <td>
                    Busca:
                </td>
                <td>
                    <input type="search" name="txtBusca" id="txtBusca" placeholder="Pesquisar..." required
                        value="Qualquer coisa" />
                </td>
            </tr>
            <input type="hidden" name="txtId" id="txtId" value="ABC123XYZ" />
            <tr>
                <td colspan="2" class="subsecao-titulo">
                    Campos Num&eacute;ricos e de intervalo
                </td>
            </tr>
            <tr>
                <td>
                    Idade:
                </td>
                <td>
                    <input type="number" name="txtIdade" id="txtIdade" min="1" max="120" step="1" value="20"
                        oninput="atualizaOutIdade()" />
                    <output id="outIdade">20</output> anos
                </td>
            </tr>
            <tr>
                <td>
                    Satisfação:
                </td>
                <td>
                    <input type="range" name="rngSatisfacao" id="rngSatisfacao" min="0" max="10" value="5"
                        oninput="atualizaOutSatisfacao()" />
                    <output id="outSatisfacao">5</output>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="subsecao-titulo">
                    Campos de Data e Hora
                </td>
            </tr>
            <tr>
                <td>
                    Data de nascimento:
                </td>
                <td>
                    <input type="date" name="txtDataNascimento" id="txtDataNascimento" min="1900-01-01" max="2025-10-01" value="2000-01-01" />
                </td>
            </tr>
            <tr>
                <td>
                    Horário:
                </td>
                <td>
                    <input type="time" name="txtHorario" id="txtHorario" min="00:00" max="23:59" value="12:00" />
                </td>
            </tr>
            <tr>
                <td>
                    Data e hora:
                </td>
                <td>
                    <input type="datetime-local" name="txtDataHora" id="txtDataHora" min="1900-01-01T00:00" max="2025-10-01T23:59" value="2000-01-01T12:00" />
                </td>
            </tr>
            <tr>
                <td>
                    Mês:
                </td>
                <td>
                    <input type="month" name="txtMes" id="txtMes" min="1900-01" max="2025-10" value="2000-01" />
                </td>
            </tr>
            <tr>
                <td>
                    Semana:
                </td>
                <td>
                    <input type="week" name="txtSemana" id="txtSemana" min="1900-W01" max="2025-W52" value="2000-W01" />
                </td>
            </tr>
            <tr>
                <td colspan="2" class="subsecao-titulo">
                    Campos de Sele&ccedil;&atilde;o e Escolha
                </td>
            </tr>
            <tr>
                <td>
                    Cor:
                </td>
                <td>
                    <input type="color" name="txtCor" id="txtCor" value="#000000" />
                </td>
            </tr>
            <tr>
                <td>
                    Foto:
                </td>
                <td>
                    <input type="file" name="fleFoto" id="fleFoto" accept="image/*" />
                </td>
            </tr>

            <tr>
                <td colspan=2 align="right">
                    <input type="submit" id="btnEnviar" name="btnEnviar" />
                </td>
            </tr>
        </form>
    </table>

    <table border=1 style="text-align: center; margin-top: 20px;">
        <tr>
            <td colspan="6" class="subsecao-titulo">
                BÔNUS: Equalizador
            </td>
        </tr>
        <tr>
            <td width="12%">
                AGUDO
            </td>
            <td width="12%">
                AGUDO-MÉDIO
            </td>
            <td width="12%">
                MÉDIO
            </td>
            <td width="12%">
                MÉDIO-GRAVE
            </td>
            <td width="12%">
                GRAVE
            </td>
            <td width="40%">
                GERAL
            </td>
        </tr>
        <tr>
            <td>
                <input type="range" name="rngAgudo" id="rngAgudo" min="1" max="5" value="3" class="range-vertical" />
            </td>
            <td>
                <input type="range" name="rngMedioAgudo" id="rngMedioAgudo" min="1" max="5" value="3"
                    class="range-vertical" />
            </td>
            <td>
                <input type="range" name="rngMedio" id="rngMedio" min="1" max="5" value="3" class="range-vertical" />
            </td>
            <td>
                <input type="range" name="rngMedioGrave" id="rngMedioGrave" min="1" max="5" value="3"
                    class="range-vertical" />
            </td>
            <td>
                <input type="range" name="rngGrave" id="rngGrave" min="1" max="5" value="3" class="range-vertical" />
            </td>
            <td>
                <input type="range" name="rngGeral" id="rngGeral" min="1" max="5" value="3" class="range-vertical"
                    oninput="atualizaRngEq()" />
            </td>
        </tr>
    </table>

    <!-- JS -->
    <script src="js/script.js"></script>
</body>

</html>