Number and integer:
<?php

/**
 * Desription: Functions being used here. One with global   variable and other with parameters passing
 */
$value1 = 420;
$value2 = 20;
$value3 = "is not stupid";
/**
 * Description: Adding integer and string
 * @global int $value1
 * @global string $value3
 * @return string
 */
function addintstring()
{
    global $value1, $value3;
    $result = $value1.' '.$value3;
    return $result;
}
$output=addintstring();
echo $output ;

echo "<br>";
echo "Number and Number:"; 

/**
 * Description: Adding number in number
 * @param int $no1
 * @param int $no2
 * @return int
 */
function addnumbers($no1,$no2)
{
    return $no1+$no2;
}
        
echo addnumbers($value1,$value2);
?>