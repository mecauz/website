
<meta http-equiv="refresh" content="2;URL= http://mecauz.com">

<?
require("class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();                                   // send via SMTP
$mail->Host     = "mail.mecauz.com"; // SMTP servers
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "info@mecauz.com";  // SMTP username
$mail->Password = "123Uzun456!"; // SMTP password
$mail->CharSet = 'UTF-8';
$mail->Port = 587;
$mail->From     = "info@mecauz.com"; // smtp kullanycy adynyz ile ayny olmaly
$mail->Fromname = "giden ismi";
$mail->AddAddress("info@mecauz.com","");
$mail->Subject  =  $_POST['isim'];
$mail->Body     =  implode("  ",$_POST);
if(!$mail->Send())
{
   echo "Mail Failed <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo '<script type="text/javascript">alert("Email has been sent successfully");</script>';

?>
