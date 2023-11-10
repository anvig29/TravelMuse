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
    <link rel="stylesheet" href="../css/final_transport.css">
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
         <!-- navbar section end's-->


         <!-- <section class="content">
         <div class="content"><p>
        Shortest Path Finder application: It provides a user interface for users to enter a starting point, destination, and mode of transportation, and then it calculates and displays the shortest path between the given points using Google Maps. it helps user to save time.</p></div></section> -->


      <!-- shortest path section start's -->
    <div class="container">
            <h1>Shortest Path Finder</h1>
            <form>
                <label for="start">Starting Point:</label>
                <input type="text" id="start" name="start" placeholder="Enter starting point...">
                <label for="end">Destination:</label>
                <input type="text" id="end" name="end" placeholder="Enter destination...">
                <label for="mode">Mode of Transportation:</label>
                <select id="mode" name="mode">
                    <option value="driving">Driving</option>
                    <option value="walking">Walking</option>
                    <option value="bicycling">Bicycling</option>
                    <option value="transit">Transit</option>
                </select>
                <button type="button" onclick="findShortestPath()">Find Shortest Path</button>
            </form>
            <div class="result">
                <p id="result-text"></p>
                <a href="" id="map-link" target="_blank"></a>
            </div>
        </div>
    <!-- shortest path section end's -->




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
    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!-- mannul js -->        <script>
            function findShortestPath() {
                var start = document.getElementById('start').value;
                var end = document.getElementById('end').value;
                var mode = document.getElementById('mode').value;

                if (start === "" || end === "") {
                    document.getElementById('result-text').innerHTML = "Please enter both starting point and destination.";
                    document.getElementById('map-link').href = "";
                    return;
                }

                var travelMode;
                switch (mode) {
                    case 'driving':
                        travelMode = 'driving';
                        break;
                    case 'walking':
                        travelMode = 'walking';
                        break;
                    case 'bicycling':
                        travelMode = 'bicycling';
                        break;
                    case 'transit':
                        travelMode = 'transit';
                        break;
                    default:
                        travelMode = 'driving';
                        break;
                }

                var mapLink = "https://www.google.com/maps/dir/?api=1&origin=" + start + "&destination=" + end + "&travelmode=" + travelMode;
                document.getElementById('map-link').href = mapLink;
                document.getElementById('map-link').innerHTML = "View on Maps";
                document.getElementById('result-text').innerHTML = "The shortest path between " + start + " and " + end + " is:";
            }
        </script>
</body>

</html>