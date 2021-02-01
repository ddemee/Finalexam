<?php
 

 $name = $_POST ['name'];
 $company = $_POST['company'];
 $number = $_POST['number'];
 $mail = $_POST['mail'];
 $message = $_POST['message'];

 $email_from = 'dim_deme@mail.ru';
 $email_subject = "ახალი შეკვეთა ";

 $email_body = "user Name: $name. \n".
                "User Email :$mail.\n".
                "user Company : $company.\n".
                "User Number : $number.\n".
                "User Message : $message.\n";

$to = "wyeula@gmail.com"
$headers = "From: $email_from \r\n";

$headers .= "Reply-To : $mail \r\n";
mail($to,$email_body,$headers);

header("Location: Index.html")

?>