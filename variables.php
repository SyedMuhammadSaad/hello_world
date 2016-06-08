<?php
$var0=5;
$var2=16;
$var3=5;
echo "a as string is concatenated in integer which is type casted as string: ";
$var="a".(string)($var0+$var2);
var_dump($var);
echo "<br> a as string is concatenated in integer: ";
$var="a".($var0+$var2);
var_dump($var);
echo "<br> a as string is concatenated in integer but is converted to int type: ";
$var="a".$var0+$var2;
var_dump($var);
echo "<br> integer is concatenated in a as string but is converted to string type: ";
$var=($var0+$var2)."a";
var_dump($var);
echo "<br> integer is concatenated in a as string but it is still converted to string type: ";
$var=$var0+$var2."a";
var_dump($var);
echo "<br> integer is concatenated in a as string and type casted to int type: ";
$var=(int)(($var0+$var2)."a");
var_dump($var);
echo "<br>";

?>

