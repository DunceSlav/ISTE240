<?php
/**
 * Connect to the database.
 */

 require_once('../../dbConn.php');

 // first, if there is data coming in (lName, fName) then put them into the database table
 //if the data coming in is from the client then we must use prepared statements 
 /*
	prepared statements
	1) prepare the query
	2) bind the paramenters
	3) execute the query
	4) close
*/
$stmt = $conn->prepare('INSERT INTO `240Insert` (first, last) VALUES (?, ?)');
$stmt->bind_param("ss", $_GET['fName'], $_GET['lName']);
//now actually do something
$stmt->execute();
$stmt->close();

 // go get all the contents of the databse table and record them
 // get the contents of the table
 $res = $conn->query('select first, last from `240Insert`');
 if($res){
	 //put it in a var that I can use later (in the id="list" part)
	 while($rowHolder = mysqli_fetch_array($res,MYSQLI_ASSOC)){
		 $records[] = $rowHolder;

		 /*
			$records[0]['first']='dan';
			$records[0]['last']='bogaard';
			$records[1]['first']='jim';
			$records[1]['last']='leone';
			$records[2]['first']='fred';
			$records[2]['last']='flinstone';
		 */
	 }
 }
 //close the db connection
 $conn->close();

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>240 DB Insert</title>
	</head>
	<body>
		<h3>The List</h3>
		<div id="list">
			<ul>
			<?php
				//will use for output
				foreach($records as $thisRow){
					echo '<li>' . $thisRow['last'] . ', ' . $thisRow['first'] . '</li>';
				}
			?>
			</ul>
		</div>
		<hr/>
		<h3>Add to the list</h3>
		<form action="preparedStatement.php" method="get">		
			First name: <input type="text" id="first" name="fName" />
			Last name: <input type="text" id="last" name="lName"/>
			<input type="submit" value="Add to the List"/>
		</form>
	</body>
</html>