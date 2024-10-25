<?php
// Load existing XML
$xmlFile = 'bookings.xml';
$xml = simplexml_load_file($xmlFile);

// Create new booking entry
$newBooking = $xml->addChild('booking');
$newBooking->addChild('name', $_POST['name']);
$newBooking->addChild('phone', $_POST['phone']);
$newBooking->addChild('barber', $_POST['barber']);
$newBooking->addChild('appointment-date', $_POST['appointment-date']);
$newBooking->addChild('appointment-time', $_POST['appointment-time']);

// Save updated XML
$xml->asXML($xmlFile);

// Redirect to a success page or show a success message
header('Location: success.html');
exit();
?>









