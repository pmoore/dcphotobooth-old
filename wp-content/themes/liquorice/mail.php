<?php
    $from = $_POST['from'];
    $to = "pmoore@weddingwire.com";
    $subject = $_POST["subject"];
    $website = $_POST["website"];
    $date = $_POST["date"];
    $message = $_POST["message"];
    $headers = 'From: '.$from;
    
    $full_message = "";
    if($_POST["website"]!=""){
        $full_message .= "Lead website: ".$website."\n";
    }
    if($_POST["date"]!=""){
        $full_message .= "Event date: ".$date."\n";
    }
    $full_message .= $message;
    
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