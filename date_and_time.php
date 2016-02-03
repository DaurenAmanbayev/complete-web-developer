<?php

$time = time();
echo $time;
echo "<br>";
echo $today = date('M d Y H:i A', $time); echo "<br>";
$born = mktime(0, 0, 0, 1, 15, 1976);
echo $b = date('M d Y', $born + 60*60*24);

$cat = 9;
$dog = 7;