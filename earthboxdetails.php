<?php
  $test = "test";
if($test == "test"){
?>
<div class="row">
  <div align="center" style="margin:auto;max-width:1200px;">
  <div class="card-content black-text">
    <span class="card-title">EarthBOX Details</span>
      <p></p>
      <img src="./images/tempicon2.png" align="center" width="30%" style="max-width:50px">
      <a id="tempDisplay" style="font-size: 24px;font-family: 'Arial', cursive;color:#000;">
        <?php
          $file = fopen("./python_scripts/logs/currentTemp.txt","r");
          echo fgets($file);
          fclose($file);
        ?>
      </a><a id="degree" style="font-size: 24px;font-family: 'Arial', cursive;color:#000;">°</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <img src="./images/humidityredblackoutline.png" align="center" width="30%" style="max-width:70px"/>
      <a id="humidityDisplay" style="font-size: 24px;font-family: 'Arial', cursive;color:#000;">
        <?php
          $file = fopen("./python_scripts/logs/currentHumidity.txt","r");
          echo fgets($file);
          fclose($file);
        ?>
      </a><a id="percent" style="font-size: 24px;font-family: 'Arial', cursive;color:#000;">%</a>
      <!-- <img src="./images/ph-icon-6.png" align="center" width="25%" style="max-width:60px">
      <a id="phLevelDisplay">
          <?php
            $file = fopen("./python_scripts/logs/currentPh.txt","r");
            echo fgets($file);
            fclose($file);
          ?>
      </a><a id="pHdlol">pH</a> -->
        <p></p>
        <a style="margin:auto;margin-right:25px;">Air Temperature</a><a style="margin:auto;margin-left:25px;">Humidity Level</a>
        <p></p>

        <img src="./images/soiltempicon.png" align="center" width="30%" style="font-size: 24px;font-family: 'Arial', cursive;max-width:74px;"/>
        <a id="soilTempDisplay" style="font-size: 24px;font-family: 'Arial', cursive;color:#000;">
          <?php
            $file = fopen("./python_scripts/logs/currentSoilTemp.txt","r");
            echo fgets($file);
            fclose($file);
          ?>
        </a><a id="degree" style="font-size: 24px;font-family: 'Arial', cursive;color:#000;">°</a>&nbsp;&nbsp;
        <img src="./images/drymeter3.png" id="moistMeterIMG2" align="center" width="30%" style="font-family: 'Arial', cursive;max-width:90px;"/>
        <a id="soilMoistureDisplay" style="font-size: 24px;font-family: 'Arial', cursive;color:#000;">
          <?php
            $file = fopen("./python_scripts/logs/currentSoilMoisture.txt","r");
            echo fgets($file);
            fclose($file);
          ?>/1K
      </a>
        <p></p>
        <a style="margin:auto;margin-right:30px;">Soil Temperature</a><a style="margin:auto;margin-left:30px;">Moisture Level</a>
      </div>
    </div>
  <img src onerror='readMoistMeter();'>
  </div>
</div>
<?php
}
?>
