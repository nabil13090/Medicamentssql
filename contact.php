<?php include 'utilities/header.php'; ?>
<h2 class="d-flex justify-content-center mt-2 my-5 ">Formulaire de contact</h2>
<section class="py-5 my-5">
    <div class="container g-0">
        <form class="row text-uppercase">
        <div class="col-12 mb-4 ">
            <div class="form-floating">
                <input type="text" class="form-control border-1 rounded-0 bg-lightgrey" name="sujet" id="subject"
                    placeholder="Sujet" required>
                <label for="subject">Nom</label>
                <div class="invalid-feedback">
                    Veuillez saisir un sujet dans le champ de texte
                </div>
            </div>
        </div>
         <div class="col-12 mb-4 ">
            <div class="form-floating">
                <input type="text" class="form-control border-1 rounded-0 bg-lightgrey" name="sujet" id="subject"
                    placeholder="Sujet" required>
                <label for="subject">Prenom</label>
                <div class="invalid-feedback">
                    Veuillez saisir un sujet dans le champ de texte
                </div>
            </div>
        </div>
         <div class="col-12 mb-4 ">
            <div class="form-floating">
                <input type="text" class="form-control border-1 rounded-0 bg-lightgrey" name="sujet" id="subject"
                    placeholder="Sujet" required>
                <label for="subject">Sujet</label>
                <div class="invalid-feedback">
                    Veuillez saisir un sujet dans le champ de texte
                </div>
            </div>
        </div>
        <div class="col-12 mb-4-custom">
            <div class="form-floating">
                <textarea class="form-control border-1 rounded-0 bg-lightgrey"
                    placeholder="Votre message" name="msg" id="message" required></textarea>
                <label for="message">Votre message</label>
                <div class="invalid-feedback">
                    Veuillez saisir un message dans la zone de texte.
                </div>
            </div>
        </div>
        <div class="col-12 bg d-flex justify-content-center mt-5">
            <button
                class="btn btn-lg button-hover-gold border-1 rounded-0 text-uppercase fw-bolder px-5 bg-info " name="sub"
                type="submit">Envoyer</button>
        </div>
    </form>
    </div>
</section>
<?php include './utilities/footer.php';?>
