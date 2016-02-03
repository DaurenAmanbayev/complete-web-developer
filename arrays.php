<?php
/**
 * Created by IntelliJ IDEA.
 * User: Lance
 * Date: 8/22/15
 * Time: 11:54 AM
 */

$family = array("Lancelot", "Lenville", "Doris", "Terrence", "Fitzgerald");

echo $family[0]." "."is the second child";
echo "<br>";
echo $family[1]." "."is the child who died";
echo "<br>";

$couples = array('husband' => "Lancelot", 'wife' => "Monica", 'son' => "Michael", 'daughter' => "Olivia");
echo $couples['husband']." "."is married to"." ".$couples['wife']." "."and they have two kids:"." ".$couples['son']." "."and"." ".$couples['daughter'];
echo "<br>";

$multi = array("children" => array("Lancelot", "Terrence","Lenville"), "parents" => array("Fitzgerald", "Doris"));
echo $multi['children'][0]." "."is the second child of"." ".$multi['parents'][0]." "."and"." ".$multi['parents'][1];
