<?php
    require_once('templates/header.php');
    require_once('lib/recipe.php');

    $sql = 'SELECT * FROM recipes ORDER BY id DESC';

    $query = $pdo->prepare($sql);
    $query->execute();
    $recipes = $query->fetchAll();
?>

<h1>Liste des recettes</h1>
        <div class="row">

            <?php
            foreach ($recipes as $key => $recipe) { 
                include('templates/recipe_partial.php');   
            } ?>
            
            <?php
                require_once('templates/footer.php');
            ?>