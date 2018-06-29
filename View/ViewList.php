<h1>Les recettes</h1>
<div class="col s12 m7 cards">
    <?php foreach ($recipes as $recipe) { ?>
        <div class="card">
            <div class="card-image">
                <img src="data:image/jpeg;base64,<?php echo base64_encode($recipe->getImage()); ?>"/>
                <a class="card-name card-title" href="#"><?php echo $recipe->getName(); ?></a>
            </div>
            <div class="card-content">
                <p>Ici les tags prochainement</p>
            </div>
        </div>
    <?php }
    ?>
    <div class="card">
        <div class="card-image">
            <img src="Resources/default.PNG"/>
            <a class="card-title" href="#">Ajouter une nouvelle recette</a>
            <a class=" btn-floating halfway-fab waves-effect waves-light colorAdd"><i class="material-icons">+</i></a>
        </div>
        <div class="card-content">
            <p>Ici les tags prochainement</p>
        </div>
    </div>
</div>
<ul class="pagination">
    <li class="disabled"><a href="#!"><i class="material-icons"><</i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">></i></a></li>
</ul>
</body>
</html>