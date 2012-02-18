<?php
    $from = $_POST['from'];
    $to = "pmoore@weddingwire.com";
    $subject = $_POST["subject"];
    $website = $_POST["website"];
    $date = $_POST["date"];
    $message = $_POST["message"];
    $message_footer = "This message was auto generated from www.dc-photobooth.com.  Don't be an asshole and respond to it ASAP.";
    $headers = 'From: '.$from;
    
    $full_message = "";
    if($_POST["website"]!=""){
        $full_message .= "Lead website: ".$website."\n";
    }
    if($_POST["date"]!=""){
        $full_message .= "Event date: ".$date."\n";
    }
    $full_message .= "Message: ".$message."\n\n\n";
    $full_message .= $message_footer;
    
    if(mail($to, $subject,$full_message, $headers)){
        echo "mail successful send";
    }
    else{
        echo "there’s some errors to send the mail, verify your server options. 
        From: ".$from.", 
        To: ".$to.", 
        Subject: ".$subject.", 
        Message: ".$message;
    }
    
?>

Email from <?php echo $from ?>