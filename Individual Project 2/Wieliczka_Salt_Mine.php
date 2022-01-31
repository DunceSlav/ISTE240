<!DOCTYPE html>
<html lang="en">
    <!--Michael Pacholarz, ISTE-240, December 6 2021-->
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Michael's Trip to Poland - Wieliczka Salt Mine</title>
    </head>

    <body>
        <!--Imports the header from another php file by using include()-->
        <?php 
            $path = './';
            include($path.'assets/include/header.php');
        ?>
        
        <h1 class="page-title">Visiting the Wieliczka Salt Mine</h1>
        <div class="content">
            <div class="image">
                <img id="wieliczka_salt_mine" src="assets/images/Wieliczka_salt_mine.jpg" alt="Curch_in_Wieliczka_Salt_Mine">
            </div>
            <div class="main-text">
                <p class="text-adjust">Just outside of the city of Krakow, there is a centuries old salt mine. This salt mine is 
                    located in the small town of Wieliczka. The mine was first opened in the 13th century, and continued to 
                    extract salt from the ground up until 1996, when it was closed due to falling salt prices and constant flooding. 
                    Since its closing, the mine has been since reopened as a museum, that operates tours in the tunnels bellow. In 
                    tunnels there are many thousands of statues, all made of salt. However the most impresive feat of all, is an 
                    entire church that was carved from the rock. When Pope John Paul II made one of his many visits to Poland, he 
                    went to the church in the mine and said Mass there.
                </p>
            </div>
        </div>

        <!--Imports the footer from another php file by using include()-->
        <?php
            include($path.'assets/include/footer.php');
        ?>
    </body>
</html>