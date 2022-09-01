<?php
//first we leave this input field blank
$recipient = "";
//if user click the send button
if(isset($_POST['submit'])){
    //access user entered data
    $recipient = $_POST['email'];
    $subject = $_POST['name'];
    $message = $_POST['message'];
    $sender = "From: marymarie905@gmail.com";
    //if user leave empty field among one of them
    if(empty($recipient) || empty($subject) || empty($message)){
        echo "<script>alert('please fill all field');window.history.back(1);</script>";
    }else{
        // PHP function to send mail
        if(mail($recipient, $subject, $message, $sender)){
            echo "<script>alert('MESSAGE SEND SUCCESSFULLY');window.history.back(1);</script>";
            $recipient = "";
        }else{
            echo "<script>alert('FAILED SEND MESSAGE')window.history.back(1);</script>";
        }
    }
}
?> <!-- end of php code -->