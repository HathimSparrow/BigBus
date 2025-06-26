<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Data Entry</title>
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
        .form-container {
            margin: 20px auto;
            max-width: 600px;
            padding: 20px;
            background-color: white;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input, select, button {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        button {
            background-color: #333;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background-color: #555;
        }
    </style
</head>
<body>

    <header>
        <h1>Enter Bus Details</h1>
    </header>

    <div class="form-container">
        <form action="insert_bus.php" method="post">
            <label for="bus_name">Bus Name:</label>
            <input type="text" name="bus_name" id="bus_name" required>

            <label for="from_location">From Location:</label>
            <select name="from_location" id="from_location" required>
                <option value="">Select Starting Location</option>
                <option value="Colombo">Colombo</option>
                <option value="Kandy">Kandy</option>
                <option value="Galle">Galle</option>
            </select>

            <label for="to_location">To Location:</label>
            <select name="to_location" id="to_location" required>
                <option value="">Select Destination</option>
                <option value="Colombo">Colombo</option>
                <option value="Kandy">Kandy</option>
                <option value="Galle">Galle</option>
            </select>

            <label for="departure_time">Departure Time:</label>
            <input type="time" name="departure_time" id="departure_time" required>

            <label for="arrival_time">Arrival Time:</label>
            <input type="time" name="arrival_time" id="arrival_time" required>

            <label for="travel_date">Travel Date:</label>
            <input type="date" name="travel_date" id="travel_date" required>

            <label for="fare">Fare (LKR):</label>
            <input type="number" name="fare" id="fare" required step="0.01">

            <button type="submit">Add Bus</button>
        </form>
    </div>

</body>
</html>
