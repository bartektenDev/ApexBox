<?php

$password = "password";

if ("password" == $password) {

?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsenui.css">
  <link rel="stylesheet" href="css/onsen-css-components-patched.min.css">
  <script src="https://unpkg.com/onsenui/js/onsenui.min.js"></script>
    
    
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
      <link rel="icon" href="https://docs.google.com/uc?export=download&id=1XNGPjIfDBdAtnlecVzkS50dP5JgiN4Nz">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
        <a href="mailbox.php" style="color:#000;">Settings</a>
        </div>

        <div class="toolbar__right">
          <span class="toolbar-button">Update</span>
        </div>
      </div>
      <!--
      <div align="center" class="animated fadeIn delay-1s">This Device's Public IP:<p id="publicIPdisplay">IP NOT FOUND!</p></div>
      -->

      <div class="row">
        <div align="center" style="margin:auto;max-width:1200px;">
          <div class="card">
            <div class="card-content black-text">
            <span class="card-title">Automated Lock Schedule</span>
            <table>
              <thead>
                <tr>
                    <th>Day</th>
                    <th>Unlocked At</th>
                    <th>Locked After</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>Sunday</td>

                  <td class='dropdown-trigger' href='#' data-target='dropdown1'>
                    <?php
                      $file = fopen("./python_scripts/logs/dateLogs/sundayTodoTime.txt","r");
                      echo fgets($file);
                      fclose($file);
                    ?>
                  </td>
                  <td class='dropdown-trigger' href='#' data-target='dropdown1'>
                    <?php
                      $file = fopen("./python_scripts/logs/dateLogs/sundayEndTime.txt","r");
                      echo fgets($file);
                      fclose($file);
                    ?>
                  </td>
                </tr>
                <tr>
                  <td>Monday</td>

                  <td class='dropdown-trigger' href='#' data-target='dropdown1'>
                    <?php
                      $file = fopen("./python_scripts/logs/dateLogs/mondayTodoTime.txt","r");
                      echo fgets($file);
                      fclose($file);
                    ?>
                  </td>
                  <td class='dropdown-trigger' href='#' data-target='dropdown1'>
                    <?php
                      $file = fopen("./python_scripts/logs/dateLogs/mondayEndTime.txt","r");
                      echo fgets($file);
                      fclose($file);
                    ?>
                  </td>
                </tr>
                <tr>
                  <td>Tues.</td>

                  <td class='dropdown-trigger' href='#' data-target='dropdown1'>
                    <?php
                      $file = fopen("./python_scripts/logs/dateLogs/tuesdayTodoTime.txt","r");
                      echo fgets($file);
                      fclose($file);
                    ?>
                  </td>
                  <td class='dropdown-trigger' href='#' data-target='dropdown1'>
                    <?php
                      $file = fopen("./python_scripts/logs/dateLogs/tuesdayEndTime.txt","r");
                      echo fgets($file);
                      fclose($file);
                    ?>
                  </td>
                </tr>
                <tr>
                  <td>Wed.</td>

                  <td class='dropdown-trigger' href='#' data-target='dropdown1'>
                    <?php
                      $file = fopen("./python_scripts/logs/dateLogs/wednesdayTodoTime.txt","r");
                      echo fgets($file);
                      fclose($file);
                    ?>
                  </td>
                  <td class='dropdown-trigger' href='#' data-target='dropdown1'>
                    <?php
                      $file = fopen("./python_scripts/logs/dateLogs/wednesdayEndTime.txt","r");
                      echo fgets($file);
                      fclose($file);
                    ?>
                  </td>
                </tr>
                <tr>
                  <td>Thurs.</td>

                  <td class='dropdown-trigger' href='#' data-target='dropdown1'>
                    <?php
                      $file = fopen("./python_scripts/logs/dateLogs/thursdayTodoTime.txt","r");
                      echo fgets($file);
                      fclose($file);
                    ?>
                  </td>
                  <td class='dropdown-trigger' href='#' data-target='dropdown1'>
                    <?php
                      $file = fopen("./python_scripts/logs/dateLogs/thursdayEndTime.txt","r");
                      echo fgets($file);
                      fclose($file);
                    ?>
                  </td>
                </tr>
                <tr>
                  <td>Friday</td>

                  <td class='dropdown-trigger' href='#' data-target='dropdown1'>
                    <?php
                      $file = fopen("./python_scripts/logs/dateLogs/fridayTodoTime.txt","r");
                      echo fgets($file);
                      fclose($file);
                    ?>
                  </td>
                  <td class='dropdown-trigger' href='#' data-target='dropdown1'>
                    <?php
                      $file = fopen("./python_scripts/logs/dateLogs/fridayEndTime.txt","r");
                      echo fgets($file);
                      fclose($file);
                    ?>
                  </td>
                </tr>
                <tr>
                  <td>Saturday</td>

                  <td class='dropdown-trigger' href='#' data-target='dropdown1'>
                    <?php
                      $file = fopen("./python_scripts/logs/dateLogs/saturdayTodoTime.txt","r");
                      echo fgets($file);
                      fclose($file);
                    ?>
                  </td>
                  <td class='dropdown-trigger' href='#' data-target='dropdown1'>
                    <?php
                      $file = fopen("./python_scripts/logs/dateLogs/saturdayEndTime.txt","r");
                      echo fgets($file);
                      fclose($file);
                    ?>
                  </td>
                </tr>
                <!-- Dropdown Structure -->
                <ul id='dropdown1' class='dropdown-content'>
                  <li><a href="#" onclick="#">Turn OFF</a></li>
                  <li><a href="#!">1:00 am</a></li>
                  <li><a href="#!">2:00 am</a></li>
                  <li><a href="#!">3:00 am</a></li>
                  <li><a href="#!">4:00 am</a></li>
                  <li><a href="#!">5:00 am</a></li>
                  <li><a href="#!">6:00 am</a></li>
                  <li><a href="#!">7:00 am</a></li>
                  <li><a href="#!">8:00 am</a></li>
                  <li><a href="#!">9:00 am</a></li>
                  <li><a href="#!">10:00 am</a></li>
                  <li><a href="#!">11:00 am</a></li>
                  <li><a href="#!">12:00 pm</a></li>
                  <li><a href="#!">1:00 pm</a></li>
                  <li><a href="#!">2:00 pm</a></li>
                  <li><a href="#!">3:00 pm</a></li>
                  <li><a href="#!">4:00 pm</a></li>
                  <li><a href="#!">5:00 pm</a></li>
                  <li><a href="#!">6:00 pm</a></li>
                  <li><a href="#!">7:00 pm</a></li>
                  <li><a href="#!">8:00 pm</a></li>
                  <li><a href="#!">9:00 pm</a></li>
                  <li><a href="#!">10:00 pm</a></li>
                  <li><a href="#!">11:00 pm</a></li>
                  <li><a href="#!">12:00 pm</a></li>
                </ul>
                <ul id='dropdown2' class='dropdown-content'>
                  <li><a href="#!">water</a></li>
                  <li><a href="#!">light</a></li>
                </ul>
              </tbody>
            </table>
          </div>
          
        </div>
      </div>
    </div>

        
      </div>

        <div class="row">
            <div align="center" style="margin:auto;max-width:1200px;">
              <div class="card">
                <div class="card-content black-text">
                <span class="card-title">Developed Professionally by:</span>
                  <h3>Bart Tarasewicz</h3>
                  <a href="mailto:barttaro@gmail.com">barttaro@gmail.com</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      <p></p>
      <p align="center" class="animated fadeIn delay-1s">No more walking in the rain to find no new mail...<br></p>

      <p></p>

      <div align="center" class="animated fadeIn delay-1s">
        ver 1.0.35
      </div>

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

  <p></p>
<?php
}else{
?>
<p></p>
<?php
}
 ?>
