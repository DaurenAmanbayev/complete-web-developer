<?php
/**
 * Created by IntelliJ IDEA.
 * User: Lance
 * Date: 8/22/15
 * Time: 5:36 PM
 */

$name = "Lancelot Edwards";
$mixture = array("Lance", "Patrice", "Languages" => array("HTML", "PHP", "CSS", "Javascript", "JQuery", "Ajax", "MySQL"));

foreach($mixture as $value) {

    if(is_array($value)) {

        continue;
    }
    echo $value."<br>";

}

echo "My name is &rarr; $name"."<br>";
echo 'My name is &rarr; $name';
