<?php
/**
 * Dynamic arrays implemented here.
 */

$array = array("red","green","blue");
array_push($array, "black");
var_dump($array);
$array[3]="white";
echo "<br>";
var_dump($array);
array_push($array, "black");//pushing in array
echo "<br>";
var_dump($array);
array_pop($array);//pop last item
echo "<br>";
var_dump($array);
$multarray = array(array("laptop","mobile"),array("sword","shield"));//multidimensional array
echo "<br>";
var_dump($multarray);
echo "<br>";
echo $multarray[0][1];
?>