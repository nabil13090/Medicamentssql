<?php 
//  Boucle pour les medicaments //
foreach ( $docteur as $value) { ?>
<div class="col-md-4 mb-3">
    <div class="card">
        <img class="img-fluid" alt="100%x280" src="<?=$value['img']?>">
        <div class="card-body align-self-center">
            <h4 class="card-title"><?=$value['nom']?></h4>
            <p class="card-text"><?=$value['desciption']?></p>
        </div>
    </div>
</div> 
<?php  }  ?>

