<?php
/**
 * Created by IntelliJ IDEA.
 * User: Lance
 * Date: 8/22/15
 * Time: 9:20 PM
 */

$place = "Ocho Rios";
const __FRUIT__ = "Banana";
function duh($say) {
    # nothing here to see or do.
    return $say;
}

if(isset($place)) {
    echo '$place'." <em>is</em> set";
} elseif(!isset($place)) {
    echo '$place'." is <strong>NOT</strong> set";
}
 echo "<br>";

if(defined("__FRUIT__")) {
    echo '__FRUIT__'." <em>has been</em> defined...horaaaay";
} elseif(!defined("__FRUIT__")) {
    echo '__FRUIT__'." <strong>has not</strong> been defined...Duh!";
}

echo "<br>";

if(function_exists("duh")) {
    echo "Yep the function exists";
} elseif(!function_exists("duh")) {
    echo "Oh no there is no such function";
}


