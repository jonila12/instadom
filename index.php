<?php

if(isset($_POST['optradio'])) {
  $pilih = $_POST['optradio'];

  if($pilih == "video") {
    require_once 'video.php';

  }if($pilih == 'images') {
    require_once 'images.php';

  }

}
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Instagram Downloader</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Heru Setiawan">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <nav class="navbar navbar-inverse">
      <div class="container">
          <div class="navbar-header"><a id="brand" class="navbar-brand navbar-link" href="#">Istadom</a>
              <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
          </div>
          <div class="collapse navbar-collapse" id="navcol-1">
              <ul class="nav navbar-nav navbar-right">
                  <li class="active" role="presentation"><a  href="#">Follow </a></li>
                  <li role="presentation"><a href="#">Contact </a></li>
                  <li role="presentation"><a href="#">About </a></li>
              </ul>
          </div>
      </div>
  </nav>
    <div>
        <h1  id="textu" class="text-center">Instagram downloader</h1>
        <div class="col-lg-1 col-lg-offset-4 col-md-2 col-md-offset-4 col-sm-3 col-sm-offset-3 col-xs-2 col-xs-offset-1 col-xs-push-1">
        <img src="images/logo.png" width="200px" id="gam"></div>


    </div>
    <div class="container">
        <form method="post" action="index.php">
            <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-12">
                <div class="input-group">
                    <div class="input-group-addon"></div>
                    <input class="form-control active" type="text" name="link" placeholder="Enter Url...">
                    <div class="input-group-btn">
                      <input class="btn btn-primary" name="submit" type="submit" value="Go" onclick="return radioValidation();">  <br>
                    </div>
                </div>
                <label class="radio-inline">
                  <input type="radio" value="video" name="optradio">Video
                </label>
                    <label class="radio-inline">
                        <input type="radio" value="images" name="optradio">images
                      </label>
            </div>
        </form>
        <!-- show alert if user not selected type content  -->
        <script type="text/javascript">
            function radioValidation(){

                var optradio = document.getElementsByName('optradio');
                var genValue = false;

                for(var i=0; i<optradio.length;i++){
                    if(optradio[i].checked == true){
                        genValue = true;
                    }
                }
                if(!genValue){
                    alert("Please Choose Video or Images");
                    return false;
                }

            }
        </script>
    </div> <br>

    <div class="col-md-6 col-md-offset-3 advertisement">
               <div class="text-center">
                  <p>Ads Space</p>
               </div>
            </div>
            <!-- footer -->
                  <footer>

                       <a href="/">Home</a> |
                       <a rel="nofollow" href="#">Terms of Use</a> |
                       <a rel="nofollow" href="#">Privacy Policy</a>
                       <p>©<a href="index.php">DaebakSoft</a>, All rights reserved 2018.
   </p>
                  </footer>

</html>
