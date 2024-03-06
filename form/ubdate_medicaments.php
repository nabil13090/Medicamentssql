<?php



$medicament = findAllmedicamentByid($db, $_GET['id']);

// var_dump( $pieces_pays);
$statsql = "SELECT * FROM pays";
$stat = $db->query($statsql);
$pays = $stat->fetchAll(); 
function Updatemedicament($db, $currentId, $data) {

  


  $sql = "UPDATE `medicaments` SET `nom`= :name,`prix`= :price,`pays_id`= :pays_id WHERE id = :currentId ";
  
  $sth = $db->prepare($sql);
  $sth-> bindParam(':name',$data['name'],PDO::PARAM_STR);
  $sth-> bindParam(':price',$data['price'],PDO::PARAM_STR);
  $sth-> bindParam(':pays_id',$data['pays_id']);
  $sth-> bindParam(':currentId',$currentId,PDO::PARAM_INT);

  return $sth->execute();


  
  
  }
  

if($_SERVER['REQUEST_METHOD'] === "POST") {
$donneesActuelles = findAllmedicamentByid($db, $_POST['m_id']);
$pieces_pays = explode('-', $_POST['pays_name']);
$pieces_pays['pays_name'] = $pieces_pays[1];

$donneesSoumises = [
  'm_id' => $_POST["m_id"],
  'name' => $_POST["name"],
  // 'picture' => $_POST["picture"],
  'price' => $_POST["price"],
  'pays_name' => $pieces_pays["pays_name"]
];
// var_dump($donneesActuelles);
// var_dump($donneesSoumises);
$differences = array_diff_assoc($donneesSoumises, $donneesActuelles);
// var_dump($differences);

if (!empty($differences)) {
  $donneesSoumises['pays_id'] =  $pieces_pays[0];
  $update = Updatemedicament($db, $_POST['m_id'], $donneesSoumises);
  if ($update) {
    header("Location: edit.php?message=1");
  }
 
}


}








?>



<section class="d-flex justify-content-center py-5 m-auto">
<div class="col-md-4 mb-3 d-flex justify-justify-content-center ">
    <div class="card px-3  bg-dark-subtle ">
        <h2>modification de Medicament</h2>
    <form action="#" method="POST">
  <div class="form-row">
  <input type="hidden" id="medicament.id" name="m_id" value="<?=$_GET['id']?>" />
    <div class="col">
      <input type="text" class="form-control my-3 border border-dark" placeholder="nom" name="name" value="<?=$medicament['name']?>">
    </div>
    <!-- <div class="col">
      <input type="file" class="form-control my-3 border border-dark" placeholder="img" name="picture" value="<?=$medicament['picture']?>">
    </div> -->
    <div class="col">
      <input type="text" class="form-control my-3 border border-dark" placeholder="prix" name="price" value="<?=$medicament['price']?>">
    </div>
    <select class="form-select border border-dark" aria-label="Default select example" name="pays_name">
        <option selected>Selectionne le pays</option>
        <?php foreach ($pays as $row): ?>
            <option value="<?= $row["id"] . '-' . $row["pays"] ?>"><?= $row["pays"] ?></option>
            <?php endforeach; ?>
            </select>
    <div class="col">
      <button type="submit" class="form-control my-3 bg-info border border-dark display-5">Editer</button>
    </div>
  </div>
</form>
        </div>
    </div>
</div> 
</section>