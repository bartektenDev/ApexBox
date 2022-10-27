<?php
$data = "";

$file = fopen("python_scripts/logs/dismissAlertStatus.txt", 'w') or die("Unable to open file!");
fwrite($file, $data);
fclose($file);

header("Refresh:0");
?>
