<!DOCTYPE html>
<html lang="en">
    <!--Michael Pacholarz, ISTE-240, December 6 2021-->
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Michael's Trip to Poland - JFK to ZRH</title>
    </head>

    <body>
        <!--Imports the header from another php file by using include()-->
        <?php 
            $path = './';
            include($path.'assets/include/header.php');
        ?>
        
        <h1 class="page-title">Going from JFK International Airport to Zurich</h1>
        <div class="content">
            <div class="image">
                <img id="zurich_city" src="assets/images/zurich.jpg" alt="city_of_zurich">
            </div>
            <div class="main-text">
                <p class="text-adjust">As I live here in the US, the only way to get to Poland is by plane. However, there were no 
                    direct flights from New York City to Poland, thus I had to take a layover. In this case, the layover was in
                    Zurich, Switzerland. The flight took nearly 8 hours, and I had another 6 hours before my connecting flight to
                    Poland. So, I decided to go into the city of Zurich. The airport was a bit of the way from the city, so I took 
                    a train. Once I got into the city itself, I was astonished at its beauty. It was just as beautiful on the ground
                    as it was seeing it from the sky. I walked the streets admiring the buildings, went into shops and cafes, and of 
                    course tried authentic Swiss chocolate. After my time was up, I headed back to the airport and got to my connecting 
                    flight to Poland.
                </p>
            </div>
        </div>

        <!--Imports the footer from another php file by using include()-->
        <?php
            include($path.'assets/include/footer.php');
        ?>
    </body>
</html>