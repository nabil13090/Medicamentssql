<?php require_once __DIR__ .'/utilities/header.php';
$pays = findAllpays($db);
?>
<section class="intro">
  <div class="card">
  <h1 class="d-flex justify-content-center py-1 display-3 ">Gestion des Medicaments</h1>
  </div>
  <div class="bg-image h-100 py-3 rounded rounded " style="background-color: #6095F0;">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card shadow-2-strong" style="background-color: #f5f7fa;">
              <div class="card-body">
              <div class="card d-flex justify-content-center mb-3 pt-3 ">
                <h2 class=" d-flex justify-content-center px-5 py-1 display-4 " >Ajouter un Medicament</h2>
                  <div class="d-flex justify-content-center px-5 pb-3 ">
                  <a class="btn btn-outline-info mt-auto" href="creation.php"><i class="bi bi-plus-circle text-info "></i> AJOUTER</a>
                </div>
                </div>
                <div class="table-responsive">
                <table class="table table-borderless mb-0">
                    <thead>
                      <tr>
                        <th scope="col">
                        <th scope="col">Nom</th>
                        <th scope="col">Images</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Villes</th>
                        <th scope="col" class="display-6">Update</th>
                        <th scope="col" class="display-6">Delete</th>
                      </tr>
                    </thead>
                   <tbody>
                    <?php foreach ($pays as $value) { ?>
                      <tr>
                        <th scope="row">
                        </th>
                        <td ><?=$value['name']?></td>
                        <td><img class="card-img-top border border-black rounded rounded" height="40px" width="5px" src="<?=$value['picture']?>" alt="..." /></td>
                        <td><?=$value['price']?><i class="bi bi-currency-euro"></i></td>
                        <td><?=$value['pays_name']?>  <i class="bi bi-globe"></i></td>
                        <td>
                        <a class="btn btn-outline-primary mt-auto " href="modifier.php?id=<?=$value['m_id']?>"><i class="bi bi-arrow-up-circle text-primary "></i>  MODIFIER</a>
                          </td>
                          <td>
                         <a class="btn btn-outline-danger mt-auto" href="supprimé.php?id=<?=$value['m_id']?>"><i class="bi bi-x-circle text-danger "></i>  SUPPRIMER</a>
                          </td>
                         </tr>
                         <?php }  ?>
                    </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include './utilities/footer.php';?>


