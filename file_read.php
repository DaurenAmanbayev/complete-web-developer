<?php

$fileHandle = fopen('read.txt', 'w') or die('Meh unable to create file');
$moreInfo = "Working with PHP ";
fwrite($fileHandle, $moreInfo.'functions is awesome and I don\'t mind using this language at all.');
fclose($fileHandle);

$fileRead = fopen('read.txt', 'r') or die('Ouch failed to read the contents of the file');
$contents = fread($fileRead, filesize('read.txt'));
fclose($fileRead);
echo $contents;