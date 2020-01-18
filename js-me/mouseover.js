
function mouseOver() {
    var x = document.getElementById("mouseover1").style;
    x.margin ="20% 0 0 20%";
    x.position ="absolute";
    x.zIndex ="1";
    x.width = "100%";
    x.fontFamily = "'Battambang', cursive";
    x.display = "block";
    x.transition ="10s";
  }
  
function mouseOut() {
    var x = document.getElementById("mouseover1").style;
    x.margin ="";
    x.position ="";
    x.zIndex ="";
    x.width = "";
    x.fontFamily = "";
    x.display = "none";
  }