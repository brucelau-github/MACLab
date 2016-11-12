<?php include 'inc/auth.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>MY MAP</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- hhaccessibility CSS -->
  <link href="css/map.css" rel="stylesheet">
  <link href="css/jquery-ui.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>


      <div class="container">
       <nav class="navbar navbar-default">
        <div class="container-fluid">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <form class="navbar-form navbar-left">
            <div class="form-group">
              <input id="geocomplete" type="text" class="form-control" placeholder="search your location">
            </div>
            <button id="find" class="btn btn-default ">Search</button>
          </form>
          
        </div>
        </div>
      </nav>
      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-sidebar list-group">
            <?php include 'userProfiles.php'; ?>
            <pre id="logger">Log:</pre>
          </ul>
        </div>
      </div>
      <div class="row"></div>
      <div class="col-md-12">
        <div id="map"></div>
      </div>
      <!-- map layer -->

    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bower_components/jquery/dist/jquery.min.js" ></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js" ></script>
    <!-- google map -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUm2Qo3dbqOiUF2e4iTw0T2vlV60C0zzc&&libraries=places,drawing"></script>
    <script type="text/javascript" src="js/jquery.googlemap.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

  </body>
  </html>
