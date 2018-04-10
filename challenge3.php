<!DOCTYPE html>
<html>
<head>
	<title>Board</title>
	<style>
		body {
			background: gray;
		}
		#board {
		
		}
		.box {
			width: 100px;
			height: 100px;
			display: inline-block;
		}
		.white {
			color: black;
			background: white;
		}
		.black {
			color: white;
			background: black;
		}
	</style>
</head>
<body>
	<div id="board"></div>

<script>
	var size = 10; //number of rows and columns
	var board = ""; //blank canvas

	for (var y = 0; y < size; y++) { //loop row till 10

		var rowNum = y.toString();
		for (var x = 0; x < size; x++) { //loop 10 columns with alternate colors
			var colNum = x.toString();
			var sqrId = rowNum+"_"+colNum
	  		if ((x + y) % 2 == 0) //if odd row + odd column
	    		board += "<div id='"+sqrId+"' class='box white'>"+sqrId+"</div>"; //start with print white
	  		else
	    		board += "<div id='"+sqrId+"' class='box black'>"+sqrId+"</div>"; //start with print black
		}
		board += "</br>"; //new row
	}

	document.getElementById('board').innerHTML = board;//print board
</script>
</body>
</html>