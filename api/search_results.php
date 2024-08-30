<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Schedule</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }

        body {
            background-color: #d8bfd8; 
        }
    </style>
</head>
<body>

<?php
include "database.php";

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Check if form data is submitted using POST method
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Check if the keys exist in the $_POST array
    $destination = isset($_POST['destination']) ? '%' . $_POST['destination'] . '%' : '';
    $boardOnPlace = isset($_POST['check_in']) ? '%' . $_POST['check_in'] . '%' : '';
    $date = isset($_POST['check_out']) ? $_POST['check_out'] : '';
    $children = isset($_POST['children']) ? $_POST['children'] : '';
    $adults = isset($_POST['adults']) ? $_POST['adults'] : '';
// echo ((int)$adults);
// echo ((int) $children);
    // Prepare the SQL query
    $sql = "SELECT bus_name, schedule, ticket_cost, destination, board_on_place FROM bus_routes
            WHERE destination LIKE ? AND board_on_place LIKE ? AND date = ?";
    $stmt = $mysqli->prepare($sql);

    // Bind parameters
    $stmt->bind_param("sss", $destination, $boardOnPlace, $date);

    // Execute the query
    if ($stmt->execute()) {
        // Get the result set
        $result = $stmt->get_result();

        // Display results in a table
        echo "<h2 style='text-align: center; margin-top: 50px; margin-bottom: 50px;'>Search Results:</h2>";
        echo "<table border='1' style='width: 50%; margin: 10px auto; min-height: 300px; border-collapse: collapse; background-color: #f0f0f0; text-align: center;'>";
        echo "<tr><th style='border: 1px solid black; background-color: #ba55d3;'>Bus Name</th><th style='border: 1px solid black; background-color: #ba55d3;'>Schedule</th><th style='border: 1px solid black; background-color: #ba55d3;'>Ticket Cost</th><th style='border: 1px solid black; background-color: #ba55d3;'>Book Tickets</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr style='background-color: #dda0dd;'>";
            echo "<td style='border: 1px solid black;'>" . $row['bus_name'] . "</td>";
            echo "<td style='border: 1px solid black;'>" . $row['schedule'] . "</td>";
            echo "<td style='border: 1px solid black;'>" . $row['ticket_cost'] . "</td>";
            echo "<td style='border: 1px solid black;'><a href='./ticket.php?destination={$row['destination']}&board_on_place={$row['board_on_place']}&bus_name={$row['bus_name']}&schedule={$row['schedule']}&date={$date}&adults={$adults}&children={$children}'><button style='padding: 5px; text-align: center;'>Book Now</button></a></td>";

            echo "</tr>";
        }

        echo "</table>";

        // Close the result set
        $result->close();
    } else {
        // Handle query execution error
        die("Error executing the query: " . $stmt->error);
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$mysqli->close();
?>

</body>
</html>
