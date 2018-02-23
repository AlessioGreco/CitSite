var ball = document.getElementById("ball");

var ballHeight = 50;
var ballWidth = 50;

var coords = {
	"x": {},
	"y": {}
}

ball.addEventListener("click", function(){
	coords = getRandomCoords(coords);
	this.style.bottom = "calc(" + coords.y + "% - " + ballHeight +"px)";
	this.style.left = "calc(" + coords.x + "% - " + ballWidth +"px)";
	getData(this, coords);
});


function move(){

	var ball = document.getElementById("ball");
	var pos = 0;
	var id = 0;
	id = setInterval(linee,1);
	function linee(){
		if (pos == 675) {		
			clearInterval(id);
		}
		else{
		ball.style.left = pos + 'px';
		pos++;
		}
	}
}

function getRandomCoords(coords){
	//Axis X is 0, Y is 1
	var axis = Math.round(Math.random()) == 1 ? "x" : "y";

	if(axis == "x"){
		if(coords.x == 100) {
			coords.x = 0;
		}
		else if(coords.x == 0) {
			coords.x = 100;
		}
		else {
			coords.x = Math.round(Math.random()) * 100;
		}
		coords.y = Math.floor(Math.random() * 100);
	}
	else {
		if(coords.y == 100) {
			coords.y = 0;
		}
		else if(coords.y == 0) {
			coords.y = 100;
		}
		else {
			coords.y = Math.round(Math.random()) * 100;
		}
		coords.x = Math.floor(Math.random() * 100);
	}

	return coords;
}

function getData(element, coords){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var data = JSON.parse(this.responseText);
			var content = "X: " + data.x + "; Y: " + data.y + ";";
			document.getElementById("iframe").contentWindow.document.open('text/htmlreplace');
			document.getElementById("iframe").contentWindow.document.write(content);
			document.getElementById("iframe").contentWindow.document.close();
		}
	};
	xhttp.open("GET", "ajax.php?x=" + coords.x + "&y=" + coords.y, true);
	xhttp.send();  
}

