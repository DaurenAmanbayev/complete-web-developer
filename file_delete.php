<?php

$fileHandle = fopen('file-to-delete.txt','w');
fwrite($fileHandle,'I\'ve been given a second chance at life.');
fclose($fileHandle);

$file2 = fopen('file-to-delete.txt','r');
$contents = fread($file2,filesize('file-to-delete.txt'));
echo $contents;
fclose($file2);