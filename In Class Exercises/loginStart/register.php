<?php
	//if everything is filled in and the passwords the same
	if(!empty($_POST['uname']) && !empty($_POST['pass']) && !empty($_POST['pass2']) && passMatch()){
		include_once '../../../dbConn.php';

		//to put the uname and the pass we MUST use a prepared statment!
		$stmt=$conn->prepare('INSERT INTO `240Login` (uname,pass) VALUES(?,?)');
		//the thrid agr is the password hashed!
		//password_hash(thePass, theSalt);
		$newPass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
		$stmt->bind_param("ss", $_POST['uname'], $newPass);
		$stmt->execute();
		$stmt->close();
		//once we put it into the db, send them back to the login page
		header('Location: index.php');
	}
	function passMatch(){
		if(strcmp($_POST['pass'],$_POST['pass2'])==0){
			return true;
		}else{
			return false;
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset=utf-8" />
	<title>Register</title>
 	<style type="text/css">
 		form div{
 			margin: 1em;
 		}
 		form div label{
 			float: left;
 			width: 10%;
 		}
 		form div.radio{
 			float: left;
 		}
 		.clearfix{
 			clear: both;
 		}
 	</style>
</head>
<body>
	<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<div>
			User Name:
			<input type="text" name="uname" size="30" />
		</div>
		<div>
			Password:
			<input type="password" name="pass" size="30" />
		</div>
		<div>
			Password (again):
			<input type="password" name="pass2" size="30" />
		</div>
		<div class="clearfix">
			<input type="reset" value="Reset Form" />
			<input type="submit" value="Submit Form" />
		</div>	
	</form>
</body>
</html>
