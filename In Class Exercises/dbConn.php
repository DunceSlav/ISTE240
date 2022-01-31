<?php
    //I want to get some info out of the db (petshop)
    /*
        hook into the db
        1) connect to the db
        2) build my query
        3) retireve my querey
        4) close my db connection
        5) do something with the results
    */

    //1) (serverConnectTo, accountName, pass, db)
    $conn = new mysqli("localhost", "mfp7158", "Virginia4@brigade", 'mfp7158');
    //make sure it worked
    if(mysqli_connect_errno()){
        print('connection failed');
    }
    else{
        //print('connection good');

        
    }
?>