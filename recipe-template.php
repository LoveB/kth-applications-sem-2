<?php
session_start();
$xmlstr = file_get_contents("xml/recipes.xml");
$recipes = new SimpleXMLElement($xmlstr);

$title = $recipes->recipe[$recipe_index]->title;
$instructions = $recipes->recipe[$recipe_index]->instruction->li;
$ingredients = $recipes->recipe[$recipe_index]->ingredient->li;
$cooktime = $recipes->recipe[$recipe_index]->cooktime;
$cost = $recipes->recipe[$recipe_index]->cost;
$servings = $recipes->recipe[$recipe_index]->servings;
$imageURL = $recipes->recipe[$recipe_index]->imageurl;

