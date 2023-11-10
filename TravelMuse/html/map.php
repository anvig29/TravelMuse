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
    <link rel="stylesheet" href="../css/map.css">
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

    <!-- map section start's -->
    <main>

<section class="cities">
    <h2>Cities</h2><br>
    <p>Select a city:</p>
    <div class="city-blocks">
        <label class="city-block">
            
            <img src="../images/taj2.avif" alt="Agar" style="height: 150.5px;">
            <h3>Agar
                <input type="radio" name="city" value="Agar"></h3>
        </label>
        <label class="city-block">
            
            <img src="../images/munnar.avif" alt="Munnar"  style="height: 150.5px;">
            <h3>Munnar
                <input type="radio" name="city" value="Munnar"></h3>
        </label>
        <label class="city-block">
            
            <img src="../images/Msyour.avif" alt="Msyour"  style="height: 150.5px;">
            <h3>Msyour
                <input type="radio" name="city" value="Msyour"></h3>
        </label>
        <label class="city-block">
            
            <img src="../images/Gulmarg.avif" alt="Gulmarg"  style="height: 150.5px;">
            <h3>Gulmarg
                <input type="radio" name="city" value="Gulmarg"></h3>
        </label>
        <label class="city-block">
            
            <img src="../images/Tirupati_Temple.avif" alt="Tirupati"  style="height: 150.5px;">
            <h3>Tirupati
                <input type="radio" name="city" value="Tirupati"></h3>
        </label>
    </div>
</section>

<section class="locations">
    <h2>Locations</h2><br>
    <p>Select a location:</p>
    <div class="location-blocks">
        <label class="location-block">
            
            <img src="../images/mountain.avif" alt="Hill Station"  >
            <h3>Famous Places
                <input type="radio" name="location" value="Famous Places"></h3>
        </label>
        <label class="location-block">
            
            <img src="../images/resort.avif" alt="Resort" >
            <h3>Resort
            <input type="radio" name="location" value="Resort" ></h3>
        </label>
        <label class="location-block">
            
            <img src="../images/resturant.png" alt="Restaurant" >
            <h3>Restaurant
            <input type="radio" name="location" value="Restaurant"></h3>
        </label>
        <label class="location-block">
            
            <img src="../images/transport.avif" alt="Transport" >
            <h3>Transport
            <input type="radio" name="location" value="Transport"></h3>
        </label>
        <label class="location-block">
            
            <img src="../images/shopping_mall.png" alt="shopping_mall" >
            <h3>Shopping_mall
            <input type="radio" name="location" value="Shopping_mall"></h3>
        </label>
        </div>
        </section>



<div class="button-map">
<button class="go-live-btn">Go Live</button>
</div>
</main>




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
    <!-- mannul js -->
    
<script>
    // Get the radio buttons for city and location
const cityRadios = document.querySelectorAll('input[name="city"]');
const locationRadios = document.querySelectorAll('input[name="location"]');

// Get the Go Live button
const goLiveBtn = document.querySelector('.go-live-btn');

// Define the URL mappings for each city and location combination
const urlMappings = {
Agar: {
'Famous Places': 'https://www.google.com/maps/search/famous+place+in+agra/@27.1960623,77.9671271,12.35z',
'Resort': 'https://www.google.com/maps/search/resort+near+agra/@27.1920599,77.9454503,11.7z',
'Restaurant': 'https://www.google.com/maps/search/restaurants+near+agra/@27.1921061,77.9745496,12.37z',
'Transport': 'https://www.google.com/maps/search/transport+near+agra/@27.196427,77.9906427,12z',
'Shopping_mall': "https://www.google.com/maps/search/shoping+center+in+agra/@27.1728947,78.0069084,12.57z"  },
Munnar: {
'Famous Places': 'https://www.google.com/maps/search/famous+place+in+munnar/@10.1088622,77.0023493,12z/data=!3m1!4b1',
'Resort': 'https://www.google.com/maps/search/resort+near+munnar/@10.0759405,77.0371899,12.79z',
'Restaurant': 'https://www.google.com/maps/search/munnar+famous+restaurant/@10.0804727,77.053049,14.84z',
'Transport': 'https://www.google.com/maps/search/transport+near+Munnar,+Kerala/@10.0861927,77.0606784,16.99z',
'Shopping_mall': 'https://www.google.com/maps/search/shoping+mall+near+Munnar,+Kerala/@10.0857064,77.0607315,16z/data=!3m1!4b1'
},
Msyour: {
'Famous Places': 'https://www.google.com/maps/search/famous+loaction+in+mysore/@12.3307405,76.6320036,12z/data=!3m1!4b1',
'Resort': 'https://www.google.com/maps/search/resort+in+mysore/@12.3553825,76.5851077,11.35z',
'Restaurant': 'https://www.google.com/maps/search/restaurants+near+Mysore,+Karnataka/@12.3151954,76.6124526,13.33z',
'Transport': 'https://www.google.com/maps/search/transport+near+Mysore,+Karnataka/@12.315357,76.6124525,13z/data=!3m1!4b1',
'Shopping_mall': 'https://www.google.com/maps/search/shoping+center+near+Mysore,+Karnataka/@12.3152415,76.6249183,13.27z'
},
Gulmarg: {
'Famous Places': 'https://www.google.com/maps/search/famous+place+in+Gulmarg,+Jammu+and+Kashmir/@34.0447161,74.3552988,13z/data=!3m1!4b1',
'Resort': 'https://www.google.com/maps/search/resort+near+,+Gulmarg,+Jammu+and+Kashmir/@34.0622724,74.3875609,14z',
'Restaurant': 'https://www.google.com/maps/search/restaurants+near+Gulmarg,+Jammu+and+Kashmir/@34.0446138,74.3552989,13.36z',
'Transport': 'https://www.google.com/maps/search/transport+spot+near+gulmarg+j%26k/@34.059941,74.3802926,12.89z',
'Shopping_mall': 'https://www.google.com/maps/search/shopping+center+near+Gulmarg,+Jammu+and+Kashmir/@34.1281236,74.4163935,11z/data=!3m1!4b1'
},
Tirupati: {
'Famous Places': 'https://www.google.com/maps/search/famous+place+in+tirupati/@13.656675,79.3593945,12z',
'Resort': 'https://www.google.com/maps/search/resort+in+tirupati/@13.6593797,79.4047135,12.04z',
'Restaurant': 'https://www.google.com/maps/search/restaurants+near+Tirupati,+Andhra+Pradesh/@13.6324507,79.4330348,13.57z',
'Transport': 'https://www.google.com/maps/search/Shoping+center+near,+Tirupati,+Andhra+Pradesh/@13.6458491,79.3621604,12.97z',
'Shopping_mall': 'https://www.google.com/maps/search/Shoping+center+near,+Tirupati,+Andhra+Pradesh/@13.6458491,79.3621604,12.97z'
}
};

// Handle the Go Live button click
goLiveBtn.addEventListener('click', () => {
// Find the selected city and location
let selectedCity = '';
let selectedLocation = '';
cityRadios.forEach((radio) => {
if (radio.checked) {
selectedCity = radio.value;
}
});
locationRadios.forEach((radio) => {
if (radio.checked) {
selectedLocation = radio.value;
}
});

// Get the corresponding URL for the selected city and location
const url = urlMappings[selectedCity][selectedLocation];

// Redirect to the URL
window.location.href = url;
});

</script>

</body>

</html>