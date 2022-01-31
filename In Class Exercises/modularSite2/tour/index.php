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

<?php
	//now let's go get the content from the db...
	/*
		1) load the connection
		2) query
		3) execute the query
		4) do something with the results
	*/
	//1
	require $path.'../../../../dbConn.php';

	//2
	$sql= 'SELECT content from modSite WHERE page="' . $page . '"';

	//3
	$result = $conn->query($sql);

	//4
	if($result->num_rows > 0){
		//if I have at least one return 
		while($row = $result->FETCH_ASSOC()){
			echo $row['content'];
		}
	}
	else{
		echo '0 results found';
	}
	
?>

<?php
        // include footer
        include_once($path.'assets/inc/footer.php');
?>
