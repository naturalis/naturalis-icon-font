<?php

// Run from terminal, turns CSS selectors into
// SASS-variables. Copy-paste only the last part and append to 
// the CSS file

$homepage = file_get_contents('../font/style.css');
$homepage = str_replace("{\n", "", $homepage);
$homepage = str_replace("\n}", "", $homepage);
$homepage = str_replace("\n}", "", $homepage);
$homepage = str_replace("before", "", $homepage);
$homepage = str_replace("\tcontent:", "", $homepage);
$homepage = str_replace(".", "$", $homepage);
echo $homepage;
?>
