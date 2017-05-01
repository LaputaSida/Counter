<?php 
	require_once("dbtools.inc.php");	  
	$link = create_connection();
	
	session_start();
	$_SESSION['Patient_Id']=$POST["pid"];
	$_SESSION['Hid_Number']=$POST["hid"];
	$_SESSION['Date']=$POST["date"];
	
	$Patient_Id=$POST["pid"];
	$Hid_Number=$POST["hid"];
	$Date=$POST["date"];
	$sql="SELECT * FROM Patient_Treat WHERE Patient_Id='$Patient_Id'";
	$result = execute_sql($link, "rehabilitation_scheduling", $sql);
	
	mysqli_free_result($result);
	$sql="INSERT INTO Patient_Treat(Patient_Id,Hid_Number,Date)VALUES('$Patient_Id','$Hid_NumberDat','$Date')";
	$sql="SELECT * FROM Treatment WHERE Hid_Number='$Hid_Number'";
	$sql="INSERT INTO Patient_Treat(Patient_Id,Hid_Number,Date)VALUES('$Patient_Id','$Hid_NumberDat','$Date')";
	
	
	$Rhand=$_POST["Rhand"];
	if($_POST["Rhand"]=="Submit"){
		$num=count($Rhand);
		for($i=0;$i<$num;$i++){
			$query="INSERT INTO Patient_Treat(Parts)VALUES('$Rhand')";
			mysql_query($query)or die(mysql_error());
		}
		
	}
	
	$result = 
?>