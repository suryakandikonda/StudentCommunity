<?php
	function setComment ($conn) {
		if(isset($_POST['feedbackSubmit'])) {
			$uid = $_POST['uid'];
			$date = $_POST['date'];
			$message = $_POST['message'];

			$sql = "INSERT INTO comments (uid,date,message) VALUES ('$uid','$date','$message')";

			$result = mysqli_query($conn,$sql);




		}
	}
