

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlyLuxeCShop - Premium Travel Food</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: Arial, sans-serif;
        }

        body{
            background:#f4f4f4;
            color:#333;
            line-height:1.6;
        }

        header{
            background:linear-gradient(to right,#ff6600,#ff9900);
            color:white;
            padding:20px;
            text-align:center;
        }

        header h1{
            font-size:42px;
        }

        nav{
            background:#222;
            padding:12px;
            text-align:center;
        }

        nav a{
            color:white;
            text-decoration:none;
            margin:0 15px;
            font-weight:bold;
        }

        .hero{
            background:url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=1200') center/cover no-repeat;
            height:400px;
            display:flex;
            align-items:center;
            justify-content:center;
            color:white;
            text-shadow:2px 2px 5px black;
        }

        .hero h2{
            font-size:50px;
            background:rgba(0,0,0,0.5);
            padding:20px;
            border-radius:10px;
        }

        .container{
            width:90%;
            margin:auto;
            padding:40px 0;
        }

        .section-title{
            text-align:center;
            margin-bottom:30px;
            font-size:34px;
            color:#ff6600;
        }

        .foods{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
            gap:25px;
        }

        .card{
            background:white;
            border-radius:10px;
            overflow:hidden;
            box-shadow:0 4px 10px rgba(0,0,0,0.1);
        }

        .card img{
            width:100%;
            height:220px;
            object-fit:cover;
        }

        .card-content{
            padding:20px;
        }

        .card-content h3{
            margin-bottom:10px;
            color:#ff6600;
        }

        .about{
            background:white;
            padding:30px;
            border-radius:10px;
            margin-top:40px;
        }

        .policy{
            background:#fff;
            padding:30px;
            margin-top:40px;
            border-radius:10px;
        }

        footer{
            background:#222;
            color:white;
            text-align:center;
            padding:20px;
            margin-top:40px;
        }

        @media(max-width:768px){
            .hero h2{
                font-size:32px;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>FlyLuxeCShop.Store</h1>
    <p>Luxury Travel Food & Airline Dining Experience</p>
</header>

<nav>
    <a href="#foods">Travel Foods</a>
    <a href="#about">About</a>
    <a href="#privacy">Privacy Policy</a>
    <a href="#disclaimer">Disclaimer</a>
</nav>

<section class="hero">
    <h2>Enjoy Gourmet Food While You Travel</h2>
</section>

<div class="container">

    <h2 class="section-title" id="foods">Popular Travel Meals</h2>

    <div class="foods">

        <div class="card">
            <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?q=80&w=800" alt="Healthy Airline Meal">
            <div class="card-content">
                <h3>Healthy Airline Meals</h3>
                <p>Fresh salads, fruits, and balanced meals specially curated for travelers.</p>
            </div>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1504754524776-8f4f37790ca0?q=80&w=800" alt="Luxury Breakfast">
            <div class="card-content">
                <h3>Luxury Breakfast</h3>
                <p>Premium breakfast options served with fresh coffee and bakery items.</p>
            </div>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?q=80&w=800" alt="International Cuisine">
            <div class="card-content">
                <h3>International Cuisine</h3>
                <p>Explore delicious dishes inspired by cuisines from around the world.</p>
            </div>
        </div>

    </div>

    <div class="about" id="about">
        <h2 class="section-title">About FlyLuxeCShop</h2>
        <p>
            FlyLuxeCShop.Store provides premium travel food inspiration and luxury airline dining experiences.
            Our mission is to help travelers discover high-quality meals, gourmet travel snacks,
            and exceptional food services during flights and vacations.
        </p>
    </div>

    <div class="policy" id="privacy">
        <h2 class="section-title">Privacy Policy</h2>
        <p>
            At FlyLuxeCShop.Store, we respect your privacy. We may collect basic visitor information
            such as browser type, device information, and cookies to improve user experience.
            We do not sell or share personal information with third parties without consent.
        </p>
        <br>
        <p>
            By using this website, you agree to our privacy practices and terms of use.
        </p>
    </div>

    <div class="policy" id="disclaimer">
        <h2 class="section-title">Disclaimer</h2>
        <p>
            The information provided on FlyLuxeCShop.Store is for informational and entertainment purposes only.
            Food images and descriptions are representative and may vary depending on airline services,
            travel locations, and availability.
        </p>
        <br>
        <p>
            We are not responsible for third-party services, booking issues, allergies,
            or inaccuracies in displayed content.
        </p>
    </div>

</div>

<footer>
    <p>&copy; 2026 FlyLuxeCShop.Store | All Rights Reserved</p>
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
