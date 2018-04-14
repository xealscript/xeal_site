<?php
Class Emailservice
{

public function contact_us($email,$name,$msg)
{

              require('class.phpmailer.php');
         $to             =  "xealnitin@gmail.com";
         $from           =  'xealnitin@gmail.com';//"info@darkhorsesports.in";
         $from_name      =  $name;
         $subject        =  $name." has sent you a message";//$user_info->name." has sent a message";
         set_time_limit(3600);
         $mail = new PHPMailer();  // create a new object
         $mail->IsSMTP(); // enable SMTP
         $mail->SMTPDebug = 1;  // debugging: 1 = errors and messages, 2 = messages 
         $mail->Host       = "smtp.gmail.com";      
		 $mail->Port       = 465;                   
		 $mail->SMTPSecure = 'ssl';

         $mail->SMTPAuth = true;
 
         $mail->SMTPDebug = 1;

         $mail->Username =$from;  
         $mail->Password ='9956391198';
         $mail->Timeout = 3600; 
         $mail->SetFrom($from, $from_name);
         $mail->Subject = $subject;
         
              $mail->Body = '<!DOCTYPE html>
                        <html>
                        <body>
                        <p><b>Name:</b>'.$name.'.</p>
                        <p><b>Email:</b>'.$email.'</p>
                        <p><b>Message:</b>'.$msg.'</p>'; 
               $txt='This email was sent in HTML format. Please make sure your preferences allow you to view HTML emails.'; 
               $mail->AltBody = $txt; 
               $mail->AddAddress($to);
               if (!$mail->send()) {
               	
                   return 0;
                } 
                else {
                $obj = $this->acknowledge_mail($email,$name);
                return $obj;
                }
         




}
public function acknowledge_mail($email,$name)
{


             // require('class.phpmailer.php');
         $to             =  $email;
         $from           =  'xealnitin@gmail.com';//"info@darkhorsesports.in";
         $from_name      =  'Xealscript';
         $subject        =  "Thanks for contacting us";//$user_info->name." has sent a message";
         set_time_limit(3600);
         $mail = new PHPMailer();  // create a new object
         $mail->IsSMTP(); // enable SMTP
         $mail->SMTPDebug = 1;  // debugging: 1 = errors and messages, 2 = messages 
         $mail->Host       = "smtp.gmail.com";      
		 $mail->Port       = 465;                   
		 $mail->SMTPSecure = 'ssl';

         $mail->SMTPAuth = true;
 
         $mail->SMTPDebug = 1;

         $mail->Username =$from;  
         $mail->Password ='9956391198';
         $mail->Timeout = 3600; 
         $mail->SetFrom($from, $from_name);
         $mail->Subject = $subject;
         
              $mail->Body = '<h3>Hi '.$name.' </h3><br><p>We have recieved your message , our team will contact you soon</p><br><br><h4>Thanks</h4><br><p>Team Xealscript</p>'; 
               $txt='This email was sent in HTML format. Please make sure your preferences allow you to view HTML emails.'; 
               $mail->AltBody = $txt; 
               $mail->AddAddress($to);
               if (!$mail->send()) {
                   return 0;
                } 
                else {
                   return 1;
                }
         





}
}

?>