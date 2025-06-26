<?php
include 'db.php'; // Include the database connection

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from form
    $busName = $_POST['bus_name'];
    $fromLocation = $_POST['from_location'];
    $toLocation = $_POST['to_location'];
    $departureTime = $_POST['departure_time'];
    $arrivalTime = $_POST['arrival_time'];
    $travelDate = $_POST['travel_date'];
    $fare = $_POST['fare'];

    // Ensure inputs are not empty
    if (empty($busName) || empty($fromLocation) || empty($toLocation) || empty($departureTime) || empty($arrivalTime) || empty($travelDate) || empty($fare)) {
        die("Please provide all required details.");
    }

    // Insert data into the Buses table
    $sql = "INSERT INTO Buses (BusName, FromLocation, ToLocation, DepartureTime, ArrivalTime, TravelDate, Fare)
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    // Prepare and bind the statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $busName, $fromLocation, $toLocation, $departureTime, $arrivalTime, $travelDate, $fare);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Bus details added successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>
