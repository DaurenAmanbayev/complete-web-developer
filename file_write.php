<?php

$fileHandler = fopen('write-file.txt','w') or die('Unable to create file');
$info = " I did ";

fwrite($fileHandler,"I'm learning to write files in PHP and guess what?".$info. '<br>');
fwrite($fileHandler,"This is the day I was looking forward to");
fclose($fileHandler);

include 'write-file.txt';