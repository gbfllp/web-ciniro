<?php
// Recebe os dados do formulário
$nome = $_POST['nome'] ?? '';
$data_nascimento = $_POST['data_nascimento'] ?? '';
$rg = $_POST['rg'] ?? '';
$cpf = $_POST['cpf'] ?? '';
$curso = $_POST['curso'] ?? '';
$matricula = $_POST['matricula'] ?? '';
$validade = $_POST['validade'] ?? '';

// Processa a foto
$foto_base64 = '';
$foto_type = 'image/png';
if (isset($_POST['fotoRecortada']) && !empty($_POST['fotoRecortada'])) {
    // Remove o cabeçalho da string base64 (data:image/png;base64,)
    $foto_base64 = explode(',', $_POST['fotoRecortada'])[1];
}

// Formata a data de nascimento
$data_formatada = date('d/m/Y', strtotime($data_nascimento));

// Formata a validade
$validade_formatada = date('F/Y', strtotime($validade . '-01'));
$meses_pt = [
    'January' => 'Janeiro', 'February' => 'Fevereiro', 'March' => 'Março',
    'April' => 'Abril', 'May' => 'Maio', 'June' => 'Junho',
    'July' => 'Julho', 'August' => 'Agosto', 'September' => 'Setembro',
    'October' => 'Outubro', 'November' => 'Novembro', 'December' => 'Dezembro'
];
foreach ($meses_pt as $en => $pt) {
    $validade_formatada = str_replace($en, $pt, $validade_formatada);
}

// Gera código de barras simples (simulação)
$codigo_barras = str_pad($matricula, 20, '0', STR_PAD_LEFT);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carteirinha de Estudante</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #8b8b7a;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .carteirinha-container {
            background-color: white;
            width: 956px;
            height: 540px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            display: flex;
            position: relative;
            overflow: hidden;
        }

        .conteudo {
            width: 636px;
            padding: 30px 40px;
            display: flex;
            flex-direction: column;
        }

        .logo-instituicao {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            margin-bottom: 35px;
        }

        .logo {
            width: 100px;
            height: 100px;
            border-radius: 8px;
            object-fit: contain;
        }

        .info-instituicao {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .titulo-instituto {
            font-size: 32px;
            font-weight: bold;
            color: #5a5a5a;
            letter-spacing: 1px;
            margin-bottom: 2px;
        }

        .subtitulo {
            font-size: 20px;
            color: #9a9a9a;
            font-weight: 300;
        }

        .dados-aluno {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .nome-aluno {
            font-size: 28px;
            font-weight: bold;
            color: #4a4a4a;
            margin-bottom: 8px;
        }

        .info-linha {
            font-size: 16px;
            color: #6a6a6a;
            line-height: 1.6;
        }

        .info-linha strong {
            font-weight: 600;
        }

        .barcode-container {
            margin-top: auto;
            padding-top: 20px;
        }

        .barcode {
            width: 100%;
            height: 60px;
            background: repeating-linear-gradient(
                90deg,
                #000 0px,
                #000 2px,
                #fff 2px,
                #fff 4px,
                #000 4px,
                #000 6px,
                #fff 6px,
                #fff 7px,
                #000 7px,
                #000 10px,
                #fff 10px,
                #fff 11px,
                #000 11px,
                #000 12px,
                #fff 12px,
                #fff 14px
            );
            background-size: 100px 100%;
        }

        .foto-container {
            width: 320px;
            background: linear-gradient(180deg, #66BB6A 0%, #4CAF50 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            padding: 30px;
        }

        .foto-frame {
            width: 260px;
            height: 330px;
            background-color: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .foto-frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .foto-placeholder {
            color: #999;
            font-size: 14px;
            text-align: center;
            padding: 20px;
        }

        .acoes {
            position: fixed;
            top: 20px;
            right: 20px;
            display: flex;
            gap: 10px;
        }

        button {
            padding: 12px 24px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }

        button.voltar {
            background-color: #757575;
        }

        button.voltar:hover {
            background-color: #616161;
        }

        @media print {
            body {
                background-color: white;
            }
            
            .acoes {
                display: none;
            }
            
            .carteirinha-container {
                box-shadow: none;
            }
        }
    </style>
</head>
<body>
    <div class="acoes">
        <button class="voltar" onclick="window.history.back()">← Voltar</button>
        <button onclick="window.print()">🖨️ Imprimir</button>
    </div>

    <div class="carteirinha-container">
        <div class="conteudo">
            <div class="logo-instituicao">
                <img src="logo.png" alt="Logo da Instituição" class="logo">
                <div class="info-instituicao">
                    <div class="titulo-instituto">INSTITUTO FEDERAL</div>
                    <div class="subtitulo">Minas Gerais</div>
                    <div class="subtitulo">Campus Bambuí</div>
                </div>
            </div>

            <div class="dados-aluno">
                <div class="nome-aluno"><?php echo htmlspecialchars($nome); ?></div>
                
                <div class="info-linha">
                    <strong>Data de nascimento:</strong> <?php echo $data_formatada; ?>
                </div>
                
                <div class="info-linha">
                    <strong>RG:</strong> <?php echo htmlspecialchars($rg); ?> - 
                    <strong>CPF:</strong> <?php echo htmlspecialchars($cpf); ?>
                </div>
                
                <div class="info-linha">
                    <strong><?php echo htmlspecialchars($curso); ?></strong>
                </div>
                
                <div class="info-linha">
                    <strong>Matrícula:</strong> <?php echo htmlspecialchars($matricula); ?> - 
                    <strong>Validade:</strong> <?php echo $validade_formatada; ?>
                </div>
            </div>

            <div class="barcode-container">
                <div class="barcode"></div>
            </div>
        </div>

        <div class="foto-container">
            <div class="foto-frame">
                <?php if ($foto_base64): ?>
                    <img src="data:<?php echo $foto_type; ?>;base64,<?php echo $foto_base64; ?>" alt="Foto do estudante">
                <?php else: ?>
                    <div class="foto-placeholder">Foto 3x4<br>260x330px</div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <script>
        // Adiciona formatação automática ao CPF no formulário anterior se necessário
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Carteirinha gerada com sucesso!');
        });
    </script>
</body>
</html>