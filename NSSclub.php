<?php
include 'includes/dbh.inc.php';
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Architects+Daughter|Audiowide|Bad+Script|Calligraffitti|Gochi+Hand|Indie+Flower|Josefin+Sans|Mirza|Nanum+Pen+Script|Neucha|Nothing+You+Could+Do|Prompt|Rancho|Reenie+Beanie|Sacramento|Ubuntu|Wendy+One|Work+Sans|Merriweather|Montserrat" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>NSS Club - UR Student Community</title>
  </head>
  <body style="margin: 0px;">
    <!--NAV BAR-->
    <a id="ddmenuLink" href="nav.html"></a>
    <!--Slide show-->

    <div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: 60px; width: 100%;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="000.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="000.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="000.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!--HEADING-->
<div style="background-color: #141414; height: 100px; color: white; text-align: center;">
  <h1 style="font-family: Helvetica; padding-top: 20px;">&#128394; NSS Club</h1>
</div>


<!--Coordinators-->
<div style="background-color: white; padding-top: 10px; margin: 10px;">
  <h3 style="text-align: center; padding-bottom: 10px; border-left: 5px solid red;">Coordinators</h3>
  <table class="table container" style="">
  <thead class="thead-light">
    <tr>
      <th scope="col">Roll No</th>
      <th scope="col">Name</th>
      <th scope="col">Designation</th>
      <th scope="col">email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">17NG1A05B0</th>
      <td>Shsdgsdgsfdgs</td>
      <td>President</td>
      <td>dhshgdhsgdg@gmail.com</td>
    </tr>
    <tr>
      <th scope="row">17NG1A05B0</th>
      <td>Shsdgsdgsfdgs</td>
      <td>President</td>
      <td>dhshgdhsgdg@gmail.com</td>
    </tr>
    <tr>
      <th scope="row">17NG1A05B0</th>
      <td>Shsdgsdgsfdgs</td>
      <td>President</td>
      <td>dhshgdhsgdg@gmail.com</td>
    </tr>
    <tr>
      <th scope="row">17NG1A05B0</th>
      <td>Shsdgsdgsfdgs</td>
      <td>President</td>
      <td>dhshgdhsgdg@gmail.com</td>
    </tr>
  </tbody>
</table>
</div>









<!-- FEED-->
  <div style="width: 100%; height: 100%; background-color: #F6F6F6; margin:10px; padding-top: 10px;">
    <h3 style="text-align: center;padding-bottom: 10px; border-left: 5px solid yellow;">FEED</h3>
    <div style="width: 100%; height: 5px; background-color: black; animation-name: borderstyle; animation-duration: 5s;animation-iteration-count: infinite;"></div>

    <div style="margin: 50px; font-family: 'Montserrat',sans-serif;">

    <!--POSTS-->

    <?php

          $sql = "SELECT * FROM NSSclubuploads ORDER BY  cid DESC";
      $result = mysqli_query($conn,$sql);
      while($row = $result->fetch_assoc()) 
      { 
        $content = $row['content'];
        $contdis = substr($content, 0, 500); 
        echo '
    <!--FEED POSTS-->
     <div class="jumbotron" style="background-color: white; color: black;border-bottom:1px solid grey;">
      <h3><strong><a href="NSSclubposts.php?id='.$row["cid"].'" style="text-decoration:none; color:black;color:#4A4A4A;">'.$row["title"].'</a></strong></h3>
    <p>'.$row["date"].'</p>
    <p style="font-family: Verdana, Geneva, sans-serif;">'.$contdis.'...<a href="NSSclubposts.php?id='.$row["cid"].'">Read more</a></p>
  </div> '; }

?>


    
  </div>
</div>
  <style type="text/css">
    @keyframes borderstyle{
      0%{width: 0px; background-color: red;}
      50%{width: 60%;background-color: black; margin-left: 25%;}
      100%{width: 0px;background-color: red;}
    }
  </style>

<!--JOIN THUS CLUB-->
<div style="height: 100%;color: white; background-color: #F40612; margin-top: 5px;">
  <h3 style="text-align: center;padding-top: 10px; font-family: 'Mirza', cursive;">JOIN THIS CLUB?</h3>
  <pre style="text-align: center; color: white;">
    Write us at : *******@email.com
  </pre>
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