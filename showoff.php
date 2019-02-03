<?php
  date_default_timezone_set('Asia/Kolkata');
?>

<!doctype html>
<html lang='en'>
  <head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <link rel='stylesheet' type='text/css' href='animate.css'>
    <link href="https://fonts.googleapis.com/css?family=Play|Raleway|Roboto|Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Lato|Open+Sans|PT+Sans|Source+Sans+Pro" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' integrity='sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB' crossorigin='anonymous'>

    <title>Show Off - Share your Talents here</title>
  </head>
  <body style="font-family: 'Lato',sans-serif;">
    <!--NAV BAR-->
    <a id='ddmenuLink' href='nav.html'></a>
    <div class='container-fluid' style='background-color: black; height: 100%;'>
      <!-- HEDING-->
      <div style='color: white; padding-top: 55px; background-image:linear-gradient(#213b06,black);'>
          <h2 class = 'animated wobble' style='text-align: center;padding-top: 45px; font-family:"Dancing Script",sans-serif; '>This is where the Fun begins...</h2><br><br>
      </div>

      <!--NOTE-->
      <div>
        <ul style='padding-top: 15px;'>
          <div style='text-align: center; list-style-position:inside; list-style-image: url(images/important.gif); color: white;'>
          <li>We encourage you to share your talents to the Campus</li>
          <li>You can Dance? or Sing? or Done any Mini Project? or You are good at Article Writing?.. Just Share here.. </li>
          <li>Even your opinions on the Campus are free to share here.. </li>
          <li>Please read <a href='termsandconditions.html'>Terms and Conditions</a> for more information</li>
          <li>Not yet registered?.. Register now from <a href='studentRegister.php'>here</a></li>
        </div>
        </ul>
      </div>

      <!-- UPLOAD -->
      <?php 
      echo "
      <div style='margin: 10px; color: white;'>


       <form action='includes/stuuploads.inc.php' method='POST' enctype='multipart/form-data'>
  <div class='form-row'>

    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>

    <div class='form-group col-md-6'>
      <label for='formGroupExampleInput'>Roll No.</label>
    <input type='text' class='form-control' id='formGroupExampleInput' placeholder='Ex: 17NG1A05B0' name='sturollno' onkeydown='upperCaseF(this)'>
    <script type='text/javascript'>
        function upperCaseF(a){
    setTimeout(function(){
        a.value = a.value.toUpperCase();
    }, 1);
}
      </script>
    <label for='exampleInputPassword1'>Password</label>
    <input type='password' class='form-control' id='exampleInputPassword1' placeholder='Password' name='stupwd'>
    </div>
  </div>
    <div>
      <label for='formGroupExampleInput'>Title</label>
    <input type='text' class='form-control' id='formGroupExampleInput' name='title' style='font-weight:bold;'><br>
    <label for='exampleFormControlTextarea1'>Write Here (Copy the content you typed for safety)</label>
    <textarea class='form-control' id='exampleFormControlTextarea1' rows='7' name='content'></textarea>
  </div>
   <div class='form-group'>
    <label for='exampleFormControlFile1' style='margin-top: 10px;'>Upload Images</label>
    <input type='file' class='form-control-file' id='exampleFormControlFile1' name='file'>
  </div>
  <pre style='color: white;''>By clicking Register, you agree to our <a href='termsandconditions.html' style='text-decoration:none; color: blue;''>Terms and Conditions</a></pre>
  <input class='btn btn-primary' type='submit' value='Upload' name='submit'>
</form>

      </div>
</div>
";
?>

<script type="text/javascript">
      var x = document.URL;
      if(x.indexOf("empty")!=-1){
        alert("Empty fields found. Refresh this page and upload again..");
      }
      if(x.indexOf("studentnotfound")!=-1){
        alert("Given Roll no is not registered with the community.. Please register...");
      }
      if(x.indexOf("roll/pwderror")!=-1){
        alert("Username/Password Incorrect. Refresh this page and upload again.. ");
      }
      if(x.indexOf("bigfilesize")!=-1){
        alert("Uploaded size is too big. Max. File size should be less than 5MB. Refresh this page and upload again..");
      }
      if(x.indexOf("error")!=-1){
        alert("Unexpected error caught. Refresh this page and upload again..");
      }
      if(x.indexOf("filetype")!=-1){
        alert("Please check the type of uploaded file. Refresh this page and upload again..");
      }
      if(x.indexOf("success")!=-1){
        alert("Your upload is success. We will review it and make it public. Thank You..");
      }

    </script>





  <!--Script for Nav Bar-->
<script src='js/ddmenu.js' type='text/javascript'></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js' integrity='sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js' integrity='sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T' crossorigin='anonymous'></script>
  </body>
</html>