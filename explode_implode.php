<?php
/**
 * Created by IntelliJ IDEA.
 * User: Lance
 * Date: 8/22/15
 * Time: 12:30 PM
 */
$names = array("Sandy", "Monica", "Gwen", "Patrice");
$imploded = implode(", ", $names);
echo "All the girls I've loved before:"." ".$imploded." "."-"."I wish";
echo "<br>";

$song = "To all the girls I've loved before";
$exploded = explode(" ",$song, 5);

foreach($exploded as $so) {
    echo $so . "<br>";
}