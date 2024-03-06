<?php 
require_once __DIR__ ."/utilities/header.php"; 
$docteur = findallMedcin($db);?>
<div class="container h-25 pt-5">
<div class="d-flex justify-content-center pt-2 card" height="400">
<h1 class="text-center mb-3">Le Cabinet Du DR GONZO</h1>
    <div class="d-flex justify-content-center">
<video autoplay loop muted class="video pb-3 rounded rounded" height="400">
<source src="assets/laboratoire.mp4">
</video>
</div>
<div class="pt-1 text-center px-5 ">
<h3 class="textvideo d-flex justify-content-center ">Les Laboratoires Gonzo</h3>
<p>Bienvenue à notre clinique dédiée à la santé mentale, un espace bienveillant où la guérison et le bien-être mental sont au cœur de notre engagement.
Chez nous, chaque patient est considéré dans sa globalité, dans le respect de sa dignité et de sa vie privée. Nhésitez pas à prendre 
    le premier pas vers une
     transformation positive en nous contactant dès aujourdhui. Votre bien-être mental est notre priorité.
        Alors bienvenue chez Doctor Gonzo, la médecine alternative à tous vos maux</p>
    </div>
</div>
</div>
<h3 class="text-center mt-5 text-uppercase">LES CHIMISTES CHEZ DR GONZO</h3>
<div class="d-xs-block d-md-flex">
    <?php require_once __DIR__ .'/utilities/medecins-card.php';?>
</div>
<!-- <script src="//code.tidio.co/ptsbskzq6vhagrw3bmnd4dzrnftczg9c.js" async></script> -->
<?php include 'utilities/footer.php';?>

