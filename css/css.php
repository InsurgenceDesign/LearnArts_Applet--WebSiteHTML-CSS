<?php 
 
$msie        = strpos($_SERVER["HTTP_USER_AGENT"], 'MSIE') ? true : false; 
$firefox    = strpos($_SERVER["HTTP_USER_AGENT"], 'Firefox') ? true : false;
$safari        = strpos($_SERVER["HTTP_USER_AGENT"], 'Safari') ? true : false;
$chrome        = strpos($_SERVER["HTTP_USER_AGENT"], 'Chrome') ? true : false;

if ($msie) {
include 'msie.php';
}


if ($safari) {
include 'safari.php';
}


if ($firefox) {
include 'firefox.php';
}
    


if ($chrome) { // Safari?
include 'chrome.php';
}



?>