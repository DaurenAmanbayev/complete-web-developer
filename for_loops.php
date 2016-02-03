<?php
/**
 * Created by IntelliJ IDEA.
 * User: Lance
 * Date: 8/22/15
 * Time: 4:28 PM
 */

$ladies = array("Melonie", "Britney", "Rachel", "Linda", "Sharlene");

for($i = 0; $i < count($ladies); $i++) {
    echo $ladies[$i]."<br>";
}


foreach($ladies as $key => $lady) {
    echo $lady."<br>";
}

foreach($ladies as $key => $lady) {
    echo "Index: ".$key." &rarr; ".$lady."<br>";



}