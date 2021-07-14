<?php

$file = fopen("learncode.txt", "r");

//to read the learncode file, we apply the fread() function

echo fread($file,filesize("learncode.txt"));

fclose($file);

?>