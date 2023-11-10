<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- custom css link -->    
    <link rel="stylesheet" href="../css/final_language.css" />
    <link rel="stylesheet" href="../css/home.css">
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

    <!-- language section start's -->
    <section class="language">
    <div class="mode">
        <label class="toggle" for="dark-mode-btn">
            <div class="toggle-track">
                <input type="checkbox" class="toggle-checkbox" id="dark-mode-btn" />
                <span class="toggle-thumb"></span>
                <img src="../images/sun.png" alt="" />
                <img src="../images/moon.png" alt="" />
            </div>
        </label>
    </div>
    <div class="container">
        <div class="card input-wrapper">
            <div class="from">
                <span class="heading">From :</span>
                <div class="dropdown-container" id="input-language">
                    <div class="dropdown-toggle">
                        <ion-icon name="globe-outline"></ion-icon>
                        <span class="selected" data-value="auto">Auto Detect</span>
                        <ion-icon name="chevron-down-outline"></ion-icon>
                    </div>
                    <ul class="dropdown-menu">
                        <li class="option active">DropDown Menu Item 1</li>
                        <li class="option">DropDown Menu Item 2</li>
                    </ul>
                </div>
            </div>
            <div class="text-area">
                <textarea id="input-text" cols="30" rows="10" placeholder="Enter your text here"></textarea>
                <div class="chars"><span id="input-chars">0</span> / 5000</div>
            </div>
            <div class="card-bottom">
                <p>Or choose your document!</p>
                <label for="upload-document">
                    <span id="upload-title">Choose File</span>
                    <ion-icon name="cloud-upload-outline"></ion-icon>
                    <input type="file" id="upload-document" hidden />
                </label>
            </div>
        </div>

        <div class="center">
            <div class="swap-position">
                <ion-icon name="swap-horizontal-outline"></ion-icon>
            </div>
        </div>

        <div class="card output-wrapper">
            <div class="to">
                <span class="heading">To :</span>
                <div class="dropdown-container" id="output-language">
                    <div class="dropdown-toggle">
                        <ion-icon name="globe-outline"></ion-icon>
                        <span class="selected" data-value="en">Englsih</span>
                        <ion-icon name="chevron-down-outline"></ion-icon>
                    </div>
                    <ul class="dropdown-menu">
                        <li class="option active">DropDown Menu Item 1</li>
                        <li class="option">DropDown Menu Item 2</li>
                    </ul>
                </div>
            </div>
            <textarea id="output-text" cols="30" rows="10" placeholder="Translated text will appear here"
                disabled></textarea>
            <div class="card-bottom">
                <p>Download as a document!</p>
                <button id="download-btn">
                    <span>Download</span>
                    <ion-icon name="cloud-download-outline"></ion-icon>
                </button>
            </div>
        </div>
    </div>
</section>
    <!-- language section end's -->

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
    <script src="../js/final_language.js"></script>
    <script src="../js/final_language2.js"></script>
    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
</body>

</html>