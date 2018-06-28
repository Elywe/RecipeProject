
<?php

include_once('Model/Manager.php');
$manager = new Manager();
$recipes = $manager->listRecipes();
//ingredients for recipe 1 (brownie -> chocolate)
$ingredients = $manager->listIngredients(1);
//categories for recipe 1 (brownie -> froid, dessert)
$categories = $manager->listCategories(1);
$steps = $manager->stepForOneRecipe(1);
include_once('View/ViewList.php');

