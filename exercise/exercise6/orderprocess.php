<?php
    /* on this process page
        0) make the page (including header, footer, etc...)
        1) check if they sent in their number
            did - move on 
            did not - send it back to the orderform page and make the background of the ID pink
        2) find out what kind of pizza they want
        3) price it out with tax and print it to the page
    */

    $path = "./";
    $page = "Order Reciept";
    include $path.'assets/inc/header.php';
?>

    <div id="container">
        <h2>Pizza Reciept</h2>

        <?php
            //get the input!
            $cName = $_POST['customerName'];
            $cID = $_POST['customerID'];
            $pSize = $_POST['pizzaSize'];
            //grabs the intput from the options for the number of toppings on the pizza
            $cToppings = $_POST['numToppings'];

            //var_dump($_POST);

            //check the cutomer ID for a number 
            if(empty($cID)){
            //if the cID is empty, force the browser back to the first page!
            //this time, we will need to tell the first page to make the ID blank pink
            header('Location: orderform.php?name='.$cName);
            }
            else{
                if(!is_numeric($cID)){
                    //looks to see if the $cID is a number!
                    //not a number, tell them!
                    echo'<p>Cutomer ID ' . $cID . ' is nt a valid ID because it contains a non-numeric character!</p>';
                }
                else{
                    //process!
                    switch($pSize){
                        case 'P':
                            $pizzaCost = 7.99;
                            $pizzaType = 'Personal';
                            break;
                        case 'S':
                            $pizzaCost = 10.99;
                            $pizzaType = 'Small';
                            break;
                        case 'M':
                            $pizzaCost = 13.99;
                            $pizzaType = 'Medium';
                            break;
                        case 'L':
                            $pizzaCost = 16.99;
                            $pizzaType = 'Large';
                            break;
                        default: //if no choice was offered, then...
                            $pizzaCost = 13.99;
                            $pizzaType = 'Medium';
                    }

                    //determines the price for the number of toppings on the pizza on a case by case basis for all the options
                    switch($cToppings){
                        case '0':
                            $toppingsCost = 0.00;
                            $numToppings = 'None';
                            break;
                        case '1':
                            $toppingsCost = 2.00;
                            $numToppings = '1 topping';
                            break;
                        case '2':
                            $toppingsCost = 3.00;
                            $numToppings = '2 toppings';
                            break;
                        case '3':
                            $toppingsCost = 3.75;
                            $numToppings = '3 toppings';
                            break;
                        default: //if no choice was offered, then...
                            $toppingsCost = 0.00;
                            $numToppings = 'None';
                    }

                    //calculate the tax
                    //adds the cost of the pizza with the number of toppings selected before calculating tax
                    $taxAmt = ($pizzaCost + $toppingsCost)* .08;
                    //added topping cost to the total coast
                    $totalCost = $pizzaCost + $toppingsCost + $taxAmt;

                    //print the reciept 
                    //money format - make it changeable
                    $fmt = numfmt_create('en_US', NumberFormatter:: CURRENCY);

                    ?>
                        <div>Your Delicious Pizza Order!<br/>
                        <br/>
                        Pizza Price: 
                    <?php
                        echo numfmt_format_currency($fmt, $pizzaCost, "USD");
                        //added a display for the cost for toppings option selected 
                        echo "<br/>Topping Price: " . numfmt_format_currency($fmt, $toppingsCost, "USD");
                        echo "<br/>Tax Amount: " . numfmt_format_currency($fmt, $taxAmt, "USD");
                        echo "<br/>Total Cost: " . numfmt_format_currency($fmt, $totalCost, "USD");

                        echo "<div>Thank you, " . $cName . "</div>";

                        echo'</div>';
                }
            }
        ?>
    </div>

<?php
    include $path.'assets/inc/footer.php';
?>