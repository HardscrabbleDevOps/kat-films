<?php
	// My modifications to mailer script from:
	// Only process POST reqeusts.
	$bride = $_GET['bride'];
	$groom = $_GET['groom'];
	$date = $_GET['date'];
	$phone = $_GET['phone'];
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

				Name: $bride and $groom are getting married. They would likee to know if the date $date is available.
				You may contact them on email: $email or phone number $phone.

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
