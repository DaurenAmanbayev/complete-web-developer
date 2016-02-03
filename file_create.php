<?php

$fileHandler = fopen('tcwd_createdFile.txt','w') or die('Unable to create file...ouch');
fclose($fileHandler);