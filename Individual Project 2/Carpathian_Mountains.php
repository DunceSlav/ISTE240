<!DOCTYPE html>
<html lang="en">
    <!--Michael Pacholarz, ISTE-240, December 6 2021-->
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Michael's Trip to Poland - Carpathian Mountains</title>
    </head>

    <body>
        <!--Imports the header from another php file by using include()-->
        <?php 
            $path = './';
            include($path.'assets/include/header.php');
        ?>
        
        <h1 class="page-title">Visiting the Carpathian Mountains</h1>
        <div class="content">
            <div class="image">
                <img id="carpathian_mountains" src="assets/images/Carpathian_Mountains.jpg" alt="Hiking_in_the_Carpathian_Mountains">
            </div>
            <div class="main-text">
                <p class="text-adjust">The first trip that I took with my grandma, uncle, and counsin that was farther away from my 
                    grandma's house was roughly a 3 hour car ride. We went to the Carpathian Mountains in the south of Poland. They 
                    were nothing like the Alps, but they were just as beautiful. We spend 3 days in a small town that served as a
                    base camp for all the people that were there to go hiking in the mountains. On the first day, we woke up really 
                    and ate our breakfast, and began our hike up one of the smaller mountains. The hike was still dificult, but 
                    after a few hours we made it to the top. The next day, we got up just as early as the day before to hike up a
                    different more difficult mountain. We were able to conqure that one as well, and when we got to the top we were 
                    so high up that we were above the clouds. On the third and the last day, we went on an easier hike that took us to 
                    the point were Poland, Slovakia, and Ukrain's borders all met. 
                </p>
            </div>
        </div>

        <!--Imports the footer from another php file by using include()-->
        <?php
            include($path.'assets/include/footer.php');
        ?>
    </body>
</html>