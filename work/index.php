<?php

include_once('User.php');

if(isset($_POST['submit'])){
	$username = $_POST['user'];
	$pass = $_POST['pass'];
	
	$object = new User();
	$object->Login($username,$pass);
}

?>




<html>

<head></head>

<body>


		<form method ="post" action="index.php">
			username: <input type="text" name="user"/>
			password: <input type="text" name="pass"/>
			<input type="submit" name="submit" value="Login"/>
		</form>
</body>
</html>
			