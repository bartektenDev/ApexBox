<?php
$data = "youreExcusedKat";

$file = fopen("python_scripts/logs/dismissPurchaseAlertStatus.txt", 'w') or die("Unable to open file!");
fwrite($file, $data);
fclose($file);

header("Refresh:0");
?>
