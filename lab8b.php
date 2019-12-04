<?php

$mat1 = array(array(1,2),array(3,4));
$mat2 = array(array(4,2),array(2,4));

echo "Matrix 1=<br>";
for ($i=0; $i < count($mat1); $i++)
{
    for ($j=0; $j < count($mat1[0]); $j++)
    { 
        echo $mat1[$i][$j]." ";
    }
    echo "<br>";
}
echo "Matrix 2=<br>";
for ($i=0; $i < count($mat2); $i++)
{
    for ($j=0; $j < count($mat2[0]); $j++)
    { 
        echo $mat2[$i][$j]." ";
    }
    echo "<br>";
}
echo "<br>";

for ($i=0; $i < count($mat1); $i++)
{
    for ($j=0; $j < count($mat1[0]); $j++)
    { 
        $add[$i][$j]=$mat1[$i][$j]+$mat2[$i][$j];
    }
}
echo "Sum=<br>";
for ($i=0; $i < count($mat1); $i++)
{
    for ($j=0; $j < count($mat2); $j++)
    { 
        echo $add[$i][$j]." ";
    }
    echo "<br>";
}
echo "<br>";

$pro=[[0,0],[0,0]];
for ($i=0; $i < count($mat1); $i++)
{
    for ($j=0; $j < count($mat1[0]); $j++)
    {
      
        for ($k=0; $k < count($mat1[0]); $k++) { 
            $pro[$i][$j]=$pro[$i][$j]+($mat1[$i][$k]*$mat2[$k][$j]);
        }
    }
}
echo "Product=<br>";
for ($i=0; $i < count($mat1); $i++)
{
    for ($j=0; $j < count($mat1[0]); $j++)
    { 
        echo $pro[$i][$j]." ";
    }
    echo "<br>";
}
echo "<br>";

echo "Transpose=<br>";
for ($i=0; $i < count($mat1); $i++)
{
    for ($j=0; $j < count($mat1); $j++)
    {
        echo $mat1[$j][$i]." ";
    }
    echo "<br>";
}
?>