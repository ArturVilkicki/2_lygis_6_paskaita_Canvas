<!DOCTYPE html>
<html>
<head>
	<title>Uzduotys</title>
</head>
<body>
<canvas id="myCanvas" width="700" height="300" style="border: 1px solid black"></canvas>
<canvas id="myCanvas2" width="700" height="300" style="border: 1px solid black"></canvas>
<canvas id="myCanvas3" width="700" height="300" style="border: 1px solid black"></canvas>
<canvas id="myCanvas4" width="700" height="300" style="border: 1px solid black"></canvas>
<canvas id="myCanvas5" width="700" height="300" style="border: 1px solid black"></canvas>
<script>
	//trapecijos braizymas
	
	var c = document.getElementById("myCanvas");
	var ctx = c.getContext("2d");
	ctx.moveTo(200,0);
	ctx.lineTo(300,0);
	ctx.lineTo(350,100);
	ctx.lineTo(150,100);
	ctx.lineTo(200,0);
	ctx.stroke();
	
	//rombo braizymas
	var c = document.getElementById("myCanvas2");
	var ctx = c.getContext("2d");
	ctx.moveTo(200,0);
	ctx.lineTo(225,25);
	ctx.lineTo(200,50);
	ctx.lineTo(175,25);
	ctx.lineTo(200,0);
	ctx.stroke();

	//zigzagging line
	var c = document.getElementById("myCanvas3");
	var ctx = c.getContext("2d");
	ctx.moveTo(100,0);
	ctx.lineTo(200,10);
	ctx.lineTo(100,20);
	ctx.lineTo(200,30);
	ctx.lineTo(100,40);
	ctx.lineTo(200,50);
	ctx.lineTo(100,60);
	ctx.lineTo(200,70);
	ctx.lineTo(100,80);
	ctx.lineTo(200,90);
	ctx.lineTo(100,100);
	ctx.lineTo(200,110);
	ctx.lineTo(100,120);
	ctx.stroke();
	//spirales braizymas
	var c=document.getElementById("myCanvas4");
    var cxt=c.getContext("2d");
    var centerX = 150;
    var centerY = 150;
    cxt.moveTo(centerX, centerY);

    var STEPS_PER_ROTATION = 20;
    var increment = 2*Math.PI/STEPS_PER_ROTATION;       
    var theta = increment;

    while( theta < 10*Math.PI) {
      var newX = centerX + theta * Math.cos(theta); 
      var newY = centerY + theta * Math.sin(theta); 
      cxt.lineTo(newX, newY);
      theta = theta + increment;
    }
    cxt.stroke();
    //Saulutes braizymas
    var c = document.getElementById("myCanvas5");
	var ctx = c.getContext("2d");
	ctx.beginPath();
	ctx.moveTo(20, 20);
	ctx.quadraticCurveTo(150, 150, 150, 0);
	ctx.quadraticCurveTo(150, 150, 280, 20);
	ctx.quadraticCurveTo(150, 150, 300, 150);
	ctx.quadraticCurveTo(150, 150, 280, 280);
	ctx.quadraticCurveTo(150, 150, 150, 300);
	ctx.quadraticCurveTo(150, 150, 20, 280);
	ctx.quadraticCurveTo(150, 150, 0, 150);
	ctx.quadraticCurveTo(150, 150, 20, 20);
	ctx.stroke();
	ctx.fillStyle = "red";
	ctx.fill();
	
</script>
</body>
</html>