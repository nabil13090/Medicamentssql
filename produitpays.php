<?php require_once __DIR__ .'/utilities/header.php';
$currentid = $_GET['id'];
$medicamentspays = findAllpaysByid($db, $currentid);?>
<div class="container px-4 px-lg-5 mt-5">
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        <?php require_once __DIR__ .'/utilities\cardpays_produits.php';?>
    </div>
</div>
<?php include './utilities/footer.php';?>