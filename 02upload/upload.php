<?php
$upload_dir = 'img/';

if (isset($_FILES['imgRecorte'])) {
    $file = $_FILES['imgRecorte'];

    $fileName = uniqid('img_', true) . 'png';
    $filePath = $upload_dir . $fileName;

    if(!is_dir($upload_dir)) mkdir($upload_dir,0755, true);

    move_uploaded_file($file['tmp_name'], $filePath);
}
?>
