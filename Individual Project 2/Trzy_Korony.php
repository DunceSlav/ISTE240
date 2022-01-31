<!DOCTYPE html>
<html lang="en">
    <!--Michael Pacholarz, ISTE-240, December 6 2021-->
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Michael's Trip to Poland - Trzy Korony</title>
    </head>

    <body>
        <!--Imports the header from another php file by using include()-->
        <?php 
            $path = './';
            include($path.'assets/include/header.php');
        ?>
        
        <h1 class="page-title">Visiting Trzy Korony</h1>
        <div class="content">
            <div class="image">
                <img id="trzy_korony" src="assets/images/trzy_korony.jpg" alt="Trzy_Korony_from_river">
            </div>
            <div class="main-text">
                <p class="text-adjust">From the Carpathian Mountains, we traveled west along Poland's southern border. After driving, 
                    for a few hours, we had to park the car and hike down a dirt path for about half an hour. At the end of the dirt 
                    path we found ourselves at a river, and on the shore there were hundereds of people wating along the shore. So we 
                    watied in line to get into a wooden boat that took us down the river. On the boat, we had a tour guide telling us 
                    the history of the surrounding area, as well as some folk tales and myths. He was also telling us about the 
                    surounding nature. The summit of the tour downriver was the mountain known as the Trzy Korony, which in english means 
                    "the three crowns". We looked up and could see a mountain with three huge peaks, and we were all astonished. 
                </p>
            </div>
        </div>

        <!--Imports the footer from another php file by using include()-->
        <?php
            include($path.'assets/include/footer.php');
        ?>
    </body>
</html>