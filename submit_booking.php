<?php
header("Content-Type: text/xml; charset=UTF-8");

// Load the existing XML file or create a new one
$xml_file = 'bookings.xml';

if (file_exists($xml_file)) {
    $xml = simplexml_load_file($xml_file);
} else {
    $xml = new SimpleXMLElement('<?xml version="1.0"?><bookings></bookings>');
}

// Create a new booking entry
$new_booking = $xml->addChild('booking');
$new_booking->addChild('name', htmlspecialchars($_POST['name']));
$new_booking->addChild('phone', htmlspecialchars($_POST['phone']));
$new_booking->addChild('barber', htmlspecialchars($_POST['barber']));
$new_booking->addChild('appointment-date', htmlspecialchars($_POST['appointment-date']));
$new_booking->addChild('appointment-time', htmlspecialchars($_POST['appointment-time']));

// Save the XML file
$xml->asXML($xml_file);

// Redirect or display a success message
echo '<p>Booking successful! Thank you for your appointment.</p>';
?>








