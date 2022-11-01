<?php


$outputFileData = "";
$postedPassword = isset($_POST['txtPassword']) ? $_POST['txtPassword'] : false;
// // Define your username and password
$MailBoxPassword = "1998";
//
//password is wrong
if ($postedPassword != $MailBoxPassword) {
    
    echo '';
    echo '<link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsenui.css">';
    echo '<link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsen-css-components.min.css">';
    echo '<script src="https://unpkg.com/onsenui/js/onsenui.min.js"></script>';
    echo '<script>alert("Please enter the correct password!")</script>';
    
    
//if (false) {

?>

  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsenui.css">
  <link rel="stylesheet" href="css/onsen-css-components-patched.min.css">
  <script src="https://unpkg.com/onsenui/js/onsenui.min.js"></script>
  
      <link rel="stylesheet" href="./css/animate.css">
      <link href="https://fonts.googleapis.com/css?family=Squada+One&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css"/>

      <link rel="shortcut icon" href="https://docs.google.com/uc?export=download&id=1XNGPjIfDBdAtnlecVzkS50dP5JgiN4Nz"/>
      <link rel="apple-touch-icon" sizes="180x180" href="./images/earthbegin.ico"/>
<!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>



    <font size="4">
        
        <h2 style="text-align:center;">Login</h2>

        <a><center>ApexBox - The best smart mailbox.</center></a>

        <form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" style="display: block;
                margin-left: auto;
                margin-right: auto;
                max-width:300px;">

            <img style="
                max-width:300px;"
                src="https://www.freeiconspng.com/uploads/mail-box-icon-13.png" />
            <p></p>

            <label for="txtpassword">Password (0-9):</label>

            <br /><input id="pwdbox" title="Enter your password" name="txtPassword" inputmode="numeric"
                                                                        pattern="[0-9]*"
                                                                        type="password" /></p>
            <p style="text-align:center;max-width:300px;">
            <!-- <button class="btn-large" type="submit" name="Submit" value="Login">Login
                <i class="material-icons right">send</i>
              </button> -->
              <button data-v-78a4c752="" modifier="large" type="submit" value="Login" class="button-margin button button--large">Login</button>
            </p>
        </form>
    </font>

    <a style="margin-left:60px; margin-bottom: 10px;">ver 1.0.30</a>

    <p>

<p></p>

  <?php
        echo '<script>var input = document.getElementById("pwdbox");input.focus();input.select();</script>';
}else{
?>

<p></p>

    <!doctype html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <link href="css/style.css" rel="stylesheet" type="text/css">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsenui.css">
  <link rel="stylesheet" href="css/onsen-css-components-patched.min.css">
  <script src="https://unpkg.com/onsenui/js/onsenui.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="./css/animate.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css"/>
      <link rel="shortcut icon" href="https://docs.google.com/uc?export=download&id=1XNGPjIfDBdAtnlecVzkS50dP5JgiN4Nz"/>
      <link rel="apple-touch-icon" sizes="180x180" href="./images/earthbegin.ico"/>

<!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title></title>

      <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    </head>
    <body onload="" style="">
      
      <div class="toolbar">
          <ul class="right hide-on-med-and-down">
            <li><a href="mailbox.php">Dashboard</a></li>
          </ul>
          <ul class="right hide-on-med-and-down">
            <li><a href="settings.php">Settings</a></li>
          </ul>

          <ul id="nav-mobile" class="sidenav" style="transform: translateX(-105%);">
            <li><a href="mailbox.php">Dashboard</a></li>
            <li><a href="settings.php">Settings</a></li>
          </ul>
        <div class="toolbar__left">
          <span class="toolbar-button">
          <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="ion-ios-menu" style="font-size:32px; vertical-align:-6px;"></i></a>
          </span>
        </div>

        <div class="toolbar__center">
        <a href="mailbox.php" style="color:#000;">ApexBox</a>
        </div>

        <div class="toolbar__right">
          <span class="toolbar-button">Update</span>
        </div>
      </div>

    <p></p>

      <div class="row">
        <div align="center" style="margin:auto;max-width:420px;">
    
      <?php
        $file = fopen("./python_scripts/logs/dismissPurchaseAlertStatus.txt","r");

        $outputFileData = fgets($file);
        fclose($file);
        if($outputFileData == "youreExcusedKat"){

      ?>

      <?php
        }else{
      ?>

      <div class="card">
        <div class="card blue darken-1">
          <div class="card-content white-text">
            <span class="card-title">Thank you for your purchase!</span>
            <p>Dear customer, we appreciate your purchase and hope you enjoy your new ApexBox!</p>
          </div>
          <div class="card-action">
            <a onclick="dismissPurchaseAlert();" style="color:white;">Close</a>
          </div>
        </div>
      </div>

      <?php
        }
      ?>

      <?php
        $file = fopen("./python_scripts/logs/dismissAlertStatus.txt","r");

        $outputFileData = fgets($file);
        fclose($file);
        if($outputFileData == "youreExcusedKat"){

      ?>

      <?php
        }else{
      ?>

      <div class="card" style="margin:auto;max-width:1200px;">
          <a onclick="dismissAlert();" style="margin-top:12px;" class="waves-effect waves-red btn-flat">Close</a>
          <p></p>
          <div class="slider">
             <ul class="slides">
               <li>
                 <img src="/images/cannabissprouting.jpg"> <!-- random image -->
                 <div class="caption center-align">
                   <h3>EarthBOX Pro</h3>
                   <h5 class="light white-text text-lighten-3"><b>Welcome newbie!</b></h5>
                 </div>
               </li>
               <li>
                 <img src="images/hidefweed.jpg"> <!-- random image -->
                 <div class="caption left-align">
                   <h3>Grow like a Pro</h3>
                   <h5 class="light white-text text-lighten-3"><b>Schedule when to water or why! Never miss a day of feeding.</b></h5>
                 </div>
               </li>
               <li>
                 <img src="images/growtentweed.jpg"> <!-- random image -->
                 <div class="caption left-align">
                   <h3>No stress.</h3>
                   <h5 class="light white-text text-lighten-3"><b>Your crop can be taken care of easily and remotely.</b></h5>
                 </div>
               </li>
               <li>
                 <img src="images/cannabistintwallpaper.jpg"> <!-- random image -->
                 <div class="caption center-align">
                   <h3>Results!</h3>
                   <h5 class="light white-text text-lighten-3"><b>Harvesting is the prize!</b></h5>
                 </div>
               </li>
             </ul>
           </div>
          <p></p>
          <div class="card-action">
            <a href="settings.php">Setup My EarthBOX</a>
          </div>
      </div>

    <p></p>

      <?php
        }
      ?>
            
          </div>

          <p></p>

              <div class="card" >
                <div class="card-image">
                  <img id="webcamLiveStreamDisplay" alt="Live Stream will display here." align="center" style="-webkit-user-select: none;min-wdith:80%;min-height:30%;" src="https://thumbs.dreamstime.com/b/person-hands-taking-letters-view-inside-mailbox-close-up-silver-57967345.jpg"  height="30%"/>
                  
                  <font color="#fff">MailCam</font></span>
                </div>
                <div align="center" class="card-action">
                  <!-- <a href="fullscreenStream.html">Fullscreen</a><br></br> -->
                  <!-- <a class="btn-floating btn-large waves-effect waves-light white" onclick="activateLock();"><img src="./images/lockedpad.png" width="100%" /><i class="material-icons">fanon</i></a>&nbsp;
                  <a class="btn-floating btn-large waves-effect waves-light white" onclick="activateUnlock();"><img src="./images/unlockedpad.png" width="100%" /><i class="material-icons">fanoff</i></a>&nbsp;
                  <a class="btn-floating btn-large waves-effect waves-light white" onclick="activateLight();"><img src="./images/lighticon.png" height="100%" /><i class="material-icons">growlighton</i></a>&nbsp;
                  <a class="btn-floating btn-large waves-effect waves-light white" onclick="disableLight();"><img src="./images/disablelight.png" height="100%" /><i class="material-icons">growlightoff</i></a>&nbsp; -->
                  <!-- <button class="fab fab--material"><img src="images/padlocked.png" width="60%" onclick="activateLock();"/></button>
                  <button class="fab fab--material"><img src="images/padunlocked.png" width="60%" onclick="activateUnlock();"/></button> -->
                  <label class="checkbox">
                    <input type="checkbox" class="checkbox__input">
                    <div class="checkbox__checkmark"></div>
                    Unlocked
                  </label>

                  <label class="checkbox">
                    <input type="checkbox" class="checkbox__input" checked="checked">
                    <div class="checkbox__checkmark"></div>
                    Locked
                  </label>
                </div>
              </div>
          <p></p>

          <div class="card" id="boxDetailsWindow">
          <li class="list-item">
              <div class="list-item__center">
                Outside Lighting
              </div>
              <div class="list-item__right">
                <label class="switch">
                  <input type="checkbox" class="switch__input" checked>
                  <div class="switch__toggle">
                    <div class="switch__handle"></div>
                  </div>
                </label>
              </div>
            </li>
            <li class="list-item">
              <div class="list-item__center">
                Interior Lighting
              </div>
              <div class="list-item__right">
                <label class="switch">
                  <input type="checkbox" class="switch__input">
                  <div class="switch__toggle">
                    <div class="switch__handle"></div>
                  </div>
                </label>
              </div>
            </li>
            <li class="list-item">
              <div class="list-item__center">
                Lock after first interaction
              </div>
              <div class="list-item__right">
                <label class="switch">
                  <input type="checkbox" class="switch__input">
                  <div class="switch__toggle">
                    <div class="switch__handle"></div>
                  </div>
                </label>
              </div>
            </li>
            </div>
          </div>
        <div class="card" id="boxDetailsWindow">
    
        <div class="tomorrow"
           data-location-id="126002"
           data-language="EN"
           data-unit-system="IMPERIAL"
           data-skin="light"
           data-widget-type="upcoming"
           style="padding-bottom:22px;position:relative;">
          </a>
        </div>
          </div>
          
          <div class="card" id="boxDetailsWindow">
            <div class="card-content black-text">
              <span class="card-title">MailBox Details</span>
              <p></p>
              <div align="center">
                More data will be programmed here
            </div>
            </div>
          </div>

          <p></p>

          <div align="center">ver 1.0.30</div>

        </div>
      </div>


      <script>
        (function(d, s, id) {
            if (d.getElementById(id)) {
                if (window.__TOMORROW__) {
                    window.__TOMORROW__.renderWidget();
                }
                return;
            }
            const fjs = d.getElementsByTagName(s)[0];
            const js = d.createElement(s);
            js.id = id;
            js.src = "https://www.tomorrow.io/v1/widget/sdk/sdk.bundle.min.js";

            fjs.parentNode.insertBefore(js, fjs);
        })(document, 'script', 'tomorrow-sdk');
        </script>
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/javascript_bater.js"></script>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

       <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

      <script type="text/javascript" src="js/init.js"></script>
      <div class="sidenav-overlay"></div>
      <div class="drag-target"></div>
    </body>
  </html>

</p>

<?php

}

?>
