// Modified: Tuesday, December 6, 2016
// Changes: Added document ready function, made the website easier to read at night! All done for today!

// A $ ( document).ready() block.
// Our Document is ready!
$( document).ready(function() {
    console.log("ready!");                                   
    document.getElementById('night-mode').onclick = function(event){ // Select the element with the id of "night-mode and run the events:"	                                                            
	$(".navbar").removeClass("navbar-default").addClass("navbar-inverse"); // Event 1: Select class ".navbar", remove ".navbar-default" and, add ".navabar-inverse"
	document.getElementById('page').style.backgroundColor = "black";       // Event 2: grab page element style background to black
	document.getElementById('page').style.color = "gray";	               // Event 3: grap page element style background to white
    }
   
});
