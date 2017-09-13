<?php
if(isset($_POST))
{
    $visitor_email = $_POST['email'];

    $email_from = 'grow@monolith.co';

    $email_subject = "New Website Demo Request";

    $email_body = "You have received demo request from $visitor_email.\n\n".

    $to = "grow@monolith.co";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if(!isset($visitor_email)) {
        echo '<script type="text/javascript"> alert ("Email address is required"); window.history.back();</script>';
    }
    else if (!preg_match($email_exp,$visitor_email)) {
        echo '<script type="text/javascript"> alert ("The email address you entered does not appear to be valid. Please try again."); window.history.back(); </script>';
    }
    else {
        mail($to,$email_subject,$email_body,$headers);

        echo '<script type="text/javascript"> alert ("Thank you for your interest. We have received your email and will get back to you as soon as possible."); window.history.back(); </script>';
    }
}
?>
