<?php

echo "Hello adil this is testing part"."<br /> <br />";

$st="Bangladesh is a vary beautiful country";
echo $st."<br />";

$result="";
//$st=strtolower($st);
$result=stristr($st, "e");
echo $result."<br />";
$result=stristr($st, "B");
echo $result."<br />";
$result=stristr($st, "ban");
echo $result."<br />";
$result=stristr($st, "la");

echo "<br />";
echo $result;


?>