<!-- echo '<td><img src="data:image/jpeg;base64,' . base64_encode($recipe->getImage()) . '"/></td>'; -->

<?php
/* foreach ($steps as $step) {
  echo "<tr><td>" . $step->getNumber() . "</td>";
  echo "<td>" . $step->getText() . "</td>";
  echo "</tr>";
  } */
?>

<h1>Liste des recettes</h1>
<div id="recipes">
    <?php
    foreach ($recipes as $recipe) {
        echo '<img src="data:image/jpeg;base64,' . base64_encode($recipe->getImage()) . '"/>';
        echo '<h2>' . $recipe->getName() . '</h2>';
    }
    ?>
</div>
</body>
</html>