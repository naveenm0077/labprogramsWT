<?php
$a=array(array(3,4,6),array(2,8,9),array(1,4,2));
$b=array(array(1,3,9),array(7,3,5),array(8,9,3));
$c=array(array(0,0,0),array(0,0,0),array(0,0,0));
echo"first matrix is <br>";
for($i=0;$i<3;$i++)
{
    for($j=0;$j<3;$j++)
    {
        echo $a[$i][$j]." ";
    }
    echo"<br>";
}
echo"second matrix is <br>";

for($i=0;$i<3;$i++)
{
    for($j=0;$j<3;$j++)
    {
        echo $b[$i][$j]." ";
    }
    echo"<br>";
}
echo"transpose of the first matrix is <br>";
for($i=0;$i<3;$i++)
{
    for($j=0;$j<3;$j++)
    {
        echo $a[$j][$i]." ";
    }
    echo"<br>";
}
echo"sum of the matrix is <br>";
for($i=0;$i<3;$i++)
{
    for($j=0;$j<3;$j++)
    {
        $sum=$a[$i][$j]+$b[$i][$j];
        echo $sum." ";
    }
    echo"<br>";
}
echo"multiplication of the matrix is <br>";
for($i=0;$i<3;$i++)
{
    for($j=0;$j<3;$j++)
    {
        for($k=0;$k<3;$k++)
        {
            $c[$i][$j]=$c[$i][$j]+($a[$i][$k]*$b[$k][$j]);
        }
        echo $c[$i][$j]." ";
    }
    echo"<br>";
}
?>