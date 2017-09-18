<?php
$to = 'sanpwintthu9@gmail.com';
$subject = "Close Beta Invitation";

$htmlContent = file_get_contents("betaemail.html");

// Set content-type header for sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
//$headers .= 'From: Info<info@imliveapp.com>' . "\r\n";
// $headers .= 'Cc: welcome@example.com' . "\r\n";
// $headers .= 'Bcc: welcome2@example.com' . "\r\n";

// Send email
if(mail($to,$subject,$htmlContent,$headers)):
    $successMsg = 'Email has sent successfully.';
else:
    $errorMsg = 'Email sending fail.';
endif;
?>