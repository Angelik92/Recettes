<?php
require_once('lib/recipe.php');
require_once('templates/header.php');

$recipes = getRecipes($pdo, _HOME_RECIPES_LIMIT_);
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
                <a href="recettes.php" class="btn btn-primary">Voir nos recettes</a>
            </div>
        </div>
    </div>
</div>

<!-- Card -->
<div class="row">

    <?php
    foreach ($recipes as $key => $recipe) {
        include('templates/recipe_partial.php');
    } ?>

    <?php
    require_once('templates/footer.php');
    ?>