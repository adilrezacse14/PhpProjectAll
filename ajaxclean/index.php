<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title> Ajax tutorial testing...</title>
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
</head>
<body>
	
	<div class="inputbox">
		<h2 style="text-align:center;color:aqua;">Wel come to ajax learning </h2>
		<hr />
	<form action="">
		Name testing: <input style="padding:5px 10px;" type="text" onkeyup="showHint(this.value)" />
		<p ><span style="color:red;">Suggestions:</span> <span id="hints"></span> </p>
	
	</form>
	
	</div>
	
	
	
	<script type="text/javascript">
		
		function showHint(inputdata)
		{
			var xhttpr;
			if(inputdata.length==0){
				document.getElementById('hints').innerHTML="Type somethings..";
				return;
			}
			else
			{
				xhttpr= new XMLHttpRequest();
				xhttpr.onreadystatechange = function()
				{
					if(this.readyState==4 && this.status==200)
						document.getElementById('hints').innerHTML=this.responseText;
				};
				xhttpr.open('GET', 'getinfoname.php?q='+inputdata, true);
				xhttpr.send();
			}
			
		};
		
	
	
	</script>
	
	
	
	
	
	
</body>
</html>