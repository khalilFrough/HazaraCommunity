<?php
 
 if(isset($_POST['submit'])){

    $name= $_POST['name'];
    $phone= $_POST['phone'];
    $subject= "Mail From WebPage";
    $email=$_POST['email'];
    $message=$_POST['message'];

    $mailTo="hazarabrimbank@gmail.com";
    $headers= "From: ".$email;
    $text="You have recieved an email from: ".$name.".\n\n".$message;

    mail($mailTo,$subject,$text,$headers);
    header("Location:index.php?mailsend ");
 }
?>