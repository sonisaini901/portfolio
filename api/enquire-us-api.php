<?php

// header("Access-Control-Allow-Origin: *");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require_once 'vendor/autoload.php';

$data = json_decode( file_get_contents('php://input'),true );
// if($data){
    //PHPMailer Object
    $mail = new PHPMailer(true); //Argument true in constructor enables exceptions


    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';
    // $mail->IsSMTP(); // enable SMTP
    //$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    // $mail->SMTPAuth = true; // authentication enabled
    // $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    // $mail->Host = "smtp.hostinger.com";
    // $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    // $mail->Username = "info@simulacruminc.com";
    // $mail->Password = "Strangerthings1@kgf";


    $mail->From = "sonisaini901@gmail.com";
    $mail->FromName = "Soni Saini";


    $mail->addAddress("sonisaini901@gmail.com");

    //CC and BCC
    //$mail->addCC("cc@example.com");
    //$mail->addBCC("bcc@example.com");

    $mail->Subject = "New Query From Website";

    // $mail->Body = "<p>Name: ".$data['name']."</p><p>Email: ".$data['email']."</p><p>Mobile Number: ".$data['mobileNumber']."</p><p>Message: ".$data['message']."</p>";
    $mail->Body = "<p>Name: test</p>";

    try {
        $mail->send();
        echo "Mail send successfully.";
    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
// }

?>