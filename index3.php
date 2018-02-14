<!DOCTYPE html>
<html>
<head>
	<title>Drawing App!</title>
</head>
<body>
<canvas id="canvasInAPerfectWorld" width="490" height="220" style="border: 1px solid black"></canvas>
<div id="canvasDiv"></div>
<button  id="isvalymas">Clear!</button>
<button id="violetine">Purple</button>
<button id="zalia">Green</button>
<button id="geltona">Yellow</button>
<button id="ruda">Brown</button>
<script>
	canvas = document.getElementById('canvasInAPerfectWorld');
	/*
	var canvasDiv = document.getElementById('canvasDiv');
	canvas = document.createElement('canvas');
	canvas.setAttribute('width', 490);
	canvas.setAttribute('height', 220);
	canvas.setAttribute('id', 'canvas');
	canvasDiv.appendChild(canvas);
	if(typeof G_vmlCanvasManager != 'undefined') {
	canvas = G_vmlCanvasManager.initElement(canvas);
	}
	*/
	context = canvas.getContext("2d");
	canvas.addEventListener('mousedown', function(e){
	  	var mouseX = e.pageX - this.offsetLeft;
	  	var mouseY = e.pageY - this.offsetTop;
	  	paint = true;
	  	addClick(e.pageX - this.offsetLeft, e.pageY - this.offsetTop);
	  	redraw();
	});
	
	canvas.addEventListener("mousemove", function(e){
  	if(paint){
    	addClick(e.pageX - this.offsetLeft, e.pageY - this.offsetTop, true);
    	redraw();
  	}
	});

	canvas.addEventListener('mouseup', function(e){
  		paint = false;
	});

	canvas.addEventListener('mouseleave', function(e){
  		paint = false;
	});
	var clickX = new Array();
	var clickY = new Array();
	var clickDrag = new Array();
	var clickColor = new Array();
	var paint;
	var colorPurple = "#cb3594";
	var colorGreen = "#659b41";
	var colorYellow = "#ffcf33";
	var colorBrown = "#986928";
	var curColor = colorPurple;
	
	button = document.getElementById('isvalymas');
	button.addEventListener('click', function(e){
		console.log(clickX);
			clickX.splice(0,clickX.length);
			clickY.splice(0,clickY.length);
			clickDrag.splice(0,clickDrag.length);
			redraw();
		//clickX.remove();
		//clickY.remove();
		//clickDrag.remove();
	});
	button.addEventListener('click', function(e){
		clickColor.push("#986928");
	});
	function addClick(x, y, dragging)
	{
  		clickX.push(x);
  		clickY.push(y);
  		clickDrag.push(dragging);
  		//clickColor.push(curColor);
	}
	function redraw(){
  		context.clearRect(0, 0, context.canvas.width, context.canvas.height); // Clears the canvas
  
  		context.strokeStyle = "#df4b26";
  		context.lineJoin = "round";
  		context.lineWidth = 5;
			
  		for(var i=0; i < clickX.length; i++) {		
    		context.beginPath();
    	if(clickDrag[i] && i){
      		context.moveTo(clickX[i-1], clickY[i-1]);
     	}else{
       		context.moveTo(clickX[i]-1, clickY[i]);
     	}
     	context.lineTo(clickX[i], clickY[i]);
     	context.closePath();
     	context.strokeStyle = clickColor[i];
     	context.stroke();
  }
}

</script>

</body>
</html>