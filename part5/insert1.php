<?php
// Inserts data collected from the user interface and inserts it into the database.

$con = mysql_connect("localhost","root","vijay");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("python_cs564", $con);

$sql1="INSERT INTO accident(acc,county,time_1,milepoint,pstd_rte,acc_date,severity) VALUES
('$_POST[text1]','$_POST[text2]','$_POST[text3]','$_POST[text4]','$_POST[text5]','$_POST[text6]','$_POST[text7]')";

$sql2="INSERT INTO accident_occupants (ssn,injury_level,alc_test,age,sex,seat_pos)
VALUES
('$_POST[text8]','$_POST[text9]','$_POST[text10]','$_POST[text11]','$_POST[text12]','$_POST[text13]')";

if (!mysql_query($sql1,$con))
  {
  die('Error1:  ' . mysql_error());
  }
if (!mysql_query($sql2,$con))
  {
  die('Error2: ' . mysql_error());
  }

echo "1 record added";

mysql_close($con)
?> 