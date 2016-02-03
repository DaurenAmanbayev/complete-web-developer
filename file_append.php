<?php

$fileHandler1 = fopen('append.txt','w');
$str1 = 'My name is Lancelot Edwards';
$str2 = ' and I\'m a web developer';
fwrite($fileHandler1, $str1);
fclose($fileHandler1);

$fileHandler2 = fopen('append.txt','a');
fwrite($fileHandler2, $str2);
fclose($fileHandler2);

$fileHandler3 = fopen('append.txt','r');
$contents = fread($fileHandler3, filesize('append.txt'));
fclose($fileHandler3);

echo $contents;
