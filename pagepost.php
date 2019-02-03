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
    <link rel="icon" href="images/transs.png" type="image/gif" sizes="16x16">
    <?php
    $sql = "SELECT * FROM stuapproved WHERE cid='".$_GET['id']."'";
    $result = mysqli_query($conn,$sql);
      while($row = $result->fetch_assoc()){
    echo '
    <title>'.$row["title"].' - URS Community</title>
  </head>
  <body>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2";
  fjs.parentNode.insertBefore(js, fjs);
}(document, "script", "facebook-jssdk"));</script>
    <!--NAV BAR-->
    <a id="ddmenuLink" href="nav.html"></a>



    <div class="container" style="margin-top: 200px;">


      
  
      <div>
    <div style="margin: 50px;">
       <h3><strong>'.$row["title"].'</strong></h3>
       <hr>
    <p>&#129302;<i>Posted by : </i>'.$row["sturollno"].'</p>
    <p>&#128197;  '.$row["date"].'</p>
    <img src="includes/stuuploadsimages/'.$row["filename"].'" class="img-fluid" alt=""><br><br>
    <p style="font-family: Verdana, Geneva, sans-serif;" class="text-justify">'.nl2br($row["content"]).'</p>
    </div>
  </div> 
<div class="fb-share-button" data-href="pagepost.php?id='.$row["cid"].'" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>';}

echo '<br><br><h5> &#8629;    <a href="feed.php">Go back to Feed?</a></h5>';
?>
  
    

        <?php 
        /*
  $sql = "SELECT * FROM stuuploads ORDER BY cid DESC LIMIT 2";
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
    <p><i>Posted by : </i>'.$row['sturollno'].'</p>
    <p>'.$row['date'].'</p>
    <p style="font-family: Verdana, Geneva, sans-serif;">'.$contdis.'...<a href="pagepost.php?id='.$row["cid"].'">Read more</a></p>
  </div>
    </div>
  </div>
</div> '; }
*/
?>
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