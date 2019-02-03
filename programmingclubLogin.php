<?php
  session_start();
  date_default_timezone_set('Asia/Kolkata');
  include 'includes/dbh.inc.php';
  ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Programming Club Admin Panel - URS Community</title>
  </head>
  <body class="text-center">

      <?php
        if (isset($_SESSION['u_uid'])) {
          echo "<br><br><h1> &#128435; Programming Club Admin Panel</h1><br><br><hr>";
          echo "<form action='includes/programminglogout.inc.php' method='POST'>
      <button type='submit' name='logout'>Log out</button>
    </form><br>";

         echo " 
         <div class='container border border-info'><br>
         <h2>Feed Update</h2><hr>

         <form action='includes/programmingclubuploads.inc.php' method='POST' enctype='multipart/form-data' style='margin:70px;'>

      <label for='formGroupExampleInput'>Title</label>
    <input type='text' class='form-control' id='formGroupExampleInput' name='title' style='font-weight:bold;'>
     <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
    <label for='exampleFormControlTextarea1'>Write Here</label>
    <textarea class='form-control' id='exampleFormControlTextarea1' rows='8' name='content'></textarea>
   <div class='form-group'>
    <label for='exampleFormControlFile1' style='margin-top: 10px;'>Upload Images</label>
    <input type='file' class='form-control-file' id='exampleFormControlFile1' name='file'>
  </div>
  <pre style='color: black;''>By clicking , you agree to our <a href='termsandconditions.html' style='text-decoration:none; color: blue;''>Terms and Conditions</a></pre>
  <input class='btn btn-primary' type='submit' value='Upload' name='submit'>
</form>
</div>
"
;
        } 



        else {
          echo '
          <div class="container" style="padding-top:100px;">
          <form class="form-signin" style="margin: 10px; margin-top: 20px;" action="includes/programmingclublogin.inc.php" method="POST">
      <h1 class="h3 mb-3 font-weight-normal">Programming Club Admin Panel</h1><br><br>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="text" class="form-control" placeholder="User Name" name="uid" required autofocus><br>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pwd" required><br>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">UR Student Community</p>
    </form>
    </div>';
        }
      ?>
    
      







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>