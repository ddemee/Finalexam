<?php
 if (isset($_POST['submit'])){
     $name = $_POST ['name'];
     $company = $_POST ['company'];
     $mail = $_POST ['mail'];
     $number = $_POST ['number'];
     $message = $_POST ['message'];
     

     $mailto ="dim_deme@mail.ru";
     $headers = "From:".$mail;
     $txt = "You Have Received an e-mail from".$name".n\n\".$company.".n\n\".$number.".n\n\".$message.\n" ;
     mail ($mailto,$name,$txt,$headers);
     header ("location: index.html?mailsend")
 }
?>