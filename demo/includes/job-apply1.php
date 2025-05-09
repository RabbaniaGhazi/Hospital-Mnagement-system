<?php
header('Content-Type: application/json');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$secret = '6LenStUZAAAAAKS8QNLqiKwGKOniz_PYL_oacsIT';
$site_jey = '6LenStUZAAAAADFndFfBZsTzYmSJIwIrnpscPQ2f';
if(isset($_POST['g-recaptcha-response'])  && !empty($_POST['g-recaptcha-response']))
{
    $errors = array();
    $file_name = $_FILES['attachment']['name'];
    $file_size =$_FILES['attachment']['size'];
    $file_tmp =$_FILES['attachment']['tmp_name'];
    $file_type=$_FILES['attachment']['type'];
    $file_explode = explode('.',$file_name);
    $file_ext=strtolower(end($file_explode));
    $extensions= array("gif","jpg","png","jpeg","zip");

    if(in_array($file_ext,$extensions) === false){
        $errors[]="File type not valid, valid file types are jpg, png, gif and zip";
    }

    if($file_size > 2097152){
        $errors[]='File size must be exactly 2 MB';
    }

    if(empty($errors)){
        $filename = date('Ymd_gis-').$file_name;
        move_uploaded_file($file_tmp,"attachments/".$filename);
     }else{
        $response = [
            'status' => 'error',
            'errors' => $errors
        ];
        die(json_encode($response));

     }

    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);
    if($responseData->success)
    {
        $mail = new PHPMailer(false);

        $message_body = "
        <p> Hi, Admin ".$_POST['name']." wants to be connected with you. Below are the details.</p>
        <p>
            <b>Name</b><br>
            ".$_POST['name']."
        </p>
        <p>
            <b>Email</b><br>
            ".$_POST['email']."
        </p>
        <p>
            <b>Message</b><br>
            ".$_POST['message']."
        </p>
        ";

        try {
            //Server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'yourgmailId@gmail.com';// use here your gmail
            $mail->Password   = 'PassWord';//here will be your email one time password generate from google 
            //gto this link to create one time password https://myaccount.google.com/security
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;

            //Recipients
            $mail->setFrom($_POST['email'], $_POST['name']);//no need to change in this line please keep as it is
            $mail->addAddress('ReceivingGmail@gmail.com', 'Contact us'); //Receiving Mail Address no need to change in this line please keep as it is
            $mail->addAttachment("./attachments/$filename");
            $mail->addReplyTo('info@example.com', 'Information');

            // Content
            $mail->isHTML(true);
            $mail->Subject = $_POST['subject'];
            $mail->Body    = $message_body;
            $mail->AltBody = $message_body;
            
            if($mail->send()){
                echo json_encode([
                    'status' => 'success',
                    'message' => 'Email has been sent.'
                ]);
            }
            
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
} else {
    echo json_encode([
        'status' => 'expire',
        'message' => 'Verification expired, please check the checkbox again'
    ]);
}
?>