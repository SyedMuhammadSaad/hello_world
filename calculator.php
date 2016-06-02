<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace calculator;
include 'namespace1.php';
include 'namespace2.php';

/*echo cal\adding::calc();
echo cal\subtracting::calc();
*/
$adding = new \add\adding;
$adding->calc();
echo "<br>";
$subtracting= new \sub\subtracting;
$subtracting->calc();
?>