<!DOCTYPE html>
<html lang="en">
    <!--Michael Pacholarz, ISTE-240, December 6 2021-->
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Michael's Trip to Poland - Kolobrzeg</title>
    </head>

    <body>
        <!--Imports the header from another php file by using include()-->
        <?php 
            $path = './';
            include($path.'assets/include/header.php');
        ?>
        
        <h1 class="page-title">Visiting the city of Kolobrzeg</h1>
        <div class="content">
            <div class="image">
                <img id="kolobrzeg" src="assets/images/kolobrzeg.png" alt="kolobrzeg_on_map">
            </div>
            <div class="main-text">
                <p class="text-adjust">The last stop in our journey across Poland was the small city of Kolobrzeg on the Baltic Sea. 
                    There to end of the journey across Poland my grandma, uncle, and cousin booked a hotel and spa near the sea for 
                    a few days of rest. The spa was brand new and had many saunas and steam rooms, as well as the giant heated indoor 
                    swimming pool that was open 24/7. As nice as the pools were, we were really there for the Baltic Sea. We had a blast 
                    playing in the sand and having fun on the beach, but couldn't swim in the water for too long because it was really 
                    cold even in the middle of the summer. And with this great time at the beach we had to head back to my grandma's house 
                    because my two month stay with them in Poland was nearly over. 
                </p>
            </div>
        </div>

        <!--Imports the footer from another php file by using include()-->
        <?php
            include($path.'assets/include/footer.php');
        ?>
    </body>
</html>