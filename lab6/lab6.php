<?php
$fname = "count.txt";
$count = file_get_contents($fname);
$count++;
file_put_contents($fname, $count);
echo "You are the " . $count . " visitor of the page";
?>