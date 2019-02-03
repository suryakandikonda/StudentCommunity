<?php
  session_start();
  date_default_timezone_set('Asia/Kolkata');
  include 'includes/dbh.inc.php';
  include 'includes/updatenews.inc.php';
  include 'includes/feedback.inc.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Admin Panel - UR Student Community</title>
  </head>
  <body class="text-center">

      <?php
        if (isset($_SESSION['u_uid'])) {
          echo "<form action='includes/logout.inc.php' method='POST'>
      <button type='submit' name='submit'>Log out</button>
    </form><br>";
    //include 'adminpanelsamp.php';
    echo '<h1 style="width: 100%; height: 30x; background-color: green; color: white; text-align: center;">Scrolling  Headline</h1>';
    echo "<form method='POST' action='".latestnews($conn)."'>
    <input type ='text' name='latest' style='width:500px; height:100%;'><br>
    <input type='radio' name='status' value='yesImportant' checked>yesImportant
      <input type='radio' name='status' value='noImportant'>noImportant<br><br>
    <button type='submit' name='update'>Update</button>
  </form>";

  echo "<h2>Current Headline</h2>";
  getUpdate($conn);


  
   echo '<div style="width: 100%; height: 20px; background-color: black;"></div>
  <h1 style="width: 100%; height: 30x; background-color: green; color: white; text-align: center; margin-top: 20px;">Feedback</h1>

  <div style="height: 500px; overflow: scroll;">';
    getFeedback($conn);
      $sql = "SELECT * FROM stuuploads ORDER BY cid DESC";
      $result = mysqli_query($conn,$sql);
      while($row = $result->fetch_assoc()){
        echo '
        <hr><form action="includes/stupostapprove.php" method="POST">
        <input type="text" name = "ciid" value="'.$row['cid'].'">
        <input type="text" name = "sturollno" value="'.$row['sturollno'].'">
        <input type="text" name = "title" value="'.$row['title'].'">
        <textarea rows = "10" name = "content">'.$row['content'].'</textarea>
        <input type="text" name = "filename" value="'.$row['filename'].'">
        <input type="text" name = "date" value="'.$row['date'].'">
        <input type="radio" name="status" value="approve">Approve<br>
        <input type="radio" name="status" value="disapprove">Disapprove<br>
        <button type="submit" name="submit">Submit</button>
        </form>
        ';
      }




        } 



        else {
          echo '<form class="form-signin" style="margin: 10px; margin-top: 20px;" action="includes/login.inc.php" method="POST">
      <h1 class="h3 mb-3 font-weight-normal">Admin Panel</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="text" class="form-control" placeholder="User Name" name="uid" required autofocus><br>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pwd" required><br>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">UR student Community</p>
    </form>';
        }
      ?>
    
      







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>