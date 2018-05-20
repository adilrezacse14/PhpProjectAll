<?php
	
	$data1=$_POST['name11'];
	$data2=$_POST['name22'];
	$data3=$_POST['name33'];
	$data4=$_POST['name44'];
	
	$connection=mysqli_connect("localhost","root","","ajaxdatabase");
	if(isset($_POST['name11']))
	{	
		$sql="insert into ajaxjs values('$data1','$data2','$data3','$data4')";
		$result=mysqli_query($connection, $sql);
		if($result)
			echo "Hello this is some special for our ankd asdffk sjdf";
		else
			echo "sorry to insert";
	}


?>