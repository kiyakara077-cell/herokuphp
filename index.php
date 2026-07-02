

<?php
$title = "NewlyTriedRecipe";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $title; ?></title>

<style>
body{
    margin:0;
    font-family:Arial, sans-serif;
    background:#f9f9f9;
    color:#333;
    line-height:1.6;
}
header{
    background:#ff7043;
    color:#fff;
    text-align:center;
    padding:40px 20px;
}
header h1{
    margin:0;
    font-size:42px;
}
nav{
    background:#333;
    text-align:center;
    padding:12px;
}
nav a{
    color:white;
    text-decoration:none;
    margin:0 15px;
    font-weight:bold;
}
.container{
    width:90%;
    max-width:1200px;
    margin:auto;
    padding:20px;
}
.hero{
    text-align:center;
    margin:20px 0;
}
.hero img{
    width:100%;
    max-height:450px;
    object-fit:cover;
    border-radius:10px;
}
.recipes{
    display:flex;
    flex-wrap:wrap;
    gap:20px;
}
.recipe-card{
    background:white;
    flex:1 1 300px;
    border-radius:10px;
    overflow:hidden;
    box-shadow:0 2px 8px rgba(0,0,0,0.1);
}
.recipe-card img{
    width:100%;
    height:220px;
    object-fit:cover;
}
.recipe-card .content{
    padding:15px;
}
section{
    background:white;
    margin:25px 0;
    padding:25px;
    border-radius:10px;
    box-shadow:0 2px 8px rgba(0,0,0,0.08);
}
footer{
    background:#333;
    color:white;
    text-align:center;
    padding:20px;
    margin-top:30px;
}
</style>
</head>
<body>

<header>
    <h1>NewlyTriedRecipe</h1>
    <p>Discover Delicious Recipes From Around The World</p>
</header>

<nav>
    <a href="#recipes">Recipes</a>
    <a href="#privacy">Privacy Policy</a>
    <a href="#disclaimer">Disclaimer</a>
</nav>

<div class="container">

    <div class="hero">
        <img src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?w=1200" alt="Recipe Banner">
    </div>

    <section id="recipes">
        <h2>Featured Recipes</h2>

        <div class="recipes">

            <div class="recipe-card">
                <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=800" alt="Healthy Salad">
                <div class="content">
                    <h3>Fresh Garden Salad</h3>
                    <p>A nutritious salad packed with fresh vegetables and a light dressing.</p>
                </div>
            </div>

            <div class="recipe-card">
                <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?w=800" alt="Pizza">
                <div class="content">
                    <h3>Classic Pizza</h3>
                    <p>A homemade pizza recipe with rich tomato sauce and melted cheese.</p>
                </div>
            </div>

            <div class="recipe-card">
                <img src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?w=800" alt="Pasta">
                <div class="content">
                    <h3>Creamy Pasta</h3>
                    <p>Simple and delicious pasta prepared with creamy sauce and herbs.</p>
                </div>
            </div>

        </div>
    </section>

    <section id="privacy">
        <h2>Privacy Policy</h2>
        <p>
            NewlyTriedRecipe respects your privacy. We may collect limited
            information such as browser type, device information, and website
            usage statistics to improve user experience.
        </p>

        <p>
            We do not sell, rent, or share personal information with third
            parties except when required by law.
        </p>

        <p>
            Third-party services such as analytics providers may use cookies
            to enhance website functionality and measure performance.
        </p>
    </section>

    <section id="disclaimer">
        <h2>Disclaimer</h2>

        <p>
            The recipes and cooking information provided on NewlyTriedRecipe
            are for informational and educational purposes only.
        </p>

        <p>
            While every effort is made to ensure accuracy, we make no
            guarantees regarding recipe results, ingredient availability,
            nutritional values, or cooking outcomes.
        </p>

        <p>
            Users should exercise their own judgment regarding food allergies,
            dietary restrictions, and food safety practices.
        </p>
    </section>

</div>

<footer>
    <p>&copy; <?php echo date('Y'); ?> NewlyTriedRecipe. All Rights Reserved.</p>
</footer>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6978f2b8324aa2197d408aeb/1jg0788rp';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>
</html>
```
