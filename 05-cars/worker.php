<?php  //echo $_POST["brand"]; 
    // echo $_POST["model"];
    // echo $_POST["price"];
    // echo $_POST["picture"]

    $brand = null;
    $model = null;
    $price = null;
    $picture = null;
    $errors = null;
    //On vérifie que le formulaire a été soumis
if ('POST' === $_SERVER['REQUEST_METHOD']) {
    // On récupère les champs du formulaire
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $price = intval($_POST['price']);
    $picture = $_POST['picture'];


    // On prépare le tableau avec les erreurs
    $errors = [];

    // On vérifie le champ brand
    if (strlen($brand) < 2) {
        $errors['brand'] = 'Erreur brand';
        // echo 'Erreur brand';
    }

    // On vérifie le champ model
    if (strlen($model) < 2) {
        $errors['model'] = 'Erreur model';
        // echo 'Erreur model';
    }

    // On vérifie le champ model
     if (!is_numeric($price) < 2) {
        $errors['price'] = 'Erreur price';
        // echo 'Erreur model';
     }

    // On vérifie le champ model
    if (strlen($picture) < 2) {
        $errors['picture'] = 'Erreur picture';
        // echo 'Erreur model';
    }

}



?> 
