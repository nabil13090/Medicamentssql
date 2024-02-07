<?php

foreach ($medicamentspays as $value) { ?>
    <div class="col mb-5">
        <div class="card h-100">
            <img class="card-img-top" src="<?=$value['picture']?>" alt="..." />
            <div class="card-body p-4">
                <div class="text-center">
                    <h5 class="fw-bolder"><?=$value['names']?></h5>
                    <span class=" text-decoration"><?=$value['price']?></span>
                </div>
            </div>
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Prend ta Came</a></div>
            </div>
        </div>
    </div>
<?php }?>