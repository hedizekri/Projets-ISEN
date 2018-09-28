<?php include 'data.php';

?>
<header><a id="headertitle" href="main.php">Eat.com</a>
<nav>
<div class="menuCategory">
<a href="search.php">Search</a>
</div>
<div class="menuCategory">

<span class="navtitle">Recipe</span>
<div class="withSeveralLinks">
<?php foreach ($recipesData as $recipeKey => $recipeValue) {?>
<a href="recipe.php?recipe=<?php echo $recipeKey?>"><?php echo $recipeKey?></a>
<?php }?>
</div>
</div>
<div class="menuCategory">
<a href="contact.php">Contact us</a>
</div>
</nav>
</header>