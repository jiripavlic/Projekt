<?php
		include "../connection.php";
		$fn=$_POST['First_Name'];
		$ln=$_POST['Last_Name'];
		$p=$_POST['Vek'];
		$con=$_POST['Contact_Number'];
		$query="insert into customer(First_Name,Last_Name,Vek,Contact_Number) values('$fn','$ln',$p,$con)";
		mysqli_query($conn,$query) or die($query."Can't Connect to Query...");
?>