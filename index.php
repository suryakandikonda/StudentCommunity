<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>




	<?php
		if (isset($_SESSION['u_uid'])) {
			echo "<form action='includes/logout.inc.php' method='POST'>
			<button type='submit' name='submit'>Log out</button>
		</form>";
		} else {
			echo "<form action='includes/login.inc.php' method='POST'>
			<input type='text' name='uid' placeholder='Usernmae/Email'>
			<input type='password' name='pwd' placeholder='Password'>
			<button type='submit' name='submit'>Log in</button>
		</form>

		<a href='signup.php'>Sign Up</a>";
		}
	?>

</body>
</html>