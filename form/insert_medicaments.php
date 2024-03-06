<?php

function formatLocalFilePath($path)
{
    // La fonction str_replace est utilisée pour remplacer tous les '/' dans l'URL par DIRECTORY_SEPARATOR
    // DIRECTORY_SEPARATOR est une constante pré-définie en PHP qui contient le caractère correct pour séparer les répertoires sur le système d'exploitation actuel.
    // (par exemple, Windows utilise '\' tandis que Linux utilise '/').
    $formattedPath = str_replace('/', DIRECTORY_SEPARATOR, $path);

    return $formattedPath;
}

// La fonction uploadImageFile, upload les fichiers images dans un répertoire uniquement avec les extensions alloués.
function uploadImageFile($inputName, $destinationPath)
{
    // Vérifie si la méthode de la requête est POST et si un fichier a été uploadé sans erreur
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES[$inputName]) && $_FILES[$inputName]['error'] === UPLOAD_ERR_OK) {

        // $_FILES est une variable superglobale en PHP qui contient les informations des fichiers uploadés
        // $_FILES[$inputName]['tmp_name'] contient le chemin temporaire où le fichier uploadé est stocké sur le serveur
        // https://www.php.net/manual/fr/reserved.variables.files
        $fileTmpPath = $_FILES[$inputName]['tmp_name'];

        // $_FILES[$inputName]['name'] contient le nom original du fichier (tel qu'il était sur l'ordinateur de l'utilisateur)
        $fileName = $_FILES[$inputName]['name'];

        // Récupère l'extension du fichier et la convertit en minuscule
        // pathinfo est une fonction intégrée à PHP pour obtenir des informations sur le fichier
        // La constante PATHINFO_EXTENSION sert à obtenir l'extension du fichier
        // https://www.php.net/manual/fr/function.pathinfo.php
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        // Nettoie le nom du fichier, le convertit en minuscule et limite le nombre de caractères à 50
        // La constante PATHINFO_EXTENSIOn sert à obtenir le nom du fichier
        $cleanFileName = str_replace([' ', '_'], '-', pathinfo($fileName, PATHINFO_FILENAME));
        $charLimitFileName = strtolower(substr($cleanFileName, 0, 50));

        // Crée le nouveau nom du fichier et ajoute la date et l'heure
        $newFileName = $charLimitFileName . '-' . date("YmdHis") . '.' . $fileExtension;

        // Extensions de fichiers autorisées
        $allowedExtensions = ['jpg', 'jpeg', 'gif', 'webp', 'png', 'svg'];

        // Vérifie si l'extension de fichier est dans la liste des extensions autorisées
        if (in_array($fileExtension, $allowedExtensions, true)) {
            // Si c'est le cas, on prépare le chemin de destination pour uploader le fichier.
            // On utilise la fonction formatLocalFilePath pour s'assurer que le chemin est correctement formaté pour le système d'exploitation actuel.
            // On ajoute le nouveau nom du fichier à ce chemin.
            $destPath = $destinationPath . $newFileName;

            // On tente de déplacer le fichier uploadé vers le répertoire de destination
            // La fonction move_upload_file vérifie la validité du fichier en s'assurant qu'il a été uploadé via un formulaire POST (HTTP POST).
            // https://www.php.net/manual/fr/function.move-uploaded-file.php
            if (move_uploaded_file($fileTmpPath, $destPath)) {
                // Si le fichier a été déplacé avec succès, on retourne le nom du fichier.
                return  $destPath;
            } else {
                // Si le fichier n'a pas pu être déplacé, on retourne null.
                return null;
            }
        }
    } else {
        // Si Une erreur inattendue s'est produite lors du téléchargement du fichier, on retourne null.
        return null;
    }
}
$statsql = "SELECT * FROM pays";
$stat = $db->query($statsql);
$pays = $stat->fetchAll(); 
// Vérifie si la méthode de la requête est POST. S'execute uniquement quand le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Récupère les valeurs du formulaire à partir de la superglobale $_POST.
        // Ajout de htmlspecialchars() pour échapper les caractères spéciaux et ainsi se protéger contre certaine attaques XSS
        $nom = htmlspecialchars($_POST['nom']);
        $prix = htmlspecialchars($_POST['prix']);
        $pays_id = htmlspecialchars($_POST['pays_id']);
        $img = uploadImageFile('img', 'assets/images/medicaments/');
        // Insère le nouveau produit dans la table 'products'
        $sql = "INSERT INTO medicaments( `nom`, `prix`, `img`, `pays_id`) VALUES ('$nom','$prix', '$img', '$pays_id')";
        $db->query($sql);
        echo "Produit ajouté avec succès !";
    } catch (PDOException $e) {
        // Si une erreur se produit, on annule la transaction en cours et toutes les modifications apportées à la base de données
        $db->rollBack();

        // Puis on affiche un message d'erreur.
        echo "Erreur lors de l'ajout du produit : " . $e->getMessage();
    }
}


?>
<section class="d-flex justify-content-center py-5 m-auto">
<div class="col-md-4 mb-3 d-flex justify-justify-content-center ">
    <div class="card px-3  bg-dark-subtle ">
        <h2>Création  de Medicament</h2>
    <form action="#" method="POST" enctype="multipart/form-data">
  <div class="form-row">
    <div class="">
      <input type="text" class="form-control my-3 border border-dark" placeholder="nom" name="nom">
    </div>
    <div class="col">
      <input type="file" class="form-control my-3 border border-dark" placeholder="img" name="img">
    </div>
    <div class="col">
      <input type="text" class="form-control my-3 border border-dark" placeholder="prix" name="prix">
    </div>
    <select class="form-select border border-dark" aria-label="Default select example" name="pays_id">
        <option selected>Selectionne le pays</option>
        <?php foreach ($pays as $row): ?>
            <option value="<?= $row["id"] ?>"><?= $row["pays"] ?></option>
        <?php endforeach; ?>
        </select>
    <div class="col">
      <input type="submit" class="form-control my-3 bg-info border border-dark display-5" value="Ajouter">
    </div>
  </div>
</form>
        </div>
    </div>
</div> 
</section>

