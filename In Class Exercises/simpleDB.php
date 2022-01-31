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

    //I want to connect to my dbConn.php file for the connection string
    include'../../../dbConn.php';

    //#2
    $sql = 'select * from petShop where type="fish" or type="cat"';

    //#3
    if($results = $conn->query($sql)){
        //good
        echo('select returned ' . $results->num_rows . ' rows of data');
    }
    else{
        //bad
        echo('issue with query');
    }

    //what do we have?
    //var_dump($results); //doesn't tell us much - that results is just mySqli Object

    //make a multi-dimensional associative array...
    if($results){
        //go build the array
        while($rowHolder = mysqli_fetch_array($results, MYSQLI_ASSOC)){
            $records[] = $rowHolder;
        }
    }

    //var_dump($records);

    //close conn
    mysqli_close($conn);

    //step 5 - html output
    $output = '<table border="1">';
    $th = array();

    //trip through all of the data ($results)
    foreach($records as $curRecord){
        //first time through I get the first result
        //I want to build the table header
        //$output .= '<tr><th>id</th><th>type></th>...'
        if(empty($th)){
            $th = array_keys($curRecord);
            $output .= '<tr><th>' . implode('</th><th>', $th) . '</th></tr>';
        }
        //I want to spit out the table
        $output .= '<tr>';
        foreach($curRecord as $name=>$val){
            $output .= '<td>' . $val . '</td>';
        }

    }
    $output .= '</table>';

    echo $output;
?>