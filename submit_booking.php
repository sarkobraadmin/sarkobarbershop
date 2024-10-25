<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "barbershop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $barber = $_POST['barber'];
    $appointment_date = $_POST['appointment-date'];
    $appointment_time = $_POST['appointment-time'];

    // Prepare SQL statement
    $sql = "INSERT INTO bookings (name, phone, barber, appointment_date, appointment_time) 
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $name, $phone, $barber, $appointment_date, $appointment_time);

    // Execute query and provide feedback
    if ($stmt->execute()) {
        echo "Booking submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>







