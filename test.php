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
      <div class="row">
        <div class="well">
           <input id="in" type="input" name="">
            <button id="btn" class="btn btn-default">click</button>
        </div>
        <div class="well">
          
        </div>
      </div>
    </div>
     
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bower_components/jquery/dist/jquery.min.js" ></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js" ></script>
    <!-- google map -->
 <!--    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUm2Qo3dbqOiUF2e4iTw0T2vlV60C0zzc"></script> -->
    <script type="text/javascript" src="js/jquery.googlemap.js"></script>
    <!-- <script type="text/javascript" src="js/main.js"></script> -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUm2Qo3dbqOiUF2e4iTw0T2vlV60C0zzc&&libraries=places,drawing"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript">


      $(function(){
        $("#btn").on("click",function(){
          queryAutoComplete($("#in").val());
        });
        $("#in").autocomplete({
    source: "http://www.localhost.com/autoComplete.php"
          });

      });
      function queryAutoComplete(keyword){
        var url = "http://www.localhost.com/autoComplete.php";
        var param = {
          input: keyword
        };
        $.get(url,param,function(data,status){
          console.log(data);
        });
      }

    </script>
  </body>
  </html>
