<?php include 'utilities/header.php'; ?>
<?php

$sql = "SELECT * FROM image_caroussel";
$requete = $db->query($sql);
$clinique = $requete->fetchAll();

include 'utilities/presentation.php';?>

<h3 class="text-center mt-5 text-uppercase">LES CLINIQUES DU DR GONZO ET SES PARTENAIRES</h3>
<div class="d-flex justify-content-center py-3 ">
<?php
foreach ( $clinique as $value) { ?>

<div class="card" style="width: 18rem;">
        <img class="img-fluid" alt="100%x280" src="<?=$value['picture']?>">
        <div class="card-body align-self-center">
            <h4 class="card-title text-primary "><?=$value['name']?></h4>
            <p class="card-text"><?=$value['description']?></p>
            </a>
        </div>
</div> 

<?php  }  ?>


</div> 

<?php include './utilities/footer.php';?>