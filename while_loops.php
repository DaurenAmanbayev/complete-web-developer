<?php
/**
 * Created by IntelliJ IDEA.
 * User: Lance
 * Date: 8/22/15
 * Time: 5:10 PM
 */

$age = 40;
$count = 0;

while ($count <= $age) {
    echo "Count is currently &rarr; ".$count."<br>"
    ;
    $count+=4;
}

$count = 0;

do {
    echo "I freaking love PHP!!! &rarr; ".$count." times <br>  ";
    $count+=5;

} while($count <= $age);