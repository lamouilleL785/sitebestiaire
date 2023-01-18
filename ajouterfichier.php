<?php
if (isset($_FILES['fichier'])) {

    $nomFichierTemporaire = $_FILES['fichier']['tmp_name'];

    $date = new DateTime();
    $dateFormat = $date->format('Y-m-d-H-i-s');

    $nomFichierFinal =
        'media/' . $dateFormat . '-' . $_FILES['fichier']['name'];


    move_uploaded_file($nomFichierTemporaire, $nomFichierFinal);
};
?>

<form method="POST" enctype='multipart/form-data'>
    <input name="fichier" type="file">
    <input type='submit'>
</form>