<?php

$x = $_POST["text1"];
$y = $_POST["text2"];

if($x=="cs564" && $y=="student"){
header('location:accidentsdb.html');
}
else
echo "Please check the details you entered!!";
?>