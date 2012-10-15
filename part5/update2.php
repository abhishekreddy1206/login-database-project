<?php
// Updates the database by taking in Accident number, Social security number and the new value I want to upadate a particular attribute by using the drop down menu.
$x = $_GET["jumpMenu"];
$y = $_GET["text1"];
$w = $_GET["text3"];
$s = $_GET["text4"];
$con = mysql_connect("localhost","root","vijay");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("python_cs564", $con);

if ($x=="Route"){
$sql1 = "UPDATE accident SET pstd_rte='$y' WHERE acc=$w";

if (!mysql_query($sql1,$con))
  {
  die('Error1: ' . mysql_error());
  }

echo "record updated";

mysql_close($con);

}

if ($x=="Date"){
$sql1 = "UPDATE accident SET acc_date='$y' WHERE acc=$w";

if (!mysql_query($sql1,$con))
  {
  die('Error1: ' . mysql_error());
  }

echo "record updated";

mysql_close($con);

}

if ($x=="Injury level"){
$sql1 = "UPDATE accident_occupants SET injury_level='$y' WHERE ssn=$s";

if (!mysql_query($sql1,$con))
  {
  die('Error1: ' . mysql_error());
  }

echo "record updated";

mysql_close($con);

}

?>