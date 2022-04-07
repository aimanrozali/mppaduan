function CustomConfirmDel() {
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
    document.getElementById('dialogboxfoot-success').innerHTML = '<button class="pure-material-button-contained btn-success active" onclick="customConfirmDel.ok()">Solved</button> <button class="pure-material-button-contained btn-danger active" onclick="customConfirmDel.cancel()">Not Yet</button>';

    dialogoverlay.setAttribute('onclick', 'customConfirmDel.cancel()');
  }

  this.ok = function () {
    document.getElementById('dialogbox-success').style.display = "none";
    document.getElementById('dialogoverlay').style.display = "none";
    //Redirect to update unsolved report
    window.location.replace("reportDelete.php?del=1");
  }

  this.cancel = function () {
    document.getElementById('dialogbox-success').style.display = "none";
    document.getElementById('dialogoverlay').style.display = "none";
  }
}

let customConfirmDel = new CustomConfirmDel();
document.getElementById("popup-confirm-delete").setAttribute('onclick', 'customConfirmDel.alert("Do you want to delete report?")');