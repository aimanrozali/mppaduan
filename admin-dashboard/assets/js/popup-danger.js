
function CustomAlertFail(){
  this.alert = function(message,title){
    document.body.insertAdjacentHTML('afterend','<div id="dialogoverlay"></div><div id="dialogbox-danger" class="slit-in-vertical"><div><div id="dialogboxhead-danger"></div><div id="dialogboxbody-danger"></div><div id="dialogboxfoot-danger"></div></div></div>');

    let dialogoverlay = document.getElementById('dialogoverlay');
    let dialogbox = document.getElementById('dialogbox-danger');
    
    let winH = window.innerHeight;
    dialogoverlay.style.height = winH+"px";
    
    dialogbox.style.top = "100px";

    dialogoverlay.style.display = "block";
    dialogbox.style.display = "block";
    
    document.getElementById('dialogboxhead-danger').style.display = 'block';

    if(typeof title === 'undefined') {
      document.getElementById('dialogboxhead-danger').style.display = 'none';
    } else {
      document.getElementById('dialogboxhead-danger').innerHTML = '<i class="fa fa-exclamation-circle" aria-hidden="true"></i> '+ title;
    }
    document.getElementById('dialogboxbody-danger').innerHTML = message;
    document.getElementById('dialogboxfoot-danger').innerHTML = '<button class="pure-material-button-contained btn-danger active" onclick="customAlertFail.ok()">OK</button>';
  
  }
  
  this.ok = function(){
    document.getElementById('dialogbox-danger').style.display = "none";
    document.getElementById('dialogoverlay').style.display = "none";
  }
}

let customAlertFail = new CustomAlertFail();
document.getElementById("popup-danger").setAttribute('onclick','customAlertFail.alert("Activity failed, press okay to continue.", "Failed!");');