

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


function dismissPurchaseAlert()
{
  var data = new FormData();
  data.append("data" , "");
  var xhr = (window.XMLHttpRequest) ? new XMLHttpRequest() : new activeXObject("Microsoft.XMLHTTP");
  xhr.open( 'post', 'hidepurchasealertwrite.php', true );
  xhr.send(data);

  location.reload();
}

function dismissAlert()
{
  var data = new FormData();
  data.append("data" , "");
  var xhr = (window.XMLHttpRequest) ? new XMLHttpRequest() : new activeXObject("Microsoft.XMLHTTP");
  xhr.open( 'post', 'hidealertwrite.php', true );
  xhr.send(data);

  currentURL = window.location.pathname;

  if(currentURL == "/mailbox.php" || currentURL == "/public_html/mailbox.php"){
    location.reload();
  }
}

function showStartupPurchase()  {
  var data = new FormData();
  data.append("data" , "");
  var xhr = (window.XMLHttpRequest) ? new XMLHttpRequest() : new activeXObject("Microsoft.XMLHTTP");
  xhr.open( 'post', 'showpurchasealertwrite.php', true );
  xhr.send(data);
}

function showStartupTips()  {
  var data = new FormData();
  data.append("data" , "");
  var xhr = (window.XMLHttpRequest) ? new XMLHttpRequest() : new activeXObject("Microsoft.XMLHTTP");
  xhr.open( 'post', 'showalertwrite.php', true );
  xhr.send(data);
}


function activateUnlock()  {
  ons.notification.alert('Mailbox is unlocked!');
}

function activateLock()  {
  ons.notification.alert('Mailbox is locked!');
}

function activateLight() {
  M.toast({html: 'Exterior light is turned on.'})
  var x = new XMLHttpRequest();
      x.open("GET","LightSwitchOn.php",true);
      x.send();
      return false;
}

function disableLight() {
  M.toast({html: 'Exterior light is turned off.'})
  var x = new XMLHttpRequest();
      x.open("GET","LightSwitchOff.php",true);
      x.send();
      return false;
}

function activateFan() {
  M.toast({html: 'Fan is running.'})
  var x = new XMLHttpRequest();
      x.open("GET","fanOnServerRequest.php",true);
      x.send();
      return false;
}

function disableFan() {
  M.toast({html: 'Fan is turned off.'})
  var x = new XMLHttpRequest();
      x.open("GET","fanOffServerRequest.php",true);
      x.send();
      return false;
}


function askReboot() {
  var retVal = confirm("Activating this button will reboot EarthBOX. Are you sure you want to reboot your EarthBOX? It should automatically come back online after 2 minutes if the page is killed. Just refresh.");
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
  M.toast({html: 'EarthBOX initiated reboot...'})
  var myVar = setInterval(attemptReconnection, 105000);
}

function attemptReconnectBtn() {
  earthBoxPreviousIP = window.location.hostname + ":" + window.location.port;
  document.location.href = "http://" + earthBoxPreviousIP + "/index.php";
}

function attemptReconnection() {
  M.toast({html: 'EarthBOX successfully rebooted.'})
  earthBoxPreviousIP = window.location.hostname + ":" + window.location.port;
  document.location.href = "http://" + earthBoxPreviousIP + "/index.php";
}


function replaceSpace() {
  var tempDisplay = document.getElementById('tempDisplay').innerHTML;

  var tempwithdegree = tempDisplay;
  var res = tempwithdegree.replace(/\s/g,'')
  tempDisplay.innerHTML = res;

  var humDisplay = document.getElementById('humidityDisplay').innerHTML;

  var humwithDisplay = humDisplay;
  var res2 = humwithDisplay.replace(/\s/g,'')
  humwithDisplay.innerHTML = res2;

  var soilDisplay = document.getElementById('soilTempDisplay').innerHTML;

  var soiltempdegree = soilDisplay;
  var res3 = soiltempdegree.replace(/\s/g,'')
  soiltempdegree.innerHTML = res3;
}



