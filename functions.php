<?php
/**
 * Created by IntelliJ IDEA.
 * User: Lance
 * Date: 8/22/15
 * Time: 8:30 PM
 */function sayMyName() {
    echo "Lancelot Edwards <br>";
}
sayMyName();

function sayMyNameAgain() {
    return "Lancelot the PHP function expert"."<br>";
}
echo sayMyNameAgain();

function takeAway($a, $b) {
    $answer = $a - $b;
    return $answer."<br>";

}
echo takeAway(45, 9);

function whoIsIt($name) {
    if($name == "Lancelot") {
        return true;
    } else {
        return false;
    }
}

if(whoIsIt("Lancelot")) {
    echo "You know it &rarr; Lancelot is the PHP guru.";
} else {
    echo "Meh that person isn't authorized to be on this level.";
}