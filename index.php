<?php
    } 
else                /* send the submitted data */
    {
    $name=$_REQUEST['fname'];
    $company=$_REQUEST['company'];
    $email=$_REQUEST['mail'];
    $mobile=$_REQUEST['mobile'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message=="")||($number=="")||($company==""))
        {
        echo "All fields are required, please fill <a href=\"\">the form</a> again.";
        }
    else{        
        $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
        mail("dim_deme@mail.ru", $subject, $message, $from);
        echo "Email sent!";
        }
    }  
?>