<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Carteirinha</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css" />
    <script src="https://unpkg.com/imask"></script>
    <style>
        .preview-container {
            max-width: 500px;
            margin: 20px 0;
            display: none;
        }
        #preview {
            max-width: 100%;
            display: block;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.7);
        }
        .modal-content {
            background-color: white;
            margin: 5% auto;
            padding: 20px;
            width: 80%;
            max-width: 800px;
        }
    </style>
</head>
<body>
    <h1>Cadastro de Carteirinha de Estudante</h1>
    <form id="carteirinhaForm" action="gerar_carteirinha.php" method="POST" enctype="multipart/form-data">
        <div>
            <label for="nome">Nome Completo:</label><br>
            <input type="text" id="nome" name="nome" required style="width: 300px;" placeholder="Digite o nome completo">
        </div>
        <br>
        
        <div>
            <label for="data_nascimento">Data de Nascimento:</label><br>
            <input type="date" id="data_nascimento" name="data_nascimento" required 
                placeholder="DD/MM/AAAA">
        </div>
        <br>
        
        <div>
            <label for="rg">RG:</label><br>
            <input type="text" id="rg" name="rg" required placeholder="MG-00.000.000">
        </div>
        <br>
        
        <div>
            <label for="cpf">CPF:</label><br>
            <input type="text" id="cpf" name="cpf" required placeholder="000.000.000-00">
        </div>
        <br>
        
        <div>
            <label for="curso">Curso:</label><br>
            <input type="text" id="curso" name="curso" required style="width: 300px;" 
                placeholder="Digite o nome do curso">
        </div>
        <br>
        
        <div>
            <label for="matricula">Matrícula:</label><br>
            <input type="text" id="matricula" name="matricula" required 
                placeholder="Digite o número de matrícula">
        </div>
        <br>
        
        <div>
            <label for="validade">Validade:</label><br>
            <input type="month" id="validade" name="validade" required 
                placeholder="MM/AAAA">
        </div>
        <br>
        
        <div>
            <label for="foto">Foto (3x4):</label><br>
            <input type="file" id="foto" name="foto" accept="image/*" required>
            <div class="preview-container">
                <img id="preview" src="#" alt="Preview da imagem">
            </div>
        </div>
        <br>
        
        <input type="hidden" name="fotoRecortada" id="fotoRecortada">
        <button type="submit" id="submitBtn">Gerar Carteirinha</button>
    </form>

    <div id="cropperModal" class="modal">
        <div class="modal-content">
            <h2>Ajustar Foto</h2>
            <div style="height: 400px;">
                <img id="cropperImage" style="max-width: 100%;">
            </div>
            <br>
            <button id="concluirRecorte">Concluir Recorte</button>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
    <script>
        let cropper;
        const inputFoto = document.getElementById('foto');
        const preview = document.getElementById('preview');
        const modal = document.getElementById('cropperModal');
        const cropperImage = document.getElementById('cropperImage');
        const form = document.getElementById('carteirinhaForm');
        const fotoRecortada = document.getElementById('fotoRecortada');

        inputFoto.addEventListener('change', (event) => {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = () => {
                    cropperImage.src = reader.result;
                    modal.style.display = 'block';
                    
                    if(cropper) {
                        cropper.destroy();
                    }
                    
                    cropper = new Cropper(cropperImage, {
                        aspectRatio: 260/330,
                        viewMode: 2,
                        crop(event) {
                            console.log(event.detail);
                        }
                    });
                };
                reader.readAsDataURL(file);
            }
        });

        document.getElementById('concluirRecorte').addEventListener('click', () => {
            if(cropper) {
                const canvas = cropper.getCroppedCanvas({
                    width: 260,
                    height: 330
                });
                
                preview.src = canvas.toDataURL();
                preview.parentElement.style.display = 'block';
                fotoRecortada.value = canvas.toDataURL();
                modal.style.display = 'none';
            }
        });

        form.addEventListener('submit', function(e) {
            if (!fotoRecortada.value) {
                e.preventDefault();
                alert('Por favor, recorte a foto antes de enviar.');
            }
        });

        // Máscaras de formatação
        document.addEventListener('DOMContentLoaded', function() {
            // Máscara para CPF
            IMask(document.getElementById('cpf'), {
                mask: '000.000.000-00'
            });

            // Máscara para RG (formato MG-00.000.000)
            IMask(document.getElementById('rg'), {
                mask: 'AA-00.000.000',
                definitions: {
                    'A': /[A-Za-z]/
                }
            });

            // Máscara para matrícula (apenas números, máximo 20 dígitos)
            IMask(document.getElementById('matricula'), {
                mask: '00000000000000000000'
            });
        });
    </script>
</body>
</html>