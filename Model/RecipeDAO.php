
<?php

include_once('Category.php');
include_once('Ingredient.php');
include_once('Recipe.php');
include_once('Step.php');

Class RecipeDAO {

    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=recipe', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    }

    //Steps of a recipe
    public function stepForOneRecipe($idRecipe) {
        $query = $this->db->prepare("SELECT number,text FROM step WHERE idRecipe = :id ORDER BY length(number), number");
        $query->bindValue(':id', $idRecipe);
        $query->execute();
        while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
            $steps[] = new Step($data);
        }
        return $steps;
    }

    //all the recipes
    public function listRecipes() {
        $query = $this->db->query("SELECT * FROM recipe");
        while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
            $recipes[] = new Recipe($data);
        }
        return $recipes;
    }

    //ingredients of a recipe
    public function listIngredients($idRecipe) {
        $query = $this->db->prepare("SELECT id, name FROM ingredient JOIN uses ON idIngredient = id WHERE idRecipe = :id");
        $query->bindValue(':id', $idRecipe);
        $query->execute();
        while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
            $ingredients[] = new Ingredient($data["id"], $data["name"]);
        }
        return $ingredients;
    }

    //categories of a recipe
    public function listCategories($idRecipe) {
        $query = $this->db->prepare("SELECT id, name FROM category JOIN belong ON idCategory = id WHERE idRecipe = :id");
        $query->bindValue(':id', $idRecipe);
        $query->execute();
        while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
            $categories[] = new Category($data);
        }
        return $categories;
    }

}
