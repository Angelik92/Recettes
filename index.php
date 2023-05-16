<?php
    define('_RECIPES_IMG_PATH_', 'uploads/recipes/');

    $recipes = [
        ['title' => 'Mousse au chocolat', 'description' => 'Mousse quick example text to build on the card title and make up the bulk of the card\'s content.', 'image' => '1-chocolate-au-mousse.jpg'],
        ['title' => 'Gratin dauphinois', 'description' => 'Gratin quick example text to build on the card title and make up the bulk of the card\'s content.', 'image' => '2-gratin-dauphinois.jpg'],
        ['title' => 'Salade', 'description' => 'Salade quick example text to build on the card title and make up the bulk of the card\'s content.', 'image' => '3-salade.jpg']
    ];
?>
<?php
    require_once('templates/header.php');
?>
        <!-- Hero -->
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="assets/images/logo-cuisinea.jpg" alt="logo Cuisinea" width="350">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Cuisinea - Recettes de cuisine</h1>
                    <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto, ducimus corrupti? Voluptas, quasi animi accusamus dicta dignissimos dolores sapiente nobis pariatur iusto illo sequi cupiditate nisi doloribus, excepturi, ratione laboriosam!.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Voir nos recettes</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card -->
        <div class="row">

            <?php
            foreach ($recipes as $key => $recipe) { ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= _RECIPES_IMG_PATH_.$recipe['image']?>" class="card-img-top" alt= <?= $recipe['title']  ?>>
                        <div class="card-body">
                            <h5 class="card-title"><?= $recipe['title'] ?></h5>
                            <p class="card-text"><?= $recipe['description'] ?></p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            
            <?php
                require_once('templates/footer.php');
            ?>