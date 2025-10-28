<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css" />
    <style>
        #preview {
            max-width: 100%;
            display: block;
            margin: 10px auto;
        }
    </style>
</head>

<body>
    <h2>Carregar e recortar imagem</h2>
    <input type="file" id="txtCaminhoImagem" accept="image/*">
    <div style="height:50vh;">
        <img id="preview" style="display:none;"><br>
    </div>
    <button id="btnUpload" style="display:none;">Upload</button>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
<script>
    let cropper;
    const txtCaminhoImagem = document.getElementById('txtCaminhoImagem');
    const preview = document.getElementById('preview');
    const btnUpload = document.getElementById('btnUpload');

    txtCaminhoImagem.addEventListener('change', (event) => {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = () => {
                preview.src = reader.result;
                preview.style.display = 'block';
                if(cropper) {
                    cropper.destroy();
                }
                cropper = new Cropper(preview, {
                    aspectRatio: 1,
                    viewMode: 2
                });
                btnUpload.style.display = 'inline';
            };
            reader.readAsDataURL(file);
        }
    });
    btnUpload.addEventListener('click', () => {
        if(cropper) {
            cropper.getCroppedCanvas().toBlob((blob) => {
                const formData = new FormData();
                formData.append('imgRecorte', blob, 'imgRecorte.png');
                fetch('upload.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if(data.redirectUrl) {
                        window.location.href = data.redirectUrl;
                    } else {
                        alert('Erro: ' + data.error || 'Erro desconhecido.');
                    }
                })
                .catch(error => {
                    console.error('Erro: ', error);
                });
            });
        }
    });
</script>

</html>