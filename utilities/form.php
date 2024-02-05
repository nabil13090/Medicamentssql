<?php

include 'utilities_data.php';

echo '<div class="row m-auto">';

foreach ($civilite as $value) {
    echo '<div class="col-md-6">
    <div class="md-form mb-4">
    <input type="' . $value['type'] . '" name="' . $value['name'] . '" id="' . $value['id'] . '" class="' . $value['class'] . '"
    placeholder="' . $value['placeholder'] . '">
                <div class="invalid-feedback">
                    Veuillez saisir votre nom.
                </div>

                </div>
                </div>';
}



foreach ($coordonnées as $value) {
    echo '<div class="col-md-6">
    <div class="md-form mb-4">
    <input type="' . $value['type'] . '" name="' . $value['name'] . '" id="' . $value['id'] . '" class="' . $value['class'] . '"
    placeholder="' . $value['placeholder'] . '">
                <div class="invalid-feedback">
                    Veuillez saisir votre nom.
                </div>

                </div>
                </div> ';
}


