<?php
  date_default_timezone_set('Asia/Kolkata');
  include 'includes/contachdatabase.inc.php';
  include 'includes/feedback.inc.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Chela+One|Coda+Caption:800|Courgette|Gaegu|Gloria+Hallelujah|Gochi+Hand|Indie+Flower|Knewave|Pacifico|Shadows+Into+Light|Shrikhand" rel="stylesheet">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Contact us</title>
  </head>
  <body style="background-image: linear-gradient(to right,#29ACE4,#084F7C);">
    <!--NAV BAR-->
    <a id="ddmenuLink" href="nav.html"></a>

   <div style= "max-width: 100%;max-height: 100%; margin: 10px; padding-bottom: 10px; padding-top: 100px;">
   <div style="color: white;">
    <h1 style="text-align: center; font-family: 'Gloria Hallelujah', cursive; padding-top: 5px;">Get in touch with us...</h1>
    <h3 style="text-align: center; font-family: 'Gloria Hallelujah', cursive; padding-top: 5px;">We respect your feedback</h3>

    <?php 

    echo "<form style='margin:50px;' method='POST' action='".setFeedback($conn)."'>
    <marquee> <h6>You are posting Anonymously... </h6></marquee>





    <input type='hidden' name='uid' value='Anonymous'>
    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>

  
    <label for='exampleFormControlTextarea1'>Message:</label>
    <textarea class='form-control' id='exampleFormControlTextarea1' rows='5' name='message' style='box-shadow:5px 5px 20px black;'></textarea>
  </div>
  <input class='btn btn-primary' type='submit' value='Submit' name='feedbackSubmit'>
</form>";
?>
</div>
</div>




  <!--Script for Nav Bar-->
<script src="js/ddmenu.js" type="text/javascript"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>