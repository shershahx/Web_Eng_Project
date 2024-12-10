<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Room Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #313131;
            color: #FFFFFF;
            font-family: 'Montserrat', sans-serif;
        }
        .header {
            background-color: #2a2a2a;
            color: white;
            padding: 20px;
            font-size: 36px;
            font-weight: bold;
            text-align: center;
        }
        .header span {
            color: #FFD700;
        }
        .welcome {
            font-size: 20px;
            text-align: right;
            padding: 10px;
            color: #FFD700;
        }
        .sidebar {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 20%;
            background-color: #2a2a2a;
            position: fixed;
            height: 100%;
            overflow: auto;
        }
        .sidebar li a {
            display: block;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
        }
        .sidebar li a.active {
            background-color: #FFD700;
            color: black;
        }
        .sidebar li a:hover:not(.active) {
            background-color: #FFD700;
            color: black;
        }
        .main-content {
            margin-left: 22%;
            padding: 20px;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #FFD700;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #2a2a2a;
            color: #FFD700;
        }
        .btn-golden {
            background-color: #FFD700;
            color: #313131;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            text-decoration: none;
            cursor: pointer;
        }
        .btn-golden:hover {
            background-color: #e6b800;
            color: white;
        }
    </style>
</head>
<body>
<div class="header">
    THE <span>DELUXE</span> HOTEL
</div>
<div class="welcome">
    <?php
    $conn = new mysqli("localhost", "root", "", "iwp");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM temp_session";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);
    echo "Hello, " . $row[2];
    ?>
</div>
<ul class="sidebar">
    <li><a href="user_view.php">My Info</a></li>
    <li><a href="bookroom.php" class="active">Book A Room</a></li>
    <li><a href="user_room_status.php">Show Booking Status</a></li>
    <li><a href="user_payment.php">Payment</a></li>

    <li><a href="index.html">Logout</a></li>
</ul>
<div class="main-content">
    <h2 class="text-center" style="color: #FFD700;">Room Details</h2>
    <table>
        <tr>
            <th>Room Type</th>
            <th>Number of Beds</th>
            <th>Price</th>
        </tr>
        <tr><td>Single Bedded</td><td>1</td><td>1000</td></tr>
        <tr><td>Double Bedded</td><td>2</td><td>1800</td></tr>
        <tr><td>Four Bedded</td><td>4</td><td>3000</td></tr>
    </table>
    <form class="mt-4" action="bookroom1.php" method="post">
        <h3 class="text-center" style="color: #FFD700;">Book Your Room</h3>
        <div class="mb-3">
            <label for="rooms" class="form-label">Select Room Type:</label>
            <select name="rooms" id="rooms" class="form-select" required>
                <option value="">Select</option>
                <option value="Single bed">Single bedded</option>
                <option value="Double bed">Double bedded</option>
                <option value="Four bed">Four bedded</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="checkin" class="form-label">Enter Check-in Date:</label>
            <input type="date" name="checkin" id="checkin" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="checkout" class="form-label">Enter Check-out Date:</label>
            <input type="date" name="checkout" id="checkout" class="form-control" required>
        </div>
        <table>
            <tr>
                <th>Features</th>
                <th>Service Cost per Day</th>
            </tr>
            <tr><td><input type="checkbox" name="ac" value="on"> AC</td><td>300</td></tr>
            <tr><td><input type="checkbox" name="breakfast" value="on"> Breakfast</td><td>150</td></tr>
            <tr><td><input type="checkbox" name="lunch" value="on"> Lunch</td><td>300</td></tr>
            <tr><td><input type="checkbox" name="snacks" value="on"> Evening Snacks</td><td>120</td></tr>
            <tr><td><input type="checkbox" name="dinner" value="on"> Dinner</td><td>250</td></tr>
            <tr><td><input type="checkbox" name="swimming" value="on"> Swimming Pool Access</td><td>300</td></tr>
        </table>
        <div class="text-center mt-3">
            <button type="submit" class="btn-golden">Submit</button>
        </div>
    </form>
</div>
</body>
</html>
