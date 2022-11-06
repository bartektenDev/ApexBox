



function readIP()
{
  document.getElementById("incubatorBoxIPdisplay").innerHTML = "http://" + window.location.hostname;
  document.getElementById("incubatorBoxSshIPdisplay").innerHTML = "ssh pi@" + window.location.hostname + " -p 22";
}

function openWebcamLiveStream()
{
  if(window.location.hostname != "127.0.0.1"){
    document.getElementById("webcamLiveStreamDisplay").src = "http://" + window.location.hostname + ":8082"
  }
}

function checkSRC()
{
  var elem = document.getElementById('webcamLiveStreamDisplay');

  if(elem.getAttribute('src') == "http://127.0.0.1:8082" || elem.getAttribute('src') == "http://localhost:8082")
  {
    elem.src = "./images/livestreamnotfound.jpg";
  }

}



function activateUnlock()  {
  ons.notification.alert('Mailbox is unlocked!');
}

function activateLock()  {
  ons.notification.alert('Mailbox is locked!');
}

function askReboot() {
  var retVal = confirm("Activating this button will reboot EarthBOX. Are you sure you want to reboot your ApexBox? It should automatically come back online after 2 minutes if the page is killed. Just refresh.");
  if( retVal == true ) {
     //continue
     M.toast({html: 'Rebooting...'})
     var x = new XMLHttpRequest();
         x.open("GET","reboot.php",true);
         x.send();
         return false;
  } else {
     //user clicked cancel
     M.toast({html: 'Cancelled Reboot Activation...'})
     return false;
  }
}

function startRebootTimer() {
  M.toast({html: 'ApexBox initiated reboot...'})
  var myVar = setInterval(attemptReconnection, 105000);
}

function attemptReconnectBtn() {
  apexBoxPreviousIP = window.location.hostname + ":" + window.location.port;
  document.location.href = "http://" + apexBoxPreviousIP + "/index.php";
}

function attemptReconnection() {
  M.toast({html: 'ApexBox successfully rebooted.'})
  earthBoxPreviousIP = window.location.hostname + ":" + window.location.port;
  document.location.href = "http://" + earthBoxPreviousIP + "/index.php";
}
