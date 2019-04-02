<?php

$the_user="root";
$myfile = fopen("password.txt", "r");
$the_pass=fread($myfile,filesize("password.txt"));
fclose($myfile);