<?PHP
// Queries the details of accidents based on accident date/vehicle model/location/car registration number.
$x = $_POST["text1"];
$y = $_POST["text2"];
$z = $_POST["text3"];
$w = $_POST["text4"];
$db_host = "localhost";
$db_username = "root";
$db_pass = "vijay";
$db_name = "python_cs564";

@mysql_connect("$db_host","$db_username","$db_pass") or die ("Could not connect");
@mysql_select_db("$db_name") or die ("No database");

if (!empty($x)){
$query1 = "SELECT ao. * , i.acc FROM accident_occupants ao, involves i WHERE ao.ssn IN (SELECT ssn
FROM involves WHERE acc IN ( SELECT acc FROM accident WHERE acc_date = '$x' )) AND ao.ssn = i.ssn ORDER BY ao.ssn ";
$result = mysql_query($query1);
$num=mysql_numrows($result);

echo "<b><center>Database Output</center></b><br><br>";
$i=0;
while ($i < $num) {

$ssn=mysql_result($result,$i,"ssn");
$ilevel=mysql_result($result,$i,"injury_level");
$atest=mysql_result($result,$i,"alc_test");
$age=mysql_result($result,$i,"age");
$sex=mysql_result($result,$i,"sex");
$seatpos=mysql_result($result,$i,"seat_pos");
$acc=mysql_result($result,$i,"acc");

echo "<b>social security number:$ssn accident number:$acc </b><br>injury level:$ilevel Result of alcohol test:$atest<br>age:$age<br>sex:$sex<br>seat position:$seatpos<br><hr><br>";

$i++;
}
}
if (!empty($y)){
$query1 = "SELECT * FROM acc_vehicle WHERE vehicle_model = '$y'";
$result = mysql_query($query1);
$num=mysql_numrows($result);

echo "<b><center>Database Output</center></b><br><br>";
$i=0;
while ($i < $num) {

$cars=mysql_result($result,$i,"car");
$vm=mysql_result($result,$i,"vehicle_model");
$acf=mysql_result($result,$i,"acf");
$bs=mysql_result($result,$i,"body_style");

echo "<b>Car registration number:$cars Vehicle Model:$vm </b><br>Accident Contributing factor code: $acf <br>Body Style of the vehicle:$bs<br><hr><br>";

$i++;
}
}

if (!empty($z)){
$query1 = "SELECT * FROM accident WHERE county = $z";
$result = mysql_query($query1);
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
}

if (!empty($w)){
$query1 = "SELECT * FROM acc_vehicle WHERE car = '$w'";
$result = mysql_query($query1);
$num=mysql_numrows($result);

echo "<b><center>Database Output</center></b><br><br>";
$i=0;
while ($i < $num) {

$cars=mysql_result($result,$i,"car");
$vm=mysql_result($result,$i,"vehicle_model");
$acf=mysql_result($result,$i,"acf");
$bs=mysql_result($result,$i,"body_style");

echo "<b>Car registration number:$cars Vehicle Model:$vm </b><br>Accident Contributing factor code: $acf <br>Body Style of the vehicle:$bs<br><hr><br>";

$i++;
}
}

?>