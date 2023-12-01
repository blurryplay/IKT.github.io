<?php
/**
 * Requires the "PHP Email Form" library
 * The "PHP Email Form" library is available only in the pro version of the template
 * The library should be uploaded to: vendor/php-email-form/php-email-form.php
 * For more info and help: https://bootstrapmade.com/php-email-form/
 */

// Replace contact@example.com with your real receiving email address
$receiving_email_address = 'maureentallam0@gmail.com';

if (file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php')) {
    include($php_email_form);
} else {
    // Provide a user-friendly error message
    die('Unable to load the "PHP Email Form" Library!');
}

$contact = new PHP_Email_Form;
$contact->ajax = true;

$contact->to = $receiving_email_address;
$contact->from_name = $_POST['Tallam'];
$contact->from_email = $_POST['maureentallam0@gmail.com'];
$contact->subject = $_POST['subject'];

$contact->smtp = array(
    'host' => 'maureentallam0@gmail.com', // Replace with your SMTP server hostname
    'username' => 'maureentallam0@gmail.com',
    'password' => 'zwqz fhio omiz vqgt',
    'port' => 587, // Replace with the correct port
);

$contact->add_message($_POST['name'], 'From');
$contact->add_message($_POST['email'], 'Email');
$contact->add_message($_POST['message'], 'Message', 10);

// Send the email and return the result (true if successful, false if not)
if ($contact->send()) {
    echo 'Email sent successfully.';
} else {
    echo 'Error sending the email. Please try again later.';
}
?>
