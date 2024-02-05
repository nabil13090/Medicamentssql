<?php require_once __DIR__ ."/utilities/header.php"; 
$docteur = findallMedcin($db);?>
<?php include 'utilities/presentation.php'; ?>
<div class="d-xs-block d-md-flex">
    <?php require_once __DIR__ .'/utilities/medecins-card.php';?>   
</div>
<?php include 'utilities/footer.php';?>

