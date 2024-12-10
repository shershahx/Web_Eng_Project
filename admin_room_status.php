<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Room Status</title>
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
            background-color: #2a2a2a;
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
            text-align: left;
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
    <li><a href="index.html">Logout</a></li>
</ul>
<div class="main-content">
    <div class="message-box">
        <h2>Admin Room Status</h2>
        <?php
        $conn = new mysqli("localhost", "root", "", "iwp");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql1 = "SELECT * from user_room_book";
        if ($result = mysqli_query($conn, $sql1)) {
            echo '<table>';
            echo '<tr><th>Booking ID</th><th>Name</th><th>Room Type</th><th>Check-in Date</th><th>Check-out Date</th><th>Price</th></tr>';
            while ($row = mysqli_fetch_row($result)) {
                if ($row[13] == 'Waiting') {
                    echo '<tr>';
                    echo '<td>' . $row[15] . '</td>';
                    echo '<td>' . $row[1] . '</td>';
                    echo '<td>' . $row[3] . '</td>';
                    echo '<td>' . $row[4] . '</td>';
                    echo '<td>' . $row[5] . '</td>';
                    echo '<td>' . $row[14] . '</td>';
                    echo '</tr>';
                }
            }
            echo '</table>';
            mysqli_free_result($result);
        }
        $conn->close();
        ?>
    </div>
    <form action="confirm_room.php" method="post">
        <div class="message-box">
            <p>Enter Booking ID to confirm or cancel the booking:</p>
            <input type="number" name="book_id" required>
            <div>
                <button type="submit" class="btn-golden">Confirm</button>
                <button type="submit" formaction="cancel_room.php" class="btn-golden">Cancel Booking</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>