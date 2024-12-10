<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Room Book</title>
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
        .message-box {
            margin-top: 50px;
            padding: 20px;
            background-color: #2a2a2a;
            color: #FFD700;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 10px 20px rgba(0,0,0,0.5);
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
    <li><a href="bookroom.php">Book A Room</a></li>
    <li><a href="user_room_status.php">Show Booking Status</a></li>
    <li><a href="user_payment.php">Payment</a></li>

    <li><a href="index.html">Logout</a></li>
</ul>
<div class="main-content">
    <div class="message-box">
        <p>Your Room Booking Request has been submitted successfully!</p>
        <p>Please wait for the Admin to confirm your request.</p>
        <p>Click below to return to the Home Page:</p>
        <a href="user_view.php" class="btn-golden">Next</a>
    </div>
</div>
</body>
</html>
