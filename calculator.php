<?php



namespace calculator;
include 'namespace1.php';
include 'namespace2.php';

/**
 * Returning true after creating namespace
 * @return boolean
 */
function namespacechecking()
{
    $adding = new \add\adding;
    $adding->calc();
    echo "<br>";
    $subtracting= new \sub\subtracting;
    $subtracting->calc();
    return true;
}
?>