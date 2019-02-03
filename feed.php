<?php
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
    <link href="https://fonts.googleapis.com/css?family=Play|Raleway|Roboto|Ubuntu|Merriweather|Montserrat" rel="stylesheet">
    <link rel="icon" href="images/transs.png" type="image/gif" sizes="16x16">

    <title>Feed</title>
  </head>
  <body style="background-color:white;">
    <!--NAV BAR-->
    <a id="ddmenuLink" href="nav.html"></a>

      
  <div class="container">


    <div style="padding-top: 150px; text-align: center; margin: 0px;">
      <h2><strong>What was your best excuse for being late to class?</strong></h2><br><br>
      <form>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Roll No." onkeydown="upperCaseF(this)">
      <script type="text/javascript">
        function upperCaseF(a){
    setTimeout(function(){
        a.value = a.value.toUpperCase();
    }, 1);
}
      </script>
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Comment here">
    </div>
  </div>
</form>
    </div>
    <hr>


    <!--POSTS-->
    <div style="margin: 50px; font-family: 'Montserrat',sans-serif;">

    <!--FEAUTURED POST-->

     <div class="jumbotron" style="background-color: white; color: black;border-bottom:1px solid #1e7e34;">
      <h3><strong>Interview with Name Here</strong></h3>
    <p><i>by : </i>Surya</p>
    <p>27-08-2018 12:45:23</p>
    <p>Read full interview from here.</p>
  </div>

      
      <?php

          $sql = "SELECT * FROM stuapproved ORDER BY  cid DESC";
      $result = mysqli_query($conn,$sql);
      while($row = $result->fetch_assoc()) 
      { 
        $content = $row['content'];
        $contdis = substr($content, 0, 500);
        echo '

    <!--FEED POSTS-->
     <div class="jumbotron" style="background-color: white; color: black;border-bottom:1px solid grey;">
      <h2><strong><a href="pagepost.php?id='.$row["cid"].'" style="text-decoration:none; color:#4A4A4A;">'.$row["title"].'</a></strong></h2>
    <p class="font-weight-bold">&#129302;<i>Posted by : </i>'.$row["sturollno"].'</p>
    <p>&#128197;  '.$row["date"].'</p>
    <p style="font-family: Verdana, Geneva, sans-serif;">'.$contdis.'...<a href="pagepost.php?id='.$row["cid"].'">Read more</a></p>
  </div>
  '; }
  ?>

    <!--END OF POSTS-->
    </div>


<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>

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