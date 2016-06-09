<?php
/**
 * Calculator file is using namespaces whcih are namespace1 and namespace2.
 */


namespace calculator;
include 'namespace1.php';
include 'namespace2.php';

/**
 * Returning true after creating namespace
 * @return boolean
 */
function namespacechecking()
{
    $adding = new \add\calculating;
    $adding->calc();
    echo "<br>";
    $subtracting= new \sub\calculating;
    $subtracting->calc();
    return true;
}
?>