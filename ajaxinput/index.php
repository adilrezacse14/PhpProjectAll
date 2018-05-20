<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>final task</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	
	
	
	
</head>
<body>
			<h1 style="color:red;">Hello this is about the ajax chill it</h1>

	<div class="inputboxx">
	
		<form id="form" name="form" method="post" action='' >
	
		<h2 style="text-align:center;">Name</h2>
		<h2 style="text-align:center;"><input style="padding:7px 10px;" type="text" name="name1" id="name1" placeholder="namplease"/></h2>
		<h2 style="text-align:center;">Name2</h2>
		<h2 style="text-align:center;"><input style="padding:7px 10px;" type="text" name="name2" id="name2" placeholder="namplease"/></h2>
		<h2 style="text-align:center;">Name3</h2>
		<h2 style="text-align:center;"><input style="padding:7px 10px;" type="text" name="name3" id="name3" placeholder="namplease"/></h2>
		<h2 style="text-align:center;">Name4</h2>
		<h2 style="text-align:center;"><input style="padding:7px 10px;" type="text" name="name4" id="name4" placeholder="namplease"/></h2>
		
		<h2 style="text-align:center;"><input type="button" id="submit" value="send silently" onclick="myfunction(this.value)" /></h2>
		
		
		</form>
	
	</div>
	
	
	<script type="text/javascript">
	
		function myfunction(bal)
		{
			var nam1=document.getElementById("name1").value;
			var nam2=document.getElementById("name2").value;
			var nam3=document.getElementById("name3").value;
			var nam4=document.getElementById("name4").value;
			
			var datastring= 'name11=' + nam1 + '&name22=' + nam2 + '&name33=' + nam3 + '&name44=' +nam4;
			//var datastring= 'name11=' + nam1 + 'name22=' + nam2 + '&name33=' + nam3 + '&name44=' +nam4;
		
		
		
		if (nam1 == '' || nam2 == '' || nam3 == '' || nam4 == '') {
				alert("Please Fill All Fields");
			}
		 else
		 {
			 $.ajax({
				 type:"POST",
				 url: "process.php",
				 data: datastring,
				 success: function(html)
				 {
				 //alert("Thank u");
				 alert(html);
				 }
				
			 });
			
		 }
	}
		
	
	</script>
	
	
	
</body>
</html>