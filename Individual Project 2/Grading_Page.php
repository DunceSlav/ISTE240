<!DOCTYPE html>
<html lang="en">
    <!--Michael Pacholarz, ISTE-240, December 6 2021-->
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Michael's Trip to Poland - Grading Page</title>
    </head>

    <body>
        <!--Imports the header from another php file by using include()-->
        <?php 
            $path = './';
            include($path.'assets/include/header.php');
        ?>
        
        <h1 class="page-title">Grading Page</h1>
        <div class="content">
            <div class="main-text">
                <h2>Final:</h2>
                <ol>
                    <li><h3>Origional JavaScript and DHTML</h3>I combined my unique JavaScript component with the DHTML component of my site by creating a new page for the site. On this pafe is an image gallery, and the link to that page is in the footer labeled "Image Gallery". The origional JavaScript component is how to pictures themselves are displayed in a gallery format, and the DHTML part is the use of setTimeout() which automatically switched to a new picture every 5 seconds.</li>
                    <li><h3>Extras:</h3>I made sure to that the site looked well for both desktop users and mobile users, which is why I used media queries that changed some of the appearance of the site between the different screen sizes. </li>
                </ol>
                <h3>Validation pages: </h3>
                <ul>
                    <li><a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fsolace.ist.rit.edu%2F%7Emfp7158%2F240%2Ffinal%2Findex.php">index</a></li>
                    <li><a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fsolace.ist.rit.edu%2F%7Emfp7158%2F240%2Ffinal%2FJFK_to_ZRH.php">JFK to ZRH</a></li>
                    <li><a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fsolace.ist.rit.edu%2F%7Emfp7158%2F240%2Ffinal%2FGiedlarowa.php">Giedlarowa/Lezajsk</a></li>
                    <li><a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fsolace.ist.rit.edu%2F%7Emfp7158%2F240%2Ffinal%2FZagrodki.php">Zagrodki</a></li>
                    <li><a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fsolace.ist.rit.edu%2F%7Emfp7158%2F240%2Ffinal%2FLancut.php">Lancut</a></li>
                    <li><a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fsolace.ist.rit.edu%2F%7Emfp7158%2F240%2Ffinal%2FCarpathian_Mountains.php">Carpathian Mountains</a></li>
                    <li><a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fsolace.ist.rit.edu%2F%7Emfp7158%2F240%2Ffinal%2FTrzy_Korony.php">Trzy Korony</a></li>
                    <li><a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fsolace.ist.rit.edu%2F%7Emfp7158%2F240%2Ffinal%2FKrakow.php">Krakow</a></li>
                    <li><a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fsolace.ist.rit.edu%2F%7Emfp7158%2F240%2Ffinal%2FWieliczka_Salt_Mine.php">Wieliczka Salt Mine</a></li>
                    <li><a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fsolace.ist.rit.edu%2F%7Emfp7158%2F240%2Ffinal%2FOlsztyn.php">Olsztyn</a></li>
                    <li><a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fsolace.ist.rit.edu%2F%7Emfp7158%2F240%2Ffinal%2FKolobrzeg.php">Kolobrzeg</a></li>
                    <li><a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fsolace.ist.rit.edu%2F%7Emfp7158%2F240%2Ffinal%2Fcomments.php%3Fname%3D">Comments</a></li>
                    <li><a href="http://solace.ist.rit.edu/~mfp7158/240/final/Grading_Page.php">Grading Page</a></li>
                    <li><a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fsolace.ist.rit.edu%2F%7Emfp7158%2F240%2Ffinal%2FSources.php">Sources</a></li>
                    <li><a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fsolace.ist.rit.edu%2F%7Emfp7158%2F240%2Ffinal%2FimageGallery.php">Iamge Gallery</a></li>
                </ul>
                <h2>Midterm:</h2>
                <p class="text-adjust">This website utilzes: </p>
                <ul>
                    <li>code that is entirely written by myself</li>
                    <li>photos from the internet that have all been properly cited</li>
                    <li>conent that is split up into chunks utilizing different pages for different groups of imformation</li>
                    <li>an organized structure that can been seen across all pages of the site</li>
                    <li>an easy and consistant navigation menu at the top of every page in the site allowing easy navigation across the site</li>
                    <li>an external CSS for formating and style of all text in the website</li>
                    <li>a consistant color theme across the entire site</li>
                </ul>
            </div>
        </div>

        <!--Imports the footer from another php file by using include()-->
        <?php
            include($path.'assets/include/footer.php');
        ?>
    </body>
</html>