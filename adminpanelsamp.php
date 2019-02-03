<?php
  date_default_timezone_set('Asia/Kolkata');
  include 'includes/dbh.inc.php';
  include 'updatenews.inc.php';
  include 'feedback.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sample Admin Panel</title>
</head>





<body>
	<h1 style="width: 100%; height: 30x; background-color: green; color: white; text-align: center;">Scrolling  Headline</h1>

<?php
	echo "<form method='POST' action='".latestnews($conn)."'>
		<input type ='text' name='latest' style='width:500px; height:100%;'><br>
		<input type='radio' name='status' value='yesImportant' checked>yesImportant
  		<input type='radio' name='status' value='noImportant'>noImportant<br><br>
		<button type='submit' name='update'>Update</button>
	</form>";

	echo "<h2>Current Headline</h2>";
	getUpdate($conn);


	?>
	<div style="width: 100%; height: 20px; background-color: black;"></div>
	<h1 style="width: 100%; height: 30x; background-color: green; color: white; text-align: center; margin-top: 20px;">Feedback</h1>

	<div style="height: 200px; overflow: scroll;">
	<?php
		getFeedback($conn);
	?>
</div>




</body>
</html>