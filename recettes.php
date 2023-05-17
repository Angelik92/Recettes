<?php
    require_once('templates/header.php');
    require_once('lib/recipe.php')
?>

<h1>Liste des recettes</h1>

        <!-- Card -->
        <div class="row">

            <?php
            foreach ($recipes as $key => $recipe) { 
                include('templates/recipe_partial.php');   
            } ?>
            
            <?php
                require_once('templates/footer.php');
            ?>