<!DOCTYPE html>
<html lang="en">
    <!--Michael Pacholarz, ISTE-240, December 6 2021-->
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Michael's Trip to Poland - Lancut</title>
    </head>

    <body>
        <!--Imports the header from another php file by using include()-->
        <?php 
            $path = './';
            include($path.'assets/include/header.php');
        ?>
        
        <h1 class="page-title">Visiting the city of Lancut</h1>
        <div class="content">
            <div class="image">
                <img id="lancut_castle" src="assets/images/lancut_castle.JPG" alt="Lancut_castle">
            </div>
            <div class="main-text">
                <p class="text-adjust">On the days that we weren't visitig family, we were out travelling and visiting many of the
                    older cities of Poland. One of the cities that we first visited was Lancut. Lancut is a very beautiful city with 
                    its tourism based around an old medival castle built in the 14th century. Around the castle there has been a large 
                    garden constructed around the castle. Even though we were told it is most beautiful during the spring time, the 
                    garden was still very beautiful. Inside the castle, there are many grand rooms, however in my opinion the most 
                    interesting of the rooms was the garage which hosed many carriges and cars throughout the ages. In the city, 
                    after we were done with the castle we found a great little resturant and tried something called a zapiekanka. 
                    The best I can descibe it as is a pizza but on a baguette. They were very delicious. 
                </p>
            </div>
        </div>

        <!--Imports the footer from another php file by using include()-->
        <?php
            include($path.'assets/include/footer.php');
        ?>
    </body>
</html>