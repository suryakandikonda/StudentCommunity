<?php
	mysqli_connect("127.0.0.1","root","root");
	mysqli_select_db("comments");

	$name = $_POST["name"];
	$comment = $_POST["comment"];

	mysqli_query("INSERT INTO com VALUES('','$name','$comment')");
	header("location:com.php");
?>