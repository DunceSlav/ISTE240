<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Michael's Trip to Poland - Sources</title>
        <!--Michael Pacholarz, ISTE-240, December 6 2021-->
    
    <style>
        * {
            box-sizing: border-box;
        }

        img {
            vertical-align: middle;
        }

        /* Position the image container (needed to position the left and right arrows) */
        .container {
            margin-left: 20%;
            margin-right: 20%;
            position: relative;
        }

        /* Hide the images by default */
        .mySlides {
            text-align: center;
            display: none;
        }

        /* Add a pointer when hovering over the thumbnail images */
        .cursor {
            cursor: pointer;
        }

        /* Next & previous buttons */
        .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 40%;
        width: auto;
        padding: 16px;
        margin-top: -50px;
        color: white;
        background-color: #333;
        font-weight: bold;
        font-size: 20px;
        border-radius: 0 3px 3px 0;
        user-select: none;
        -webkit-user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* Container for image text */
        .caption-container {
            text-align: center;
            margin-left: 20%;
            margin-right: 20%;
            padding: 2px 16px;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Images but smaller side by side */
        .column {
            margin-top: 1em;
            margin-bottom: 1em;
            float: left;
            width: 9%;
        }

        /* Add a transparency effect for thumnbail images */
        .demo {
            opacity: 0.6;
        }

        .active, .demo:hover {
            opacity: 1;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
        }

        @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
        }
    </style>
    </head>
    <body>
        <!--Imports the header from another php file by using include()-->
        <?php 
            $path = './';
            include($path.'assets/include/header.php');
        ?>

    <h1 class="page-title">Slideshow Gallery</h1>

    <!--all the images stored here-->
    <div class="container">
        <div class="mySlides fade">
            <!--image caption-->
            <div class="caption-container"><p>Map of Poland</p></div>
            <img src="assets/images/map-poland.png" alt="Map of Poland">
        </div>
        <div class="mySlides fade">
            <!--image caption-->
            <div class="caption-container"><p>City of Zurich, Switzerland</p></div>
            <img src="assets/images/zurich.jpg" alt="City of Zurich, Switzerland">
        </div>
        <div class="mySlides fade">
            <!--image caption-->
            <div class="caption-container"><p>Giedlarowa on map of Poland</p></div>
            <img src="assets/images/Giedlarowa_map.png" alt="Giedlarowa on map of Poland">
        </div>
        <div class="mySlides fade">
            <!--image caption-->
            <div class="caption-container"><p>Zagrodki on map of Poland</p></div>
            <img src="assets/images/Zagrodki_map.png" alt="Zagrodki on map of Poland">
        </div>
        <div class="mySlides fade">
            <!--image caption-->
            <div class="caption-container"><p>Lancut Castle</p></div>
            <img src="assets/images/lancut_castle.JPG" alt="Lancut Castle">
        </div>
        <div class="mySlides fade">
            <!--image caption-->
            <div class="caption-container"><p>A view of the Carpathian Mountains</p></div>
            <img src="assets/images/Carpathian_Mountains.jpg" alt="A view of the Carpathian Mountains">
        </div>
        <div class="mySlides fade">
            <!--image caption-->
            <div class="caption-container"><p>A view of the Trzy Korony from the Dunajec River</p></div>
            <img src="assets/images/trzy_korony.jpg" alt="A view of the Trzy Korony from the Dunajec River">
        </div>
        <div class="mySlides fade">
            <!--image caption-->
            <div class="caption-container"><p>Wawel Castle in Krakow</p></div>
            <img src="assets/images/wawel_castle.jpg" alt="Wawel Castle in Krakow">
        </div>
        <div class="mySlides fade">
            <!--image caption-->
            <div class="caption-container"><p>Inside the Wieliczka Salt Mine</p></div>
            <img src="assets/images/Wieliczka_salt_mine.jpg" alt="Inside the Wieliczka Salt Mine">
        </div>
        <div class="mySlides fade">
            <!--image caption-->
            <div class="caption-container"><p>A castle in the city of Olsztyn</p></div>
            <img src="assets/images/olsztyn.jpg" alt="A castle in the city of Olsztyn">
        </div>
        <div class="mySlides fade">
            <!--image caption-->
            <div class="caption-container"><p>Kolobrzeg on Map of Poland</p></div>
            <img src="assets/images/kolobrzeg.png" alt="Kolobrzeg on Map of Poland">
        </div>

        <!--smaller images stored here-->
        <div class="row">
            <div class="column">
            <img class="demo cursor" src="assets/images/map-poland.png" style="width:100%" onclick="currentSlide(1)" alt="Map of Poland">
            </div>
            <div class="column">
            <img class="demo cursor" src="assets/images/zurich.jpg" style="width:100%" onclick="currentSlide(2)" alt="City of Zurich, Switzerland">
            </div>
            <div class="column">
            <img class="demo cursor" src="assets/images/Giedlarowa_map.png" style="width:100%" onclick="currentSlide(3)" alt="Giedlarowa on map of Poland">
            </div>
            <div class="column">
            <img class="demo cursor" src="assets/images/Zagrodki_map.png" style="width:100%" onclick="currentSlide(4)" alt="Zagrodki on map of Poland">
            </div>
            <div class="column">
            <img class="demo cursor" src="assets/images/lancut_castle.JPG" style="width:100%" onclick="currentSlide(5)" alt="Lancut Castle">
            </div>    
            <div class="column">
            <img class="demo cursor" src="assets/images/Carpathian_Mountains.jpg" style="width:100%" onclick="currentSlide(6)" alt="A view of the Carpathian Mountains">
            </div>
            <div class="column">
            <img class="demo cursor" src="assets/images/trzy_korony.jpg" style="width:100%" onclick="currentSlide(7)" alt="A view of the Trzy Korony from the Dunajec River">
            </div>
            <div class="column">
            <img class="demo cursor" src="assets/images/wawel_castle.jpg" style="width:100%" onclick="currentSlide(8)" alt="Wawel Castle in Krakow">
            </div>
            <div class="column">
            <img class="demo cursor" src="assets/images/Wieliczka_salt_mine.jpg" style="width:100%" onclick="currentSlide(9)" alt="Inside the Wieliczka Salt Mine">
            </div>
            <div class="column">
            <img class="demo cursor" src="assets/images/olsztyn.jpg" style="width:100%" onclick="currentSlide(10)" alt="A castle in the city of Olsztyn">
            </div>
            <div class="column">
            <img class="demo cursor" src="assets/images/kolobrzeg.png" style="width:100%" onclick="currentSlide(11)" alt="Kolobrzeg on Map of Poland">
            </div>
        </div>
    </div>

    <script>
    var slideIndex = 0;
    showSlides(slideIndex);

    function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
    }
    </script>

    <!--Imports the footer from another php file by using include()-->
    <?php
        include($path.'assets/include/footer.php');
    ?>
    </body>
</html>
