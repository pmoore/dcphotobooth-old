<?php
    $name = $_POST['name'];
    $from = $_POST['from'];
    $to = "info@dmvphotobooths.com";
//    $to = "pmmoor1@gmail.com";
    $subject = $_POST["subject"];
    $location = $_POST["location"];
    $date = $_POST["date"];
    $message = $_POST["message"];
    $referrer = $_POST['referrer'];
    $message_footer = "This message was auto generated from www.dc-photobooth.com.";
    $headers = 'From: info@dmvphotobooths.com';
    
    $full_message = "";
    if($_POST["name"]!=""){
        $full_message .= "Name: ".$name."\n";
    }
    if($_POST["from"]!=""){
        $full_message .= "Email: ".$from."\n";
    }
    if($_POST["location"]!=""){
        $full_message .= "Event Location: ".$location."\n";
    }
    if($_POST["date"]!=""){
        $full_message .= "Event date: ".$date."\n";
    }
    if($_POST["referrer"]!=""){
        $full_message .= "Referrer: ".$referrer."\n";
    }
    $full_message .= "Message: ".$message."\n\n\n";
    $full_message .= $message_footer;
    
    if(mail($to, $subject,$full_message, $headers)){
        echo "Message was successfully sent!";
    }
    else{
        echo "there’s some errors to send the mail, verify your server options. 
        From: ".$from.", 
        To: ".$to.", 
        Subject: ".$subject.", 
        Message: ".$message;
    }
    
?>