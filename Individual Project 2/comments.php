<!--Michael Pacholarz, ISTE-240, December 6 2021-->
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
$stmt = $conn->prepare('INSERT INTO `projectComments` (sender, message) VALUES (?, ?)');
if($_GET['name'] != "" && $_GET['content'] != ""){
	$x=clean($_GET['name']);
	$y=clean($_GET['content']);
	$stmt->bind_param("ss", $x, $y);
	//now actually do something
	$stmt->execute();
}
$stmt->close();

 // go get all the contents of the databse table and record them
 // get the contents of the table
 $res = $conn->query('SELECT sender, message, date FROM `projectComments`');
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
		<link rel="stylesheet" href="assets/css/style.css">
		<title>Michael's Trip to Poland - comments</title>
	</head>
	<body>
		<!--Imports the header from another php file by using include()-->
        <?php 
            $path = './';
            include($path.'assets/include/header.php');
        ?>

		<!--checks if the form is filled out before submitting-->
		<script>
		function validateForm() {
			//checks if the name field is filled out
			if (document.forms["commentForm"]["name"].value == "") {
				alert("Name field must be filled out to submit a comment");
				return false;
			}
			//chcecks if the comment field is filled out
			if (document.forms["commentForm"]["content"].value == "") {
				alert("Content field must be filled out to submit a comment");
				return false;
			}
		}
		</script>

		<!--sanitization, but don't know where to implement-->
		<?php
			function clean($value){
				$value=trim($value);
				$value=stripslashes($value);
				$value=strip_tags($value);
				return $value;
			}
		?>

		<!--form to add a comment-->
		<h3>Add a comment</h3>
		<form name="commentForm" method="get" onsubmit="return validateForm()">		
			Name: <input type="text" id="sender" name="name" />
			<br>
			<textarea id="message" name="content" rows="4" cols="30" placeholder="say something ..."></textarea>
			<br>
			<input type="submit" value="Add Comment"/>
		</form>
		<hr/>
		<!--all comments printed out on screen-->
		<h3>Comments</h3>
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

		<!--Imports the footer from another php file by using include()-->
        <?php
            include($path.'assets/include/footer.php');
        ?>
	</body>
</html>