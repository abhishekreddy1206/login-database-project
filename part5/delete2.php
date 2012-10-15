<?php
// Deletes records from the database using Accident number/SSN/Route on which the accident took place/Year of accident/Car registration number.
$x = $_GET["jumpMenu"];
$y = $_GET["text1"];
$con = mysql_connect("localhost","root","vijay");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("python_cs564", $con);

if ($x=="Accident number"){

$sql1 = "DELETE FROM accident WHERE acc=$y"	;

if (!mysql_query($sql1,$con))
  {
  die('Error1: ' . mysql_error());
  }

echo "record deleted";

mysql_close($con);

}


if ($x=='SSN'){
$sql2 = "DELETE FROM accident_occupants WHERE ssn=$y"	;

if (!mysql_query($sql2,$con))
  {
  die('Error1: ' . mysql_error());
  }

echo "record deleted";

mysql_close($con);
	
	
}

if ($x=='Route'){

$sql3 = "DELETE FROM accident WHERE pstd_rte='$y'"	;

if (!mysql_query($sql3,$con))
  {
  die('Error1: ' . mysql_error());
  }

echo "record deleted";

mysql_close($con);
	
}

if ($x=='Year'){

$sql4 = "DELETE FROM accident WHERE year(acc_date)=$y"	;

if (!mysql_query($sql4,$con))
  {
  die('Error1: ' . mysql_error());
  }

echo "record deleted";

mysql_close($con);

}
if ($x=='Car number'){
	$sql5 = "DELETE FROM acc_vehicle WHERE car=$y"	;

if (!mysql_query($sql5,$con))
  {
  die('Error1: ' . mysql_error());
  }

echo "record deleted";

mysql_close($con);
}
	
?>