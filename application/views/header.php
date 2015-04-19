<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="../../favicon.ico">
      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
 
      <title>Starter Template for Bootstrap</title>

      <!-- Bootstrap core CSS -->
      <link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.4-dist/css/bootstrap-theme.min.css">
      <link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.4-dist/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/corousel.css">
      <script src="assets/holder.js"></script>
      <!-- Custom styles for this template -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

      
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
     </head>
   <body>
      <header>
       <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav" align="left">
                <li class=""><a href="home">Home</a></li>
                <li><a href="about">About</a></li>
                <li><a href="projects">Projects</a></li>
                <li><a href="#mymodal" data-toggle="modal" data-target="#myModal">Contact</a></li>
                <li><a href="#mymodal2" data-toggle="modal" data-target="#myModal2">Contact Us</a></li>
              </ul>
            </div>
            <!--/.nav-collapse -->
          </div>
        </nav>
        </header>
          <!-- Carousel
          ================================================== -->
        <div class="container">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img class="first-slide" src="http://jobycommercial.com/wp-content/uploads/2014/08/Best-Front-Shoot-870-800x250.jpg" 
                      alt="First slide">
                <div class="container">
                  <div class="carousel-caption">
                    <h1 style="color: #FF00FF;">Example headline.</h1>
                    <p style="color : #CCFF00;">Note: If you're viewing this page via Glyphicon buttons on the left and right might not load/display properly due to web
                         browser security rules.</p>
                    <p><a class="btn btn-success" href="#" role="button">Sign up today</a></p>
                  </div>
                </div>
              </div>
              <div class="item">
                <img class="second-slide" src="http://www.resolutiontweet.com/wp-content/uploads/2013/04/dreamstime_7424479-800x250.jpg" 
                      alt="Second slide">
                <div class="container">
                  <div class="carousel-caption">
                    <h1 style="color : #00FFFF;">Another example headline.</h1>
                    <p style=" color: #99FF33;">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida .</p>
                    <p><a class="btn btn-primary" href="#" role="button">learn more</a></p>
                  </div>
                </div>
              </div>
              <div class="item">
                <img class="third-slide" src="http://www.altavistaspaindevelopments.com/michael_liggan/wp-content/uploads/2014/05/Altavista-Property-Las-Mimosas-de-Puerto-Banus-Penthouse-1-32-800x250.jpg" 
                        alt="Third slide">
                <div class="container">
                  <div class="carousel-caption">
                    <h1 style="color: #33FF00;" >One more for good measure.</h1>
                    <p style="color: #33FFFF;">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta.</p>
                    <p><a class="btn  btn-info" href="#" role="button">Browse gallery</a></p>
                  </div>
                </div>
              </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div><!-- /.carousel -->
          </div>