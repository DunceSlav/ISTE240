<?php
	// $_SESSION variables!  really the only way to have data
	// persist between pages (in the same domain).
	session_name('michael');
	session_start();
	
	//did they try to log in...
	if(!empty($_POST['uname']) && !empty($_POST['pass']) ){
		//connect to the db
		include '../../../dbConn.php';
		
		$stmt=$conn->prepare('SELECT pass FROM `240Login` WHERE uname=?');
		//bind
		$stmt->bind_param("s", $_POST['uname']);
		//execute
		$stmt->execute();
		//bind the results
		$stmt->bind_result($res);
		//For my 01 section, I failed to put in the fetch() command!
		$stmt->fetch();
		$stmt->close();
		//var_dump($res);
		//comparison
		if(password_verify($_POST['pass'], $res)){
			//set that they should be in!
			$_SESSION['login']=true;
			$_SESSION['name']=$_POST['uname'];
			//send them into the page
			header('Location: page.php');
		}
		
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset=utf-8" />
	<title>Login</title>
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
			User Name:
			<input type="text" name="uname" size="30" />
		</div>
		<div>
			Password:
			<input type="password" name="pass" size="30" />
		</div>
		<div class="clearfix">
			<input type="reset" value="Reset Form" />
			<input type="submit" value="Enter Site" />
			<div>
			<input type="button" value="Register" onclick="window.location='register.php'" />
			</div>
		</div>	
	</form>
</body>
</html>
