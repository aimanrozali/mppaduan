function CustomConfirm() {
  this.alert = function (message, title) {

    document.body.insertAdjacentHTML('afterend', '<div id="dialogoverlay"></div><div id="dialogbox-success" class="slit-in-vertical"><div><div id="dialogboxhead-success"></div><div id="dialogboxbody-success"></div><div id="dialogboxfoot-success"></div></div></div>');

    let dialogoverlay = document.getElementById('dialogoverlay');
    let dialogbox = document.getElementById('dialogbox-success');

    let winH = window.innerHeight;
    dialogoverlay.style.height = winH + "px";

    dialogbox.style.top = "100px";

    dialogoverlay.style.display = "block";
    dialogbox.style.display = "block";

    document.getElementById('dialogboxhead-success').style.display = 'block';

    if (typeof title === 'undefined') {
      document.getElementById('dialogboxhead-success').style.display = 'none';
    } else {
      document.getElementById('dialogboxhead-success').innerHTML = '<i class="fa fa-exclamation-circle" aria-hidden="true"></i> ' + title;
    }

    document.getElementById('dialogboxbody-success').innerHTML = message;
    document.getElementById('dialogboxfoot-success').innerHTML = '<button class="pure-material-button-contained btn-success active" onclick="customConfirm.ok()">OK</button> <button class="pure-material-button-contained btn-danger active" onclick="customConfirm.cancel()">Cancel</button>';

    dialogoverlay.setAttribute('onclick', 'customConfirm.cancel()');
  }

  this.ok = function () {
    document.getElementById('dialogbox-success').style.display = "none";
    document.getElementById('dialogoverlay').style.display = "none";
    //Submit form
    document.getElementById("forms-popup").submit();
  }

  this.cancel = function () {
    document.getElementById('dialogbox-success').style.display = "none";
    document.getElementById('dialogoverlay').style.display = "none";
  }
}

let customConfirm = new CustomConfirm();
document.getElementById("popup-confirm-form").setAttribute('onclick', 'customConfirm.alert("Do you want to submit the form?")');










