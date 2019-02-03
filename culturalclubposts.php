<?php
  include 'includes/dbh.inc.php'
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <?php
    $sql = "SELECT * FROM culturalclubuploads WHERE cid='".$_GET['id']."'";
    $result = mysqli_query($conn,$sql);
      while($row = $result->fetch_assoc()){
    echo '
    <title>'.$row["title"].' - Cultural Club - URS Community</title>
  </head>
  <body>
    <!--NAV BAR-->
    <a id="ddmenuLink" href="nav.html"></a>



    <div class="container" style="margin-top: 200px;">


      
  
      <div>
    <div style="margin: 50px;">
       <h3><strong>'.$row["title"].'</strong></h3><hr>
    <p><i>Posted on :</i>'.$row["date"].'</p>
    <img src="'.$row["filename"].'" class="img-fluid" alt=""><br><br>
    <p style="font-family: Verdana, Geneva, sans-serif;">'.nl2br($row["content"]).'</p>
    </div>
  </div>';

  echo '<h5> &#8629;    <a href="culturalclub.php">Go back to Club Page</a></h5>';
      }
?>
  
    

        <?php 
        /*
  $sql = "SELECT * FROM culturalclubuploads ORDER BY cid DESC LIMIT 2";
    $result = mysqli_query($conn,$sql);
      while($row = $result->fetch_assoc()) {
        $content = $row['content'];
        $contdis = substr($content, 0, 250);
    echo '
    <div class="col-sm-4">
    <div>
      <h3><strong>Latest Posts:</strong></h3>
    </div>
    <div>
      <hr>
      <div style="margin: 20px;">
       <h3><strong>'.$row['title'].'</strong></h3>
    <p>'.$row['date'].'</p>
    <p style="font-family: Verdana, Geneva, sans-serif;">'.$contdis.'...<a href="culturalclubposts.php?id='.$row["cid"].'">Read more</a></p>
  </div>
    </div>
  </div>
</div> '; }
*/
?>





  <!--Script for Nav Bar-->
<script src="js/ddmenu.js" type="text/javascript"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>