<?php
require 'resetMailer/PHPMailer.php';
require 'resetMailer/SMTP.php';
require 'resetMailer/Exception.php';

//define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit'])){

  $to = $_POST['email'];
  $subject = 'This is a subject';
  $message = '<p> Hello your email is </p>';
  $message .='<p> '.$to.' please ignore this message</p> ';
 


  // create instance of phpmailer
  $mail = new PHPMailer();
  //set mailer to use smtp
  $mail->isSMTP();
  //define smtp host
  $mail->Host = "smtp.gmail.com";
  //enable smtp authentication
  $mail->SMTPAuth = "true";
  // set type of encryption(ssl/tls)
  $mail->SMTPSecure="tls";
  //set port to connect smtp
  $mail->Port="587";
  // set my gmail username
  $mail->Username = "rjaypitogo@gmail.com";
  //set gmail password
  $mail->Password = "dbvlatyphqxvbilo";
  //set email subject
  $mail->Subject="$subject";
  //set sender email
  $mail->setFrom("no-replayhms@gmail.org");
  //email body
  $mail->Body = "$message" ;
  $mail->IsHTML(true);
  // add the email of reciever
  $mail->addAddress("$to");
  $mail->Send();

  echo header('location:index.php');
}else{
  echo "opss something wrong!";
}