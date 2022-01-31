<!DOCTYPE html>
<html lang="en">
    <!--Michael Pacholarz, ISTE-240, December 6 2021-->
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Michael's Trip to Poland</title>
    </head>

    <body>
        <!--Imports the header from another php file by using include()-->
        <?php 
            $path = './';
            include($path.'assets/include/header.php');
        ?>
        
        <h1 class="page-title">An Overview of the trip</h1>
        <div class="content">
            <div class="image">
                <img id="map_of_poland" src="assets/images/map-poland.png" alt="Map_of_Poland">
            </div>
            <div class="main-text">
                <p class="text-adjust">Two summers ago, when COVID-19 was not forcing everyone to be locked down in their own homes, 
                    I took a two month trip to Poland. During my stay there I did many things such as visit family, eat delicious 
                    food, and do a lot of sight seeing. In Poland I travelled across the entire country. I first started very locally 
                    within the area of my family, then began to travel farther and farther. I began the longer trips towards the 
                    south of Poland, known for its beautiful forests and mountains. From there, I travelled to the north of Poland, 
                    and ended by journey on the Baltic Sea, which was very windy and cold, even for the summer. Overall, it was one 
                    of the most enjoyable summers I ever had and would defiently recomend my journey across Poland to everyone.
                </p>
            </div>
        </div>
        <!--Imports the footer from another php file by using include()-->
        <?php
            include($path.'assets/include/footer.php');
        ?>
    </body>
</html>