<?php
$pageTitle = "NewlyTriedRecipe - Delicious Recipes";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $pageTitle; ?></title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}
body{
    background:#f8f8f8;
    color:#333;
    line-height:1.6;
}
header{
    background:#ff6b35;
    color:#fff;
    padding:20px;
    text-align:center;
}
nav{
    background:#333;
    padding:10px;
    text-align:center;
}
nav a{
    color:white;
    text-decoration:none;
    margin:0 15px;
}
.hero{
    background:url('https://images.unsplash.com/photo-1490645935967-10de6ba17061?w=1200') center/cover;
    height:400px;
    display:flex;
    align-items:center;
    justify-content:center;
    color:white;
    text-align:center;
}
.hero h1{
    background:rgba(0,0,0,0.6);
    padding:20px;
    border-radius:10px;
}
.container{
    width:90%;
    max-width:1200px;
    margin:auto;
    padding:40px 0;
}
.recipes{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:20px;
}
.card{
    background:white;
    border-radius:10px;
    overflow:hidden;
    box-shadow:0 2px 10px rgba(0,0,0,0.1);
}
.card img{
    width:100%;
    height:200px;
    object-fit:cover;
}
.card-content{
    padding:15px;
}
section{
    margin-bottom:50px;
}
h2{
    color:#ff6b35;
    margin-bottom:20px;
}
.policy-box{
    background:white;
    padding:25px;
    border-radius:10px;
    box-shadow:0 2px 10px rgba(0,0,0,0.1);
}
footer{
    background:#333;
    color:white;
    text-align:center;
    padding:20px;
}
</style>
</head>
<body>

<header>
    <h1>NewlyTriedRecipe</h1>
    <p>Discover Delicious Recipes For Every Occasion</p>
</header>

<nav>
    <a href="#recipes">Recipes</a>
    <a href="#about">About</a>
    <a href="#privacy">Privacy Policy</a>
    <a href="#disclaimer">Disclaimer</a>
</nav>

<div class="hero">
    <h1>Fresh Recipes You Will Love To Try</h1>
</div>

<div class="container">

    <section id="recipes">
        <h2>Featured Recipes</h2>

        <div class="recipes">

            <div class="card">
                <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?w=800" alt="Pizza">
                <div class="card-content">
                    <h3>Classic Pizza</h3>
                    <p>A crispy homemade pizza loaded with fresh toppings and melted cheese.</p>
                </div>
            </div>

            <div class="card">
                <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=800" alt="Burger">
                <div class="card-content">
                    <h3>Juicy Burger</h3>
                    <p>Perfect grilled burger recipe with fresh vegetables and flavorful sauce.</p>
                </div>
            </div>

            <div class="card">
                <img src="https://images.unsplash.com/photo-1473093295043-cdd812d0e601?w=800" alt="Pasta">
                <div class="card-content">
                    <h3>Creamy Pasta</h3>
                    <p>Rich and creamy pasta recipe ideal for quick family dinners.</p>
                </div>
            </div>

        </div>
    </section>

    <section id="about">
        <h2>About NewlyTriedRecipe</h2>
        <div class="policy-box">
            <p>
                NewlyTriedRecipe is dedicated to sharing delicious and easy-to-follow recipes
                for food enthusiasts. Our goal is to inspire home cooks with creative dishes,
                cooking tips, and recipe ideas suitable for all skill levels.
            </p>
        </div>
    </section>

    <section id="privacy">
        <h2>Privacy Policy</h2>
        <div class="policy-box">
            <p>
                At NewlyTriedRecipe, we respect your privacy. We may collect limited
                non-personal information such as browser type, device information,
                and website usage statistics to improve user experience.
            </p>
            <br>
            <p>
                We do not sell, trade, or rent personal information to third parties.
                By using this website, you agree to the collection and use of information
                in accordance with this Privacy Policy.
            </p>
        </div>
    </section>

    <section id="disclaimer">
        <h2>Disclaimer</h2>
        <div class="policy-box">
            <p>
                The recipes, nutritional information, and cooking advice provided on
                NewlyTriedRecipe are for informational purposes only.
            </p>
            <br>
            <p>
                While we strive for accuracy, we make no guarantees regarding the
                completeness, reliability, or suitability of any information on this website.
                Users should verify ingredients and cooking methods independently,
                especially when dealing with food allergies or dietary restrictions.
            </p>
        </div>
    </section>

</div>

<footer>
    <p>&copy; <?php echo date("Y"); ?> NewlyTriedRecipe. All Rights Reserved.</p>
</footer>

</body>
</html>
