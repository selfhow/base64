<?php
date_default_timezone_set("Asia/Seoul");
//error_reporting(0);
ini_set('memory_limit', '128M');
set_time_limit (0);

$toblogmsg = '';
$txtinput = '';
$txtcontentbase64 = '';
$txtcontenttext = '';
$ispost = false;
if (isset($_POST['btnconvert'])){	
	$ispost = true;
	$txtinput = $_POST['txtinput'];
	$txtcontentbase64 = base64_encode($txtinput);
	$txtcontenttext = base64_decode($txtinput);
}

include_once('templates/sosimple.html');
?>