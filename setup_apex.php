<?php

$password = "password";

if ("password" == $password) {

?>
<!DOCTYPE html>
  <html>
    <head>
    <link href="./css/style.css" rel="stylesheet" type="text/css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" 
rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  
media="screen,projection"/>
    <link rel="stylesheet" href="./css/onsenui.css">
    <link rel="stylesheet" 
href="./css/onsen-css-components-patched.min.css">
    <script src="./js/onsenui.min.js"></script>
    <link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/animate.css">
    <link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css"/>
    <link rel="shortcut icon" 
href="https://docs.google.com/uc?export=download&id=1XNGPjIfDBdAtnlecVzkS50dP5JgiN4Nz"/>
    <link rel="apple-touch-icon" sizes="180x180" 
href="./images/earthbegin.ico"/>
    
    
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript">
    function turnOFFSun() {
        alert('<?php echo "test"?>');
        
        $.get("settings.php");
        return false;
    }
    </script>
  
      <link rel="stylesheet" href="./css/animate.css">
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
      <link rel="icon" 
href="https://docs.google.com/uc?export=download&id=1XNGPjIfDBdAtnlecVzkS50dP5JgiN4Nz">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, 
initial-scale=1.0"/>
      <style>
      .sd-container {
        position: relative;
        float: right;
        margin-right: 30px;
      }

      .sd {
        border: 1px solid #1cbaa5;
        padding: 5px 10px;
        height: 30px;
        width: 150px;
      }

      .open-button {
        position: absolute;
        top: 10px;
        right: 3px;
        width: 25px;
        height: 25px;
        background: #fff;
        pointer-events: none;
      }

      .open-button button {
        border: none;
        background: transparent;
      }
      </style>
    </head>


    <body style onload="">
            
    <!--
    <div class="toolbar">
          <ul class="right hide-on-med-and-down">
            <li><a href="mailbox.php">Dashboard</a></li>
          </ul>
          <ul class="right hide-on-med-and-down">
            <li><a href="settings.php">Settings</a></li>
          </ul>

          <ul id="nav-mobile" class="sidenav" style="transform: 
translateX(-105%);">
            <li><a href="mailbox.php">Dashboard</a></li>
            <li><a href="settings.php">Settings</a></li>
          </ul>
        <div class="toolbar__left">
          
        </div>

        <div class="toolbar__center">
        <a href="mailbox.php" style="color:#000;">Setup ApexBox</a>
        </div>
    
        
        <div class="toolbar__right">
          <span class="toolbar-button">Update</span>
        </div>
    `
      </div>
    -->



      <p></p><br></br>

      <div align="center" class="animated fadeIn delay-1s">
        <h1>Welcome</h1>
      </div>
    
    <div align="center" class="animated fadeIn delay-2s">
      <h3>to ApexBox</h3>
    </div>
    
    <p></p><br></br><p></p><br></br>
    
    <div align="center" class="animated fadeIn delay-3s" style="margin-top:200px;">
      <a href="setup_wifi.php" style="font-size: 20px;">Start</a>
    </div>

      <script 
src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" 
src="js/javascript_bater.js"></script>

      <script 
src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

       <!-- Compiled and minified JavaScript -->
    <script 
src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

      <script type="text/javascript" src="js/init.js"></script>
      <div class="sidenav-overlay"></div>
      <div class="drag-target"></div>
    </body>
  </html>

  <p></p>
<?php
}else{
?>
<p></p>
<?php
}
 ?>

