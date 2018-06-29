<?php

include_once 'Controller/RecipeController.php';
include_once './View/ViewHeader.php';


if ($_GET["controller"] == "recipe") {
    $controller = new RecipeController();
    if ($_GET["method"] == "list") {
        $controller->listRecipes();
    } else if ($_GET["method"] == "add") {
        $controller->addRecipe();
    } else {
        include 'View/notFound.php';
    }
} else {
    include 'View/notFound.php';
}
