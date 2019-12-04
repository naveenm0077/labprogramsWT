<?php

header('Content-Type:text/plain');
$allTheStates="Mississippi Alabama Texas Massachusetts Kansas";
$statesArray=[];
$states1=explode(' ',$allTheStates);
$i=0;
foreach ($states1 as $state)
{
    if (preg_match('/xas$/',($state)))
    {
        $statesArray[$i]=($state);
        $i++;
        print "\nThe state that ends in xas: ".$state;
    }
}
foreach ($states1 as $state)
{
    if (preg_match('/^k.*s$/i',($state)))
    {
        $statesArray[$i]=($state);
        $i++;
        print "\nThe states that begins with k and ends in s: ".$state;
    }
}
foreach ($states1 as $state)
{
    if (preg_match('/^M.*s$/',($state)))
    {
        $statesArray[$i]=($state);
        $i++;
        print "\nThe states that begins with M and ends in s: ".$state;
    }
}
foreach ($states1 as $state)
{
    if (preg_match('/a$/',($state)))
    {
        $statesArray[$i]=($state);
        $i++;
        print "\nThe states that end in a: ".$state;
    }
}
foreach ($statesArray as $element => $value)
{
    print("\n".$value." is the element ".$element);
}

?>