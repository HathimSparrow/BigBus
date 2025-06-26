<?php
include 'db.php'; // Include the database connection

// Get search inputs from the form
$from = $_POST['from'];
$to = $_POST['to'];
$date = $_POST['date'];

// Ensure inputs are not empty
if (empty($from) || empty($to) || empty($date)) {
    die("Please provide all search inputs.");
}

// Query to fetch buses matching the criteria from the new Buses table
$sql = "SELECT BusName, DepartureTime, ArrivalTime, TravelDate, Fare
        FROM Buses
        WHERE FromLocation = ? AND ToLocation = ? AND TravelDate = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $from, $to, $date);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Booking - Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        header {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }
        .results-container {
            margin: 20px auto;
            max-width: 600px;
            padding: 20px;
            background-color: white;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .bus-card {
            margin-bottom: 15px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
        }
        .bus-card h3 {
            margin: 0 0 10px;
        }
        .bus-card p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Bus Search Results</h1>
    </header>
    <div class="results-container">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='bus-card'>";
                echo "<h3>" . $row['BusName'] . "</h3>";
                echo "<p><strong>Departure Time:</strong> " . $row['DepartureTime'] . "</p>";
                echo "<p><strong>Arrival Time:</strong> " . $row['ArrivalTime'] . "</p>";
                echo "<p><strong>Travel Date:</strong> " . $row['TravelDate'] . "</p>";
                echo "<p><strong>Fare:</strong> LKR " . $row['Fare'] . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>No buses available for the selected route and date.</p>";
        }
        ?>
    </div>
</body>
</html>
<?php
$conn->close();
?>
