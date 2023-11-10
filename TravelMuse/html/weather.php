<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- custom css link -->
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/final_weather.css">
    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <title>TravelMuse</title>
</head>

<body>
        <!-- navbar section start's -->
        <section class="header">
        <a href="home.php" class="logo">TravelMuse</a>
        <nav class="navbar">
            <a href="../main/home.php">Home</a>
            <a href="../main/transport.php">City Transport</a>
            <a href="../main/weather.php">Weather</a>
            <a href="../main/map.php">Map</a>
            <!-- <button class="button"><a href="login.php">Login</a></button> -->
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>
         <!-- navbar section end's -->


    <section class="weather">
    <div class="container">
        <div class="header">
            <div class="search-box">
                <input type="text" placeholder="Enter your location" class="input-box">

                <button class="fa-solid fa-magnifying-glass" id="searchBtn"></button>
            </div>
        </div>

        <div class="location-not-found">
            <h1>Sorry, Location not found!!!</h1>
            <img src="../images/477210.png " alt="404 Error">
        </div>

        <div class="weather-body">
            <img src="../images/648198.png" alt="Weather Image" class="weather-img">

            <div class="weather-box">
                <p class="temperature">0 <sup>°C</sup></p>
                <p class="description">light rain</p>
            </div>

            <div class="weather-details">
                <div class="humidity">
                    <i class="fa-sharp fa-solid fa-droplet"></i>
                    <div class="text"> 
                        <span id="humidity">45%</span>
                        <p>Humidity</p>
                    </div>
                </div>

                <div class="wind">
                    <i class="fa-solid fa-wind"></i>
                    <div class="text">
                        <span id="wind-speed">12Km/H</span>
                        <p>Wind Speed</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
<div class="recommendation-box">
    <h3>Recommendations</h3>
    <div class="recommendation-img-box">
        <img src="../images/recomendation.png" alt="Recommendation Image" class="recommendation-img">
    </div>
    <div class="recommendation-info" id="recommendation-inf">
        <div class="recommendation-text" id="weather-details">weather details</div>
    </div>
</div>

    </section>
    <!-- footer section start -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"><i class="fas fa-angle-right">
                        Home</i></a>
                <a href="trip.php"><i class="fas fa-angle-right">
                        Trip</i></a>
                <a href="gallery.php"><i class="fas fa-angle-right">
                        Gallery</i></a>
                <a href="about_us.php"><i class="fas fa-angle-right">
                        About Us</i></a>
            </div>


            <div class="box">
                <h3>ExtraLinks</h3>
                <a href="../main/contact.php"><i class="fas fa-angle-right">
                Contact Us</i></a>
                <a href="#"><i class="fas fa-angle-right">
                        Privacy policy</i></a>
                <a href="#"><i class="fas fa-angle-right">
                        terma of use</i></a>
            </div>

            <div class="box">
                <h3>Contant Info</h3>
                <a href="#"><i class="fas fa-phone">
                        +91 89556-00535</i></a>
                <a href="#"><i class="fas fa-phone">
                        +91 15948-95621</i></a>
                <a href="#"><i class="fas fa-envelope">
                        Demo@gmail.com</i></a>
                <a href="https://www.google.com/maps/place/D.Y.Patil+Dnyanshanti+School/@18.6529055,73.7267391,13.3z/data=!4m6!3m5!1s0x3bc2b9dac5240949:0x7fae198eb25337e4!8m2!3d18.6475931!4d73.7594382!16s%2Fg%2F11gffb8zjr?entry=ttu"><i class="fas fa-map">
                        Akurdi,Pune,Maharastra</i></a>
            </div>
            <div class="box">
                <h3>Follow Us</h3>
                <a href="https://Facebook.com"><i class="fab fa-facebook-f">
                        facebook</i></a>
                <a href="https://instagram/home.com"><i class="fab fa-instagram">
                        instagram</i></a>
                <a href="https://twitter.com"><i class="fab fa-twitter">
                        twitter</i></a>
                <a href="https://linkedin.com"><i class="fab fa-linkedin">
                        Linkedin</i></a>
            </div>
        </div>

        <div class="credit">
        credit by <span>TravelMuse</span> | all right reserved!
        </div>
    </section>

    <!-- footer section end's -->

    <!-- custom js link -->
    <script src="../js/home.js"></script>
    <script src="../js/final_weather.js"></script>
    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/595a890311.js" crossorigin="anonymous"></script>
</body>

</html>