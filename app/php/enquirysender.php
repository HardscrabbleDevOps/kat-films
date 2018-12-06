<?php
	// My modifications to mailer script from:
	// Only process POST reqeusts.
	$name = $_GET['name'];
	$email = $_GET['email'];
	$messagebody = $_GET['messagebody'];

	// Set the from email address.
	$from = "<webmaster@katfilms.co.zw>";

	$subject = "Email Enquiry";

	// Set the recipient email address.
    // FIXME: Update this to your desired email address.
	$to = "info@katfilms.co.zw";

	// Build the email content.
	$message = "
				Hi,

				A visitor has been sent a query from katfilms.co.zw.

				Name: $name has sent a message to you from your website.
				$messagebody.
				$name may be contacted on the following email address: $email.

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
