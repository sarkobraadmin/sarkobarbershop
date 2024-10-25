<?php
header("Content-Type: text/html; charset=UTF-8");

// Load the XML file
$xml_file = 'bookings.xml';

if (file_exists($xml_file)) {
    $xml = simplexml_load_file($xml_file);
} else {
    echo '<p>Keine Buchungen gefunden.</p>';
    exit;
}

?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buchungen Anzeigen</title>
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f0f0f0;
            color: #333;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f39c12;
            color: white;
        }
    </style>
</head>
<body>

<h1>Buchungen</h1>

<table>
    <tr>
        <th>Name</th>
        <th>Telefon</th>
        <th>Friseur</th>
        <th>Datum</th>
        <th>Uhrzeit</th>
    </tr>
    <?php
    foreach ($xml->booking as $booking) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($booking->name) . '</td>';
        echo '<td>' . htmlspecialchars($booking->phone) . '</td>';
        echo '<td>' . htmlspecialchars($booking->barber) . '</td>';
        echo '<td>' . htmlspecialchars($booking->{'appointment-date'}) . '</td>';
        echo '<td>' . htmlspecialchars($booking->{'appointment-time'}) . '</td>';
        echo '</tr>';
    }
    ?>
</table>

</body>
</html>
