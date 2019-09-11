<?php

@session_start();

# THIS IS theme based template engine
# FOR IP AND BROWSER CHECK
if (empty($_SERVER['REMOTE_ADDR']) || empty($_SERVER['HTTP_USER_AGENT'])) {
    exit();
}
date_default_timezone_set('Asia/Kolkata');
# SYSTEM CONSTANTS
define('fileIncluded', true);

# Include the system file

include('./lib/configure.php');

# INITIALIZE FUNCTIONS
$sys = new systemFunction();

$ip = $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USER_AGENT'];

    if (strlen('http://' . $_SERVER['HTTP_HOST']) < strlen($website)) {
        $website = str_replace('www.', '', $website);
    } elseif (strlen('http://' . $_SERVER['HTTP_HOST']) > strlen($website)) {
        $website = str_replace('http://', 'http://www.', $website);
    } else {
        $website = $website;
    }
print_r($_GET['pagefile']);
# GET THE SLUG FILE
$pagefile = $sys->getPageUrl(@$_GET['pagefile']);

$title = '';
$name = '';
$metakey = '';
$metades = '';
if (array_key_exists($pagefile, $menuarray)) {
    $title = $menuarray[$pagefile]['title'];
    $name = $menuarray[$pagefile]['name'];
    $metakey = $menuarray[$pagefile]['meta_key'];
    $metades = $menuarray[$pagefile]['meta_des'];
}

$templateFile = './theme/theme.php';

if (file_exists($templateFile)) {
    include($templateFile);
} else {
    echo $sys->showError('danger', 'Theme file not found. Please try after some time');
}
?>