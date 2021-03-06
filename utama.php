<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:loginuser.php'); 
} else { 
   $username = $_SESSION['username']; 
   
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <form id="form-container" class="form-container">
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="utama.php">My Gallery</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <label for="input">Wikipedia : </label>
            <input type="text" id="input" value="">
            <button id="submit-btn">Submit</button>
          </form>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="tabel.php">Tabel Buku Tamu</a></li>
            <li><a href="tambah.php">Tambah Tamu</a></li>
          </ul>
          <ul class="nav nav-sidebar">
          <li><a href="logoutuser.php"><b>Logout</b></a></li>
          <li class="wikipedia-container">
        <h3 id="wikipedia-header">Relevant Wikipedia Links</h3>
        <ul id="wikipedia-links">Type in an address above and find relevant Wikipedia articles here!</ul>
      </li>
        </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Julia's Gallery</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="foto/1.jpg" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Sirandah Island</h4>
              <span class="text-muted">14 Juli 2018</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="foto/3.jpg" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Kucing</h4>
              <span class="text-muted">20 Oktober 2018</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="foto/6.jpg" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Suarnadwipa</h4>
              <span class="text-muted">14 Juli 2018</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="foto/5.jpg" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Kucing</h4>
              <span class="text-muted">20 Oktober 2018</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="foto/7.jpg" alt="...">
                    <div class="carousel-caption">
                      ...
                    </div>
                  </div>
                  <div class="item">
                    <img src="foto/9.jpg" alt="...">
                    <div class="carousel-caption">
                      ...
                    </div>
                  </div>
                  <div class="item">
                    <img src="foto/10.jpg" alt="...">
                    <div class="carousel-caption">
                      ...
                    </div>
                  </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
              </div>
            </form>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.min.js"></script>
    <script src="script.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>
