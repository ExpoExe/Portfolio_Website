<?php

if(isset($_POST['email'])) {
    // EDIT THE 2 LINES BELOW AS REQUIRED

    $email_to = "jtruelove@guardianadjustment.com";
    $email_subject = "Guardian Adjustment Group Online Claim Submitted";

    /*Variables from Form*/
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $email = $_POST['email'];
    $emailc = $_POST['emailc'];
    $home_phone = $_POST['home_phone'];
    $work_phone = $_POST['work_phone'];
    $cell_phone = $_POST['cell_phone'];
    $alt_phone = $_POST['alt_phone'];
    $loss_date = $_POST['loss_date'];
    $loss_desc = $_POST['loss_desc'];

    function died($error)
    {

        // your error code can go here

        echo "We are very sorry, but there were error(s) found with the form you submitted. ";

        echo "These errors appear below.<br /><br />";

        echo $error . "<br /><br />";

        echo "Please go back and fix these errors.<br /><br />";

        die();

    }

    $error_message = "";

    if (!$email == $emailc) {
        $error_message .= 'The Email Addresses entered do not match.<br />';
    }

    if (strlen($error_message) > 0) {

        died($error_message);

    }

    function clean_string($string)
    {

        $bad = array("content-type", "bcc:", "to:", "cc:", "href");

        return str_replace($bad, "", $string);

    }

    $email_message =
        "First Name: " . ($fname) . "\n" .
        "Last Name: " . ($lname) . "\n" .
        "Street Address: " . ($street) . "\n" .
        "City: " . ($city) . "\n" .
        "Zip Code: " . ($zip) . "\n" .
        "Email Address: " . ($email) . "\n" .
        "Home Phone: " . ($home_phone) . "\n" .
        "Work Phone: " . ($work_phone) . "\n" .
        "Cell Phone: " . ($cell_phone) . "\n" .
        "Alternate Phone: " . ($alt_phone) . "\n" .
        "Loss Date: " . ($loss_date) . "\n" .
        "Loss Description: " . ($loss_desc) . "\n";

// create email headers

    $headers = 'From: ' . $email . "\r\n";

    @mail($email_to, $email_subject, $email_message, $headers);
}
else
echo "Your message was not successfully sent, please try again <br>";
?>

<p>Thank you for submitting you claim. We will be in touch with you within 48 hours. <a href="index.html">Return to Homepage</a></p>
