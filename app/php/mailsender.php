<?php
	// My modifications to mailer script from:
	// Only process POST reqeusts.
	$bride = $_POST['contact_bride'];
	$groom = $_POST['contact_groom'];
	$messagebody = $_POST['message'];

	// Set the from email address.
	$from = "<webmaster@kaysimmzpix.co.zw>";

	// Set the recipient email address.
    // FIXME: Update this to your desired email address.
	$to = "tjmakunde@gmail.co.zw";

	// Build the email content.
	$message = "
				Hi,

				A visitor has been sent a query from kaySIMMZpix.co.zw.

				Name: $bride and $groom are getting married. $messagebody Joy.
				";


	// send the email
	if(mail ($to,$subject,$message))
	{
		echo "Success";
	}else{
		echo "No";
	}
?>
