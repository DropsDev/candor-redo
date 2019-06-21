<?php
$location=$_POST["location"];
$content="";
$myfile = fopen($location, "w") or die("Unable to open file!");
fwrite($myfile, "");
fclose($myfile);
?>