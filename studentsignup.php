<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="animate.css">

    <title>Student Sign up - UR Student Community</title>
  </head>
  <body style="background-image: linear-gradient(to right,#29ACE4,#084F7C);">
    <!--NAV BAR-->
    <a id="ddmenuLink" href="nav.html"></a>

    <div style="background:#101010;height: 100%; padding-top: 120px; color: white; text-align: center;">
      <div style="margin: 10px;">
        <h4 class="animated bounceInLeft">One Community for us...</h4>
        <h3 class="animated bounceInRight delay-5s slow">Explore now by registering here</h3>
      </div>
        
      
    </div>

    <div style="color: white;text-align: center;padding-top: 120px;">
      <h1>Register Here</h1>
    </div><br>
    <div style="background-color: white;width: 100%;height: 3px;"></div>
    <div style="color: black; margin: 50px;">
      <form action="includes/stusignup.inc.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="pwd">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Roll No.</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Ex: 17NG1A05B0" name="rollno">
  </div>
  <div class="form-group">
    <label for="inputAddress">Name: </label>
    <input type="text" class="form-control" id="inputAddress" name="stuname">
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputState">Branch</label>
      <select id="inputState" class="form-control" name="branch">
        <option selected>Select.. </option>
        <option>Computer Science and Engineering (CSE)</option>
        <option>Information Technology (IT)</option>
        <option>Electronics and Communication Engineering (ECE)</option>
        <option>Electrical and Electronics Engineering (EEE)</option>
        <option>Mechanical Engineering (Mech)</option>
        <option>Civil Engineering (CE)</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Year</label>
      <select id="inputState" class="form-control" name="year">
        <option selected>Select.. </option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
    </div>
  </div>


<pre style="color: white;">By clicking Register, you agree to our <a href="termsandconditions.html" style="text-decoration:none; color: black;">Terms and Conditions</a></pre>
<pre style="color: white;">If anything wrong with the registration, write us at : *****</pre>
  <button type="submit" class="btn btn-primary" name="submit">Register</button>
</form>
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