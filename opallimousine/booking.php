<?php

// Define some constants
define( "RECIPIENT_NAME", "Usama Ejaz" );
define( "RECIPIENT_EMAIL", "usamaejaz314@gmail.com" );


// Read the form values
$success = false;
$firstName = isset( $_POST['firstName'] );
$lastName = isset( $_POST['lastName'] );
$email = isset( $_POST['email'] );
$phoneNumber = isset( $_POST['phoneNumber'] );
$departureDate = isset( $_POST['departureDate'] );
$vehicleType = isset( $_POST['vehicleType'] );
$luggageCount = isset( $_POST['luggageCount'] );
$passengersCount = isset( $_POST['passengersCount'] );
$pickUpLocation = isset( $_POST['pickUpLocation'] );
$dropOffLocation = isset( $_POST['dropOffLocation'] );
$orderNote = isset( $_POST['orderNote'] );

// If all values exist, send the email
if ( $firstName && $lastEmail && $email && $phoneNumber) {
  $recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
  $headers = "From: " . $firstName . " " . $lastName . " <" . $email . ">";
  $msgBody = "Phone Number: " . $phoneNumber . " Order Note: " . $orderNote;
  $success = mail( $recipient, $headers, $msgBody );

  //Set Location After Successsfull Submission
  header('Location: contact.html');
}

else{
	//Set Location After Unsuccesssfull Submission
  	header('Location: index.html');	
}

?>