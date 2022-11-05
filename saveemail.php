<?php

$outputstring = "barttaro@gmail.com";

$file = fopen("notifyemail.txt", 'w') or die("Unable to open file!");
fwrite($file, $outputstring);
fclose($file);

echo "Done! Updated notify email address to ", $outputstring;

sleep(3);


#reload page
header("Location: settings.php");

?>
