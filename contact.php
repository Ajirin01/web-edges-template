<?php
    if(isset($_POST['submit'])){
        $author = $_POST['author'];
        $email = $_POST['email'];

        if(!isset($_POST['subject'])){
            $subject = 'enquiry';
        }else{
            $subject = $_POST['subject'];
        }

        $comment = $_POST['comment'];

        $message = "reply to: ". $email . "<br>";
        $message .= "Name: ". $author . "<br>";
        $message .= $comment;

        // echo $message;
        // exit;

        mail("info@webedges.com.ng", $subject, $message);
        // echo json_encode($_POST);
        header('location: contact.html?msg=We have received your message and we shall get in as soon as possible!');
    }else{
        header('location: contact.html');
    }
?>