var ball = document.getElementById('ball');
var here = 0;
var speed = 10;
var idLoop = 0;
var run = 0;
var idRestart = 0;			
var timeDelayStart = 1;		//Delay Start
var timeDelayRestart = 10000; //Delay Autostart
var coords = {
	'x' : 0,
	'y' : 0
};
//Più che consigli mi sa che sono "Perle di Saggezza"
var phrases = [
"Allenatore: Il calcio è più semplice della Teoria di Einstein e piu difficile di fare 2+2",
"Allenatore: Nel calcio tutto è complicato dalla presenza della squadra avversaria!",
"Allenatore: Dategli 22 palloni, cosi la smettono di litagare",
"Allenatore: In fin dei conti il calcio è fantasia, un cartone animato per adulti"
];

function loadCoords() {
	var dataCoords = {
		'x' : coords.x,
		'y' : coords.y
	};
	var jsonData = JSON.stringify(dataCoords);
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			dataCoords = JSON.parse(this.responseText);
			var iframe = document.getElementById('frame');
			var iframeCoords  = "X:" + dataCoords.x + " Y:" + dataCoords.y;
			document.getElementById("iframe").contentWindow.document.open();
			document.getElementById("iframe").contentWindow.document.write(iframeCoords);
			document.getElementById("iframe").contentWindow.document.close()
			console.log("x:" + dataCoords.x + "y:" + dataCoords.y);

		}
	};
	xhttp.open("GET", "ajax_coords.php?coords=" + jsonData, true);
	xhttp.send();
}

ball.addEventListener("click", function( event ){
	run == 0 ? loop() : stopMove()
}, false);

setTimeout(loop, timeDelayStart);

function loop () {
	idLoop = setInterval(loopMove, speed);
	run = 1; 
}

function stopMove() {
	clearInterval(idLoop);
	clearTimeout(idRestart); //Prevenzione per i "Click Compulsivi"
	run = 0;
	loadCoords();
	alert(phrases[Math.floor(Math.random()*3)]);
	idRestart = setTimeout(loop, timeDelayRestart);
}

function loopMove() {
	//console.log('here=' + here);
	if (!here){
		here = firstMove();
	}
	if (here == 1){
		here = secondMove();
	}
	if (here == 2){
		here = thirdMove();
	}
	if (here == 3){
		here = fourthMove();
	}
	if (here == 4){
		here = fifthMove();
	}
}

function firstMove () {
	if(coords.x == 375){
		return 1;
	}

	else{
		coords.x = Math.floor( coords.y * 0.83 );
		ball.style.left = coords.x + 'px';
		ball.style.bottom = coords.y + 'px';
		coords.y++;
		return 0;
	}
}

function secondMove() {
	if (coords.y == 0){
		return 2;
	}
	else{
		ball.style.bottom = coords.y +'px';
		coords.y--;
		return 1;
	}
}

function thirdMove() {
	if (coords.x == 750)
		return 3;
	else{
		coords.x =  Math.floor( coords.y * 1.667 ) + 375;
		ball.style.left = coords.x + 'px';
		ball.style.bottom = coords.y + 'px';
		coords.y++;
		return 2;
	}
}

function fourthMove(){
	if (coords.y == 450 )
		return 4;
	else{
		coords.x = - Math.floor( coords.y * 2.5 ) + 1313;
		ball.style.left = coords.x + 'px';
		ball.style.bottom = coords.y + 'px';
		coords.y++;
		return 3;
	}
}

function fifthMove() {
	if (coords.y == 0 )
		return 0;
	else{
		coords.x = Math.floor(coords.y * 0.4);
		ball.style.left = coords.x + 'px';
		ball.style.bottom = coords.y + 'px';
		coords.y--;
		return 4;
	}
}



