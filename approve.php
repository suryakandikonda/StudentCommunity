<?php
	date_default_timezone_set('Asia/Kolkata');
	include 'dbh.inc.php';
	include 'comments.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel - Sample</title>
</head>
<body>



<?php
	getComment ($conn);

echo "<form method='POST' action='".apComment($conn)."'>
<input type='number' name='apr' style='width: 100px; height: 100px;''>
<button type='submit' name='Approve'>Approve</button>

</form>";
?>




</body>
</html>