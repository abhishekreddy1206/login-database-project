<?php
// Queries the details of an accident using the year of the accident.

$x = $_GET["jumpMenu"];
$db_host = "localhost";
$db_username = "root";
$db_pass = "vijay";
$db_name = "python_cs564";

@mysql_connect("$db_host","$db_username","$db_pass") or die ("Could not connect");
@mysql_select_db("$db_name") or die ("No database");

$query = "SELECT * FROM accident where year(acc_date) = $x";
$result=mysql_query($query);
$num=mysql_numrows($result);

echo "<b><center>Database Output</center></b><br><br>";
$i=0;
while ($i < $num) {

$acc=mysql_result($result,$i,"acc");
$county=mysql_result($result,$i,"county");
$time=mysql_result($result,$i,"time_1");
$milept=mysql_result($result,$i,"milepoint");
$pstd_rte=mysql_result($result,$i,"pstd_rte");
$date=mysql_result($result,$i,"acc_date");
$sev=mysql_result($result,$i,"severity");

echo "<b>Accident number:$acc County:$county</b><br>Time of accident:$time<br>Mile Point:$milept<br>Route Number:$pstd_rte<br>Date of accident:$date<br>Severity of the accident:$sev<br><hr><br>";

$i++;
}
echo"succesful";


?>