<?php

$img = 'images/tabs/board-cushions-white.png';

$old_file_name = basename($img);
$new_file_name = 'cvvvvv'.$old_file_name;
$img = str_replace($old_file_name, $new_file_name, $img);
echo $img;
