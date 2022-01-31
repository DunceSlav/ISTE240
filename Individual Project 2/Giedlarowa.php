<!DOCTYPE html>
<html lang="en">
    <!--Michael Pacholarz, ISTE-240, December 6 2021-->
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Michael's Trip to Poland - Giedlarowa</title>
    </head>

    <body>
        <!--Imports the header from another php file by using include()-->
        <?php 
            $path = './';
            include($path.'assets/include/header.php');
        ?>
        
        <h1 class="page-title">Visiting my family in Giedlarowa/Lezajsk</h1>
        <div class="content">
            <div class="image">
                <img id="giedlarowa_map" src="assets/images/Giedlarowa_map.png" alt="Giedlarowa_on_map">
            </div>
            <div class="main-text">
                <p class="text-adjust">After landing in the Rzeszow airport, I had to go through all the customs and security as usual. 
                    After grabbing my luggage, I headed out and was met by my grandma, uncle, and cousin. After much hugging, we went 
                    to their car, and started to make our way to my grandma's house. The car took an hour, but it felt like mere seconds 
                    because I fell asleep as I was exhausted from the plane. Once at the house, I got unpacked and we all had dinner. 
                    The next few days, we went to visit some family and friends that we had not seen for a long time. Also, during 
                    this time, we went to the city of Giedlarowa and went shopping and ate at a few resturants. We also went to the 
                    city public pool which had an indoor water slide. 
                </p>
            </div>
        </div>

        <!--Imports the footer from another php file by using include()-->
        <?php
            include($path.'assets/include/footer.php');
        ?>
    </body>
</html>