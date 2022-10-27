<?php

$loadPage = location.href;

if(strpos($loadPage, "index.php") !== true){
  header("Location: mailbox.php");
}else{

}
?>
