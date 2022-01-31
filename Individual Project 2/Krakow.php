<!DOCTYPE html>
<html lang="en">
    <!--Michael Pacholarz, ISTE-240, December 6 2021-->
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Michael's Trip to Poland - Krakow</title>
    </head>

    <!--Imports the header from another php file by using include()-->
    <?php 
    $path = './';
    include($path.'assets/include/header.php');
?>
        
        <h1 class="page-title">Visiting the city of Krakow</h1>
        <div class="content">
            <div class="image">
                <img id="wawel_castle" src="assets/images/wawel_castle.jpg" alt="Wawel_Castle_in_Krakow">
            </div>
            <div class="main-text">
                <p class="text-adjust">From our trips to Poland's southern mountains, we went to the great city of Krakow. We rented 
                    an apartment for a week in the city. There we walked around a lot, looking at the many old buildings that were 
                    miraculously still standing. One of the many great building still standing was the Wawel Royal Castle. Before the 
                    capital of Poland used to be Warszawa, the capitol was Krakow and this castle was were the kings and queen's of 
                    Poland lived and ruled from for many years. In the castle we were able to see tombs of many of the kings and queens 
                    of Poland. Another great old structure that we visited was the Kosciol Mariacki, a huge brick Church built in 1347 
                    located in the center of the old city of Krakow. 
                </p>
            </div>
        </div>

        <!--Imports the footer from another php file by using include()-->
        <?php
            include($path.'assets/include/footer.php');
        ?>
    </body>
</html>