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

