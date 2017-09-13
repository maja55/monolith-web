<?php
{
    $visitor_email = $_POST['email'];

    $email_from = 'grow@monolith.co';

    $email_subject = "New Website Demo Request";

    $email_body = "You have received demo request from $visitor_email.\n\n".

    $to = "grow@monolith.co";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if((!isset($visitor_email)) || (!preg_match($email_exp,$visitor_email))) {
        echo "Please enter a valid email address.";
    } else {
        if (mail($to,$email_subject,$email_body,$headers)) {
            echo "Thank you for your interest. We have received your email and will get back to you as soon as possible.";
        } else {
            echo "Sorry, something went wrong. Please contact us directly at grow@monolith.co";
        }
    }
}

?>
