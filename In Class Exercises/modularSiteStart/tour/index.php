<?php
        /*
                variable $page will be used for many things -
                including the highlight of the nav, html title
        */
        $page = "tour";
        $path = "../";

        // Require header 
        require($path.'assets/inc/header.php');
        // Include navbar
        include($path.'assets/inc/nav.php');
?>

<h1>Tour page stuff</h1>
<div>(eventually, each page will be some includes and a db call only!)</div>

<?php
        // include footer
        include_once($path.'assets/inc/footer.php');
?>
