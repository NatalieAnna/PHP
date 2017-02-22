<!DOCTYPE HTML>
<html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHP</title>
    
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<body>

<div id="container">
     <div class="row">
            <div class="col-lg-12">
                <h2>Thanks for enquiring!</h2>	
                <center><p>We'll get back to you within 24hrs.</p></center>
            </div>
        </div>
</div>
    
<?php 

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];


$formcontent="From: $email \n $name \n $surname \n $mobile \n Message: $message";

$recipient = "name@yourcompany.com";
$subject = "Enquiry";
$mailheader = "From: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

?>
    
</body>
</html>

