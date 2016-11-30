<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
require 'PHPMailer/PHPMailerAutoload.php';
error_reporting(E_ALL);



$isMailerActive=true;
$isNoError=true;
$errorMsg="";
if (!filter_var($_POST['InputEmail'], FILTER_VALIDATE_EMAIL)) {
    $errorMsg = "This ({$_POST['InputEmail']}) email address is not considered valid.";
    $isNoError=false;
    die("<h1>{$errorMsg}</h1>");
}
//
try {
        //die("<h1>stage 1</h1>");
        $mail = new PHPMailer(true);
        //die("<h1>stage 2</h1>");
        $mail->IsSMTP(); // Using SMTP.
        $mail->CharSet = 'utf-8';
        $mail->SMTPDebug = 0; // Enables SMTP debug information - SHOULD NOT be active on production servers!
        $mail->Debugoutput = 'html';
        //$mail->Host = "relay-hosting.secureserver.net"; // SMTP server host.
    
////////////////////////////////////////////
// GoDaddy Specific settings
/////////////////////////////////////////////////
    
        //$mail->DKIM_domain = 'mossycity.com';
        $mail->Host = 'localhost';
        //$mail->Host = "relay-hosting.secureserver.net";
        //$mail->Host        = "smtpout.secureserver.net";
        //Set the SMTP port number - likely to be 25, 465 or 587
        //$mail->Port        = 80;
        //$mail->Port        = 465;
        //Whether to use SMTP authentication
        $mail->SMTPAuth    = true;
        //Username to use for SMTP authentication
        $mail->Username    = "mikeclark@vintagebikes.mossycity.com";
        //Password to use for SMTP authentication
        $mail->Password    = "maddie123";
        //$mail->SMTPSecure  = 'ssl';
        //$mail->SMTPSecure = 'tls'; 
        //$mail->Port = 587;
        //$mail->SMTPSecure  = 'tls';
/////////////////////////////////////////////
     
        $mail->AddAddress('mikeclark@mossycity.com', 'Me');
        $mail->AddReplyTo($_POST['InputEmail'], $_POST['InputName']);
        $mail->SetFrom($_POST['InputEmail'], $_POST['InputName']);
        $mail->Subject = 'Request For Web Development';
        $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';
        $mail->MsgHTML($_POST['InputMessage']);
        
        if($isMailerActive)
        {
            $mail->Send();
        }
        else
        {
            try
            {
                $myfile = fopen("lastEmail.txt", "w");
                $results = serialize($mail);
                fwrite($myfile, $results);
                fclose($myfile);
                
                MailErr::Append("Email is not Enabled");
            
            } catch (Exception $e) {
                 MailErr::Append($e->errorMessage());
                //die($e->getMessage()); 
            }
            
        }
    } catch (phpmailerException $e) {
       MailErr::Append($e->errorMessage());
       // die($e->errorMessage()); 
    } catch (Exception $e) {
       // die($e->getMessage()); 
       MailErr::Append($e->errorMessage());
    }
    
    MailErr::Success();

    