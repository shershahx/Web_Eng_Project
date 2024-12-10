<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Signed In</title>
    <style>
        /* General Body Styles */
        body {
            margin: 0;
            background-color: #1a1a1a; /* Dark Background */
            font-family: Arial, sans-serif;
            color: white;
        }

        /* Header Styling */
        #td1 {
            background-color: #333; /* Dark Header */
            color: #e6b800; /* Gold Color */
            padding: 15px;
            font-size: 40px;
            text-align: center;
            font-weight: bold;
        }

        /* Sidebar Navigation */
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 250px;
            font-size: 22px;
            background-color: #333; /* Dark Sidebar */
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        li {
            color: white;
        }

        li a {
            display: block;
            color: white;
            padding: 12px 20px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        li a:hover {
            background-color: #e6b800; /* Gold Hover */
            color: black;
        }

        /* Content Area */
        .content {
            margin-left: 250px;
            padding: 40px;
        }

        .basic_box {
            background-color: #2c2c2c; /* Dark background for content */
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            width: 60%;
            margin: auto;
        }

        .basic_box td {
            padding: 12px;
            font-size: 20px;
            text-align: left;
        }

        .basic_box th {
            text-align: center;
            font-size: 24px;
            color: #e6b800; /* Gold Color for Header */
            padding: 20px;
        }

        /* Footer Styling */
        footer {
            background-color: #333;
            color: #e6b800; /* Gold footer */
            text-align: center;
            padding: 10px 0;
            width: 100%;
            bottom: 0;
        }

        /* Button Styling */
        .button {
            background-color: #e6b800;
            color: black;
            border: none;
            padding: 12px 30px;
            font-size: 20px;
            cursor: pointer;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #c6a200; /* Darker Gold Hover */
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .content {
                margin-left: 0;
            }

            ul {
                width: 100%;
                position: relative;
                height: auto;
            }

            li a {
                padding: 15px;
            }

            .basic_box {
                width: 80%;
            }
        }
    </style>
</head>
<body>
<?php
$conn = new mysqli("localhost","root","", "iwp");
if($conn->connect_error)
{
    die("Connection failed: ".$conn->connect_error);
}
$sql = "SELECT * from temp_session";
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_row($result); ?>

<table style="width: 100%;">
    <tr>
        <td id="td1">THE <span style="color: #e6b800;">DELUXE</span> HOTEL</td>
    </tr>
</table>
<ul>
    <li><a href="user_view.php">My Info</a></li>
    <li><a href="bookroom.php">Book A Room</a></li>
    <li><a href="user_room_status.php">Show Booking Status</a></li>
    <li><a href="user_payment.php">Payment</a></li>

    <li><a href="index.html">Logout</a></li>
</ul>
<div class="content">
    <div class="basic_box">
        <table style="width: 100%;">
            <tr>
                <th colspan="2">Welcome, <?php echo $row[2]; ?></th>
            </tr>
            <tr>
                <td><b>Name:</b></td>
                <td><?php echo $row[2]; ?></td>
            </tr>
            <tr>
                <td><b>Phone Number:</b></td>
                <td><?php echo $row[0]; ?></td>
            </tr>
            <tr>
                <td><b>Email Address:</b></td>
                <td><?php echo $row[3]; ?></td>
            </tr>
            <tr>
                <td><b>Date of Birth:</b></td>
                <td><?php echo $row[5]; ?></td>
            </tr>
            <tr>
                <td><b>ID Proof:</b></td>
                <td><?php echo $row[4]; ?></td>
            </tr>
        </table>
        <br>
        <a href="user_view.php" class="button">Go to Dashboard</a>
    </div>
</div>
<footer>
    <p>&copy; 2024 The Deluxe Hotel</p>
</footer>

</body>
</html>
