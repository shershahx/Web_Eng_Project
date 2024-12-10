<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Room Added</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #313131;
            color: #FFFFFF;
            font-family: 'Montserrat', sans-serif;
        }
        .header {
            background-color: black;
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
            background-color: black;
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
        <p>Admin Room Check-out date is updated successfully</p>
        <a href="admin_view.php" class="btn-golden">Click here to get redirected</a>
    </div>
</div>
</body>
</html>
