<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Room History</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #313131;
            color: white;
            font-family:"Bahnschrift SemiBold";
        }
        .header {
            background-color: rgba(9, 41, 98, 0.9);
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 36px;
            font-weight: bold;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .header span {
            color: #FFD700;
        }
        .sidebar {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 20%;
            background-color: rgba(9, 41, 98, 0.9);
            position: fixed;
            height: 100%;
            overflow: auto;
        }
        .sidebar li {
            color: white;
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
        .message-box {
            background-color: #2a2a2a;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        .message-box p {
            font-size: 20px;
            margin-bottom: 15px;
        }
        .btn-golden {
            background-color: #FFD700;
            color: #313131;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            text-decoration: none;
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
<ul class="sidebar">
    <li><a href="admin_view.php" class="active">Rooms Info</a></li>
    <li><a href="add_room_admin.php">Add Room</a></li>
    <li><a href="remove_room_admin.php">Remove Rooms</a></li>
    <li><a href="admin_room_status.php">Booking Requests</a></li>
    <li><a href="confirmed_bookings.php">Confirmed Bookings</a></li>
    <li><a href="booking_history.php">Booking History</a></li>
    <li><a href="index.php">Logout</a></li>
</ul>
<div class="main-content">
    <div class="message-box">
        <?php

        $conn = new mysqli("localhost", "root", "", "iwp");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $bid = $_POST["book_id"];

        $stmt = $conn->prepare("SELECT * FROM booked_hist WHERE book_id = ?");
        $stmt->bind_param("s", $bid);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = mysqli_fetch_row($result);
        ?>

        <table class="table table-bordered">
            <tr>
                <th colspan="2">Booking History</th>
            </tr>
            <tr><td>Booking ID:</td><td><?php echo $row[14]; ?></td></tr>
            <tr><td>Name:</td><td><?php echo $row[1]; ?></td></tr>
            <tr><td>Room Type:</td><td><?php echo $row[3]; ?></td></tr>
            <tr><td>Check In Date:</td><td><?php echo $row[4]; ?></td></tr>
            <tr><td>Check Out Date:</td><td><?php echo $row[5]; ?></td></tr>
            <tr><td>Days of Stay:</td><td><?php echo $row[6]; ?></td></tr>
            <tr><td>Total Bill Amount:</td><td><?php echo $row[13]; ?></td></tr>
            <tr><td>AC:</td><td><?php echo ($row[7] == "true") ? "YES" : "NO"; ?></td></tr>
            <tr><td>Breakfast:</td><td><?php echo ($row[8] == "true") ? "YES" : "NO"; ?></td></tr>
            <tr><td>Lunch:</td><td><?php echo ($row[9] == "true") ? "YES" : "NO"; ?></td></tr>
            <tr><td>Snacks:</td><td><?php echo ($row[10] == "true") ? "YES" : "NO"; ?></td></tr>
            <tr><td>Dinner:</td><td><?php echo ($row[11] == "true") ? "YES" : "NO"; ?></td></tr>
            <tr><td>Swimming:</td><td><?php echo ($row[12] == "true") ? "YES" : "NO"; ?></td></tr>
            <tr><td colspan="2"><a href="booking_history.php" class="btn-golden">Back</a></td></tr>
        </table>
    </div>
</div>
</body>
</html>
