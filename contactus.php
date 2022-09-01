
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fayrouz Restaurant</title>
    <link rel = "icon" href="images/f1.png">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <link href=<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <!-- Optional theme -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="contact.css" >
    <script src="contact.js"></script>
</head>
<body >
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
?>
<?php //include  "header.php"; ?>
<a  href='index.php' class="btn btn-lg btn-default pull-left" style="color: #e2e6ea" >Back &rarr;</a>

<div class="container">
    <div class="row">
        <div class="col-md-6 " id="form_container">

            <h2>Contact Us</h2>
            <p> Please send your message below. We will get back to you at the earliest! </p>
                <form action="contactus.php" method="post">
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <label for="message"> Message:</label>
                        <textarea class="form-control" type="textarea" id="message" name="message" maxlength="6000" rows="7" required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label for="name"> Your Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="email"> Email:</label>
                        <input type="email" class="form-control" id="email" value="<?php echo $recipient ?>" name="email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <button  type="submit" name="submit" class="btn btn-lg btn-default pull-right" style="color: #e2e6ea" >Send &rarr;</button>
                    </div>
                </div>




            <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Posted your message successfully!</h3> </div>
            <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
            </form>
        </div>

    </div>
</div>
</body>
</html>