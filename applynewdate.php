<?php
$dateText = $_POST['date'];
echo $dateText;
if($dateText == "mm/dd/yyyy"){
  header("Location: settings.php");
}else{
  // 2020-02-12
  $data = str_replace("-","/",$dateText);
  // 2020/02/12
  $result = "";
  $result2 = "";
  $result = substr($data, 0, 4);
  $result2 = substr($data, 5, 10);
  // 02/12/2020
  $redo = $result2 . "/" . $result;

  $file = fopen("python_scripts/logs/startDateIncubation.txt", 'w') or die("Unable to open file!");
  fwrite($file, $redo);
  fclose($file);

  header("Location: settings.php");
}
?>
