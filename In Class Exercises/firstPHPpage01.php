<?php
    //php is here
    $f_name = "Dan";
    $title = "My First PHP Page";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?php echo $title;?></title>
    </head>
    <body>
        <?php
            //var_dump('REMOTE_ADDR');
            //var_dump($_SERVER);

            //if there is a $_GET of 'name'
            if( isset($_GET['name'])){
                echo $_GET['name'];
            }
            else{
                echo 'there was no get';
            }

            phpInfo();

            include 'footer.php';
        ?>
    </body>
</html>