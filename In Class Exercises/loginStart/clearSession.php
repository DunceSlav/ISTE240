<?php
    session_name('michael');
    session_start();

    //kill it all
    session_unset();
    session_destroy();
    header('Location: index.php');
?>
