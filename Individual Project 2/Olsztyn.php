<!DOCTYPE html>
<html lang="en">
    <!--Michael Pacholarz, ISTE-240, December 6 2021-->
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Michael's Trip to Poland - Olsztyn</title>
    </head>

    <body>
        <!--Imports the header from another php file by using include()-->
        <?php 
            $path = './';
            include($path.'assets/include/header.php');
        ?>
        
        <h1 class="page-title">Visiting the city of Olsztyn</h1>
        <div class="content">
            <div class="image">
                <img id="olsztyn" src="assets/images/olsztyn.jpg" alt="Castle_in_the_city_of_Olsztyn">
            </div>
            <div class="main-text">
                <p class="text-adjust">From Krakow we made our way to the north of Poland, we passed through capital of Poland, 
                    Warszawa, and we also passed by the town of Grunwald, where a massive battle between the Polish-Lithuanian 
                    Commonwealth and the Tuetonic Knights was fought in 1410. We continued on until we reached the city of Olsztyn. 
                    There we spent two days looking at the old Prusian city, and admiring the many medival castles built there by the 
                    Tuetonic Knights. This part of Poland is very German because after the World War II, this area of land was sceded 
                    to the new Polish Republic after the war. The city's name before Olsztyn was Allenstein. 
                </p>
            </div>
        </div>

        <!--Imports the footer from another php file by using include()-->
        <?php
            include($path.'assets/include/footer.php');
        ?>
    </body>
</html>