<?php require_once __DIR__ .'/utilities/header.php';
$medicaments = findallMedicaments($db);?>
<h1 class="d-flex justify-content-center py-4  ">Tous les Produits</h1>
<div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php include './utilities/cards-produits.php';?>
        </div>
</div>
<?php include './utilities/footer.php';?>

