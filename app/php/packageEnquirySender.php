<?php
	// My modifications to mailer script from:
	// Only process POST reqeusts.
	$name = $_GET['name'];
	$package = $_GET['package'];
	$email = $_GET['email'];
	$messagebody = $_GET['messagebody'];

	// Set the from email address.
	$from = "<webmaster@kaysimmzpix.co.zw>";

	$subject = "Email Enquiry";

	// Set the recipient email address.
    // FIXME: Update this to your desired email address.
	$to = "info@kaysimmzpix.co.zw";

	// Build the email content.
	$message = "
				Hi,

				A visitor has been sent a query from kaySIMMZpix.co.zw.

				$name would like to know about the $package package.
				You may contact them on email: $email.

				$messagebody.

				Yours Sincerely, Your website.
				";


	// send the email
	if(mail ($to, $subject, $message))
	{
		echo "Success";
	}else{
		echo "No";
	}
?>
