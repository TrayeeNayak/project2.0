<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Details</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #d8bfd8;
        }
        .h1{
            text-align:center;
            margin-top:20px;
        }

        .card {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 8px;
            background-color: #dda0dd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        

    </style>
</head>
<body>
    

<?php
// Include your database connection file
include "database.php";

// Retrieve ticket details from the URL parameters
$destination = isset($_GET['destination']) ? $_GET['destination'] : '';
$boardOnPlace = isset($_GET['board_on_place']) ? $_GET['board_on_place'] : '';
$busName = isset($_GET['bus_name']) ? $_GET['bus_name'] : '';
$busTimings = isset($_GET['schedule']) ? $_GET['schedule'] : '';
$date = isset($_GET['date']) ? $_GET['date'] : '';
$adults = isset($_GET['adults']) ? $_GET['adults'] : '';
$children = isset($_GET['children']) ? $_GET['children'] : '';
$numberOfTickets = (int)$adults + (int)$children;

// Fetch additional details from the database including ticket cost
$sql = "SELECT ticket_cost, destination, board_on_place, bus_name, date, schedule FROM bus_routes WHERE destination = ? AND board_on_place = ? AND bus_name = ? AND date = ? AND schedule=?";
$stmt = $mysqli->prepare($sql);

// Bind parameters
$stmt->bind_param("sssss", $destination, $boardOnPlace, $busName, $date, $busTimings);

// Execute the query
if ($stmt->execute()) {
    $result = $stmt->get_result();

    // Check if any row is returned
    if ($row = $result->fetch_assoc()) {
        // Additional details from the database
        $ticketCostPerTicket = $row['ticket_cost'];
        $destination = $row['destination'];
        $boardOnPlace = $row['board_on_place'];
        $busName = $row['bus_name'];
        $date = $row['date'];
        $busTimings = $row['schedule'];

        // Calculate total ticket cost based on fetched ticket cost and user input for the number of tickets
        $totalTicketCost = (float)$ticketCostPerTicket * (int)$numberOfTickets;

        // Generate unique ticket ID
        $ticketId = time() . '-' . rand(1000, 9999);

        // Display fetched details in a card view
        echo "<div class='card'>
        <h1>Ticket is booked</h1>
                <h2>Ticket Details</h2>
                <p>Ticket ID: $ticketId</p>
                <p>Destination: $destination</p>
                <p>Board on Place: $boardOnPlace</p>
                <p>Bus Name: $busName</p>
                <p>Date: $date</p>
                <p>Bus Timings: $busTimings</p>
                <p>Ticket Cost: $ticketCostPerTicket</p>
                <p>Number of Buses: $numberOfTickets</p>
                <p>Total Ticket Cost: $totalTicketCost</p>
                <form action='../account.html' method='post'>
                <input type='submit' value='Ticket Booked' style='background-color: #d8bfd8; /* Green */
                                                                border: none;
                                                                color: black;
                                                                padding: 15px 32px;
                                                                text-align: center;
                                                                text-decoration: none;
                                                                display: inline-block;
                                                                font-size: 16px;
                                                                '>
            </form>
              </div>";

        // You can add more details or formatting as needed
    } else {
        echo "No matching record found in the database.";
    }

    // Close the result set
    $result->close();
} else {
    // Print error details
    die("Error executing the query: " . $stmt->error);
}

// Close the statement
$stmt->close();

// Close the database connection
$mysqli->close();
?>

</body>
</html>
