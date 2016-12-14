<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Jom Solat</title>
    <link rel="shortcut icon" href="img/favicon.ico" />
    <!-- Bootstrap cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Jquery CDN -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <!-- Bootstrap jscript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- geoplugin CDN -->
    <script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>
    <!-- Jakim api handling script -->
    <script src="js/api_call.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch|Quicksand:300" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="row text-center">
        <div class="container logo-container">
          <a href="index.php">
          <img src="img/logo.png" alt="Mosque">
          <h1>Jom Solat!</h1></a>
        </div>
      </div>

      <div class="row">
        <div class="container">
          <div id="timeBoard" class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4" >
            <div class="container-fluid">
              <div class="row">
                <div class="container-fluid">
                  <!-- DropDown Menu for location -->
                <?php include "include/location_box.php"; ?>
                <!-- Dropdown location END -->
              </div>
              <!-- Prayer time table display  -->
              <?php include "include/prayer_time_table.php"; ?>
              <!-- End prayer time table -->
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="container text-center">
          <p id="creator">by DevTam <br> <span>Malaysia</span></p>
        </div>
      </div>
    </div>
  </body>
</html>
