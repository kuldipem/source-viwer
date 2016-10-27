<?php 
header("Content-Type: text/html");
$homepage = file_get_contents($_GET['link']);
print $homepage;

?>
