<?php
    $name = $_POST['name'];
    $from = $_POST['from'];
    $to = "info@dmvphotobooths.com";
    $subject = $_POST["subject"];
    $website = $_POST["website"];
    $date = $_POST["date"];
    $message = $_POST["message"];
    $message_footer = "This message was auto generated from www.dc-photobooth.com.";
    $headers = 'From: '.$from;
    
    $full_message = "";
    if($_POST["name"]!=""){
        $full_message .= "Name: ".$name."\n";
    }
    if($_POST["website"]!=""){
        $full_message .= "Lead website: ".$website."\n";
    }
    if($_POST["date"]!=""){
        $full_message .= "Event date: ".$date."\n";
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