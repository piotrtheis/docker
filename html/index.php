<?php 

function debugMePlease(&$x)
{
    $randVal = rand(1, 100);
    $newExtraValue = $x * $randVal;

    return $newExtraValue;
}

$x = 123;

$result = debugMePlease($x);

echo $result;

phpinfo();
