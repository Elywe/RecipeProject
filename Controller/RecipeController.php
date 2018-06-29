<?php

include_once("Model/RecipeDAO.php");

class RecipeController {

    private $dao;

    function __construct() {
        $this->dao = new RecipeDAO();
    }

    function listRecipes() {
        $recipes = $this->dao->listRecipes();
        include_once('View/ViewList.php');
    }

    function addRecipe() {
        include_once('View/ViewAdd.php');
    }

}
