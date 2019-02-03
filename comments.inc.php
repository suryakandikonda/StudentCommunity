<?php
	function setComment ($conn) {
		if(isset($_POST['commentSubmit'])) {
			$uid = $_POST['uid'];
			$date = $_POST['date'];
			$message = $_POST['message'];

			$sql = "INSERT INTO comments (uid,date,message) VALUES ('$uid','$date','$message')";

			$result = mysqli_query($conn,$sql);

		}

		
	}
	function getComment ($conn){
		$counter = 0;
			$sql = "SELECT * FROM comments";
			$result = mysqli_query($conn,$sql);
			while($row = $result->fetch_assoc()){
				echo $row['cid']."...";
				echo $row['message']."<br><br>";
				$counter = $counter + 1;

			}
			

	}

	function apComment($conn) {
		if(isset($_POST['Approve'])) {
			$apid = $_POST['apr'];
			$message2 = $_POST['message'];

			$sql2 = "INSERT INTO approved2 (message) VALUES ('$message2')";

			$sql = "SELECT * FROM comments";
			$result = mysqli_query($conn,$sql);
			while($row = $result->fetch_assoc()){
				if($row['cid']==$apid){
					echo "<h1>------Approved---</h1>";
					echo $row['message']."<br><br>";
					break;
				}
				

			}

			$sql3 = "SELECT * FROM approved2";
			$result2 = mysqli_query($conn,$sql3);
			while($row2 = $result2->fetch_assoc()) {
				echo "<br><br><h1>Approved Messages</h1><br><br>";
				echo $row2['message']."<br><br>";

			}


		}
	}
?>