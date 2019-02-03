<?php
  date_default_timezone_set('Asia/Kolkata');
  include 'includes/contachdatabase.inc.php';
  include 'includes/updatenews.inc.php';
  
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Chela+One|Coda+Caption:800|Courgette|Gaegu|Gloria+Hallelujah|Gochi+Hand|Indie+Flower|Knewave|Pacifico|Shadows+Into+Light|Shrikhand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Play|Raleway|Roboto|Ubuntu" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="animate.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Usha Rama Student's Community - Explore now</title>
  </head>
  <body style="height: 100%;width: 100%; background-image: url(images/blackback3.jpg);">
    <a id="ddmenuLink" href="nav.html"></a>

<div class="container-fluid">
    
<div style="margin:0;">




    <div style="width: 100%; height: 30px; background-color: white; margin-bottom: 0px; margin-top: 100px;margin-left: 0px; animation-name: topupdate;animation-duration: 4s;animation-iteration-count: infinite;">
        <h5><a href="">Director's message to Students</a></h5>
    </div>
    <style type="text/css">
        @keyframes topupdate{
            0%{background-color: yellow;}
            50%{background-color: black;color: white;}
            100%{background-color: red;}
        }
    </style>
  <div class="row" style="color: white;">
  <h1 class="container-fluid animated fadeInLeft" style="text-align: center; margin-top: 95px; font-family: 'Play',sans-serif;">USHA RAMA<br>STUDENT COMMUNITY</h1>
  <p class="container-fluid" style="text-align: center; font-family: 'Gochi Hand', cursive;">Share your thoughts and meet the like people here</p>
  <!--
<div id="button" class="btn btn-primary" style="margin-top: 100px; position: absolute;"><a href = "feed.html" style="color: black;">Explore Now</a></div>-->
<style type="text/css">
  .btn-primary{
    background-color: #f3cb15;
  }
</style>

</div>






<?php
getUpdate($conn);
?>




<style type="text/css">
    

    .yesImportant{
        color: white; text-align: center; background-color: #980a04; margin-top: 13%; height: 30px; width: 100%;font-family: 'Ubuntu',sans-serif;
    }
    .noImportant{
        color: white; text-align: center; background-color: #060698; margin-top: 13%; height: 30px; width: 100%; font-family: 'Ubuntu',sans-serif;
    }
  #button{
            color:#f7f7f7;
            font-family: verdana;
            width: 200px;
            padding: 15px;
            border: 2px solid #f7f7f7;
            text-align: center;
            position: absolute;
            top:50%;
            left: 50%;
            transform: translate(-50%,-50%);
            overflow: hidden;
            transition: .5s;
        }
        #button:after{
            content: '';
            width: 0px;
            height: 120%;
            position: absolute;
            left: -10%;
            bottom: 0;
            background-color: #f7f7f7;
            transform: skewX(15deg);
            z-index: -1;
            transition: .5s;
        }
        #button:hover{
            cursor: pointer;
            color:#5bcaff;
        }
        #button:hover:after{
            left: -10%;
            width: 120%;
        }

        .glow {
        -webkit-animation-duration: 1s;
        -webkit-animation-name: glow;
        -webkit-animation-direction: alternate;
        -webkit-animation-iteration-count: infinite;
        animation-duration: 1s;
        animation-name: glow;
        animation-direction: alternate;
        animation-iteration-count: infinite;
    
    }
    
    @-webkit-keyframes glow {
        from { text-shadow: 0 0 0px red; }
        to { text-shadow: 0 0 20px red; }
    }
</style>
<div class="row">

</div>


  
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