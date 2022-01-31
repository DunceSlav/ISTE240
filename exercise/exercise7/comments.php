<?php
/**
 * Connect to the database.
 */

 require_once('../../../dbConn.php');

 // first, if there is data coming in (lName, fName) then put them into the database table
 //if the data coming in is from the client then we must use prepared statements 
 /*
	prepared statements
	1) prepare the query
	2) bind the paramenters
	3) execute the query
	4) close
*/
$stmt = $conn->prepare('INSERT INTO `Comments` (sender, message) VALUES (?, ?)');
$stmt->bind_param("ss", $_GET['name'], $_GET['content']);
//now actually do something
$stmt->execute();
$stmt->close();

 // go get all the contents of the databse table and record them
 // get the contents of the table
 $res = $conn->query('SELECT sender, message, date FROM `Comments`');
 if($res){
	 //put it in a var that I can use later (in the id="list" part)
	 while($rowHolder = mysqli_fetch_array($res,MYSQLI_ASSOC)){
		 $records[] = $rowHolder;
	 }
 }
 //close the db connection
 $conn->close();

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Exercise 7 - Comments</title>
	</head>
	<body>
		<h3>The List</h3>
		<div id="list">
			<ul>
			<?php
				//will use for output
				foreach($records as $thisRow){
					echo '<li>' . $thisRow['sender'] . ': ' . $thisRow['message'] . ' @ ' .$thisRow['date'] . '</li>';
				}
			?>
			</ul>
		</div>
		<hr/>
		<h3>Add to the list</h3>
		<form method="get">		
			First name: <input type="text" id="sender" name="name" />
            </br>
            <textarea id="message" name="content" rows="4" cols="30" placeholder="say what?"></textarea>
			<input type="submit" value="Add to the List"/>
		</form>
	</body>
</html>