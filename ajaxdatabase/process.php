<?php

//echo "Hello adil how are you";

$conn=mysqli_connect("localhost","root","", "ajaxdatabase");

$q=$_REQUEST["q"];
	if($q=="")
	{
		//echo "blank";
	}
	else
	{
		//echo "nO balank";
		$sql="select *from prothom where mail='$q'";
		$res=mysqli_query($conn, $sql);
		if($res)
		{
			$row=mysqli_fetch_array($res);
			$mail=$row['mail'];
			if($mail==$q)
			{
				echo "<span style='color:red; font-size:30px;'>*sorry already exist</span>";
			}
			else
			{
				echo "validation running.....";
			}
			
		}
		
		
	}


?>