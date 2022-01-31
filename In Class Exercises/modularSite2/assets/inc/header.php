<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        
        <!-- Grabs php from $page variable -->
        <title><?php echo $page;?></title>

        <link href="<?php echo $path;?>assets/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo $path;?>assets/css/nav.css" rel="stylesheet">
        <link href="<?php echo $path;?>assets/css/style.css" rel="stylesheet">
</head>
<body>
<header id="top">
        <div id="toptext">
                <?php echo "<h2>$page</h2>";?>
        </div>
</header>
<section id="maincontainer">
        <div id="contentwrapper">
                <div id="contentcolumn">
                        <div class="innertube">

