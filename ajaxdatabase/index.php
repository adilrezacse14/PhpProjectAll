<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title> ajax database </title>
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
</head>
<body>
	
	<div class="checkingbox">
		
		<h3 style="text-align:center;color:black;">Mail checking </h3>
		<hr />
		<form action="" >
			<h3 style="padding-left:15px;">Chacek Mail: <input style="padding:7px 10px;font-weight:bold;" placeholder="Your mail" type="email" onkeyup="showresult(this.value)" /></h3>
		</form>
		
		<p><span style="color:green">Suggesstions: </span> <span id="mailcheck"></span></p>
		
	</div>
	
	<script type="text/javascript">
		
		function showresult(mail)
		{
			// var len=mail.length;
			// document.getElementById("mailcheck").innerHTML=len;
			
			var xmlhttpr;
			
			if(mail.length==0)
			{
				document.getElementById("mailcheck").innerHTML="type somethings...";
				return;
			}
			else
			{
				var xmlhttpr= new XMLHttpRequest();
				//document.getElementById("mailcheck").innerHTML="Yooo adil...";
				xmlhttpr.onreadystatechange=function()
				{
					if(this.readyState==4 && this.status==200)
						document.getElementById("mailcheck").innerHTML=this.responseText;
					
				};
				
				xmlhttpr.open("GET", "process.php?q="+mail, true);
				xmlhttpr.send();
				
			}
		}
	
	
	</script>
	
</body>
</html>