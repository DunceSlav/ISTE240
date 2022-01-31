<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Clean input</title>
 	<style type="text/css">
 		form div
 		{
 			margin: 1em;
 		}
 		form div label
 		{
 			float: left;
 			width: 10%;
 		}
 		form div.radio {
 			float: left;
 		}
 		.clearfix {
 			clear: both;
 		}
 	</style>
</head>
<body>
	<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<div>
			<label>Name:</label>
			<input type="text" name="fname" size="30" />
		</div>
		<div>
			<label>Email:</label>
			<input type="text" name="email" size="30" />
		</div>
		<div>
			<label>Date:</label>
			<input type="text" name="date" size="30" />
		</div>
		<div>
			<label>Comments:</label>
			<textarea name="comments" rows="3" cols="30"></textarea>
		</div>
		<div>
			<label>Mood:</label>
			<div class="radio">
				<input type="radio" name="mood" value="happy" />Happy<br />
				<input type="radio" name="mood" value="mad" />Mad<br />
				<input type="radio" name="mood" value="indifferent" />Indifferent<br />
			</div>
		</div>
		<div class="clearfix">
			<input type="reset" value="Reset Form" />
			<input type="submit" name="submit" value="Submit Form" />
		</div>	
	</form>
	
	<?php
		/*
		 we want to make sure that the data is:
		 1) the right kind of data
		 2) not an injection
		*/

		include 'validations.php';

		function sanitize($str, $length=50){
			$str = trim($str);
			$str = htmlentities($str, ENT_QUOTES);
			return substr($str,0,$length);

		}

		//name
		if(!empty($_POST['fname'])){
			echo '<h2>Welcome: ' .sanitize( $_POST['fname']) . '</h2>';
		}

		//date
		//use the included methods
		if(!empty($_POST['date'])){
			$d = sanitize($_POST['date'],30);
			$dateTest = date1($d);
			if($dateTest){
				echo "you entered a good date: " . $d;
			}
			else{
				echo "you couldn't do your one job...";
			}
		}

		//email
		//php filters...
		$email = (empty($_POST['email']))?"joe@test.com":$_POST['emial'];

		//remove all illegal chars from email
		$email = filter_var($email,FILTER_SANITIZE_EMAIL);

		//validate the email adress!
		if(!filter_var($email,FILTER_VALIDATE_EMAIL) === false){
			//good go into the database
			echo "<p>" . $email . " is a valid email address</p>";
		}
		else{
			echo "<p>" . $email . " is NOT a valid email address</p>";
		}

		//deny list vs allow list!
		//allow list
		$good = array("happy"=>"glad", "mad"=>"sorry", "indifferent"=>"uniterested");
		if(!empty($_POST['mood']) && array_key_exists($_POST['mood'], $good)){
			echo "I am " . $good[$_POST['mood']] . " that you feel that way";
		}

		
	?>
	
</body>
</html>
