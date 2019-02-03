<?php
	date_default_timezone_set('Asia/Kolkata');
	include 'dbh.inc.php';
	include 'comments.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Comment Section Practice</title>
</head>
<body>









<?php
	echo "<form method='POST' action='".setComment($conn)."'>
		<input type='hidden' name='uid' value='Anonymous'>
		<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
		<textarea name='message'></textarea>
		<button type='submit' name='commentSubmit'>Comment</button>
	</form>";

?>
</body>
</html>