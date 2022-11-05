<?php
exec("sudo python /var/www/html/python_scripts/selfGoodbye.py");
?>


    <!doctype html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <link href="css/style.css" rel="stylesheet" type="text/css">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="./css/animate.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css"/>
      <link rel="shortcut icon" href="./images/earthbegin.ico" type="image/x-icon"/>
<!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title></title>

      <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    </head>
    <body onload="startRebootTimer();" style>
      <nav class="teal" role="navigation">
        <div class="nav-wrapper container"><a size="3">1.0.9&nbsp;</a><a id="logo-container" href="incubator.php" class="brand-logo">🌎 EarthBOX</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="incubator.php">Incubator</a></li>
          </ul>
          <ul class="right hide-on-med-and-down">
            <li><a href="settings.html">Settings</a></li>
          </ul>

          <ul id="nav-mobile" class="sidenav" style="transform: translateX(-105%);">
            <li><a href="incubator.php">Incubator</a></li>
            <li><a href="settings.html">Settings</a></li>
          </ul>
          <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
      </nav>

      <p></p>

      <div class="row">
        <div align="center" style="margin:auto;max-width:420px;">
          <div class="card">
            <div class="card-content black-text">
              <span class="card-title">EarthBOX is rebooting...</span>
              <div class="card-image">
                <img align="center" src="./images/earthloading.gif" style="margin:auto;max-height:300px;max-width:300px;"/>
              </div>
              <span class="card-title">Grab some popcorn 🍿</span>We will automatically connect once we're online<br></br>
              <a class="waves-effect waves-teal btn-flat" onclick="attemptReconnectBtn();">Attempt Reconnect</a>
            </div>
          </div>
        </div>
      </div>

      <p></p>
      <p align="center" class="animated fadeIn delay-1s">Developed by Bart Tarasewicz</p>

      <p></p>
      <p align="center" class="animated fadeIn delay-1s">The best smart plantary incubator,<br> engineered with fine Polish programming.</p>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

    <script type="text/javascript" src="js/javascript_bater.js"></script>

    <script src="./js/materialize.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
      <script type="text/javascript" src="js/init.js"></script>
      <script type="text/javascript" src="js/datepickerc.js"></script>
      <div class="sidenav-overlay"></div>
      <div class="drag-target"></div>
    </body>
  </html>

</p>
