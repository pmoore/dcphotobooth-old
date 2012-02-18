<?php
    $from = $_POST['from'];
    $to = "pmoore@weddingwire.com";
    $subject = $_POST["subject"];
    $website = $_POST["website"];
    $date = $_POST["event_date"];
    $message = $_POST["message"];
    $headers = 'From: '.$from;

    if(mail($to, $subject,$message, $headers)){
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