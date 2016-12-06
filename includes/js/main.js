/*
// jQuery to collapse the navbar on scroll
function collapseNavbar() {
    if ($(".navbar").offset().top > 50) {
	$(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
	$(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
}

$(window).scroll(collapseNavbar);
$(document).
*/
function loadDoc() {
  var xhttp;
  if (window.XMLHttpRequest) {
    // code for modern browsers
    xhttp = new XMLHttpRequest();
    } else {
    // code for IE6, IE5
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("demo2").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", "js/test.txt", true);
  xhttp.send();
document.getElementById('night-mode').onclick = function(event){
  document.getElementId('wrapper').style.backgroundColor = "magenta";
}

}
