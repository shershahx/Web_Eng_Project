<!DOCTYPE html>
<html>
<head>
    <title>Confirm Room Book</title>
    <style>
        body {
            margin: 0;
            background: #f2f2f2;
            font-family: Verdana, sans-serif;
        }
        table {
            font-size: 22px;
        }
        p {
            font-size: 24px;
        }
        #td1 {
            background-color: #2C2C2C;
            color: #e6b800;
            padding: 10px;
            text-align: center;
        }
        td {
            text-align: left;
        }
        th {
            font-weight: bold;
            text-align: left;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 22%;
            font-size: 24px;
            background-color: #2C2C2C;
            text-decoration: none;
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
            padding: 8px 16px;
            text-decoration: none;
        }
        li a.active {
            background-color: #e6b800;
            color: white;
        }
        li a:hover:not(.active) {
            background-color: #e6b800;
            color: white;
            text-decoration: underline;
        }
        .btn {
            background-color: #e6b800;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
            display: inline-block;
            text-align: center;
        }
        .btn:hover {
            background-color: #d89c00;
            color: black;
        }
        .content {
            margin-left: 25%;
            padding: 1px 16px;
            height: 1000px;
        }
    </style>
</head>
<body>
<?php
$conn = new mysqli("localhost", "root", "", "iwp");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * from temp_session";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_row($result);
?>
<table style="width: 100%;">
    <tr>
        <td id="td1" style="font-size: 48px;">THE <span style="color: #e6b800;">DELUXE</span> HOTEL</td>
        <td id="td1" style="font-size: 25px; text-align: right;">Hello, <?php echo $row[2]; ?></td>
    </tr>
</table>
<ul>
    <li><a href="user_view.php">My Info</a></li>
    <li><a href="bookroom.php">Book A Room</a></li>
    <li><a href="user_room_status.php">Show Booking Status</a></li>
    <li><a href="user_payment.php">Payment</a></li>
    <li><a href="user_booking_history.php">Booking History</a></li>
    <li><a href="index.php">Logout</a></li>
</ul>
<div class="content">
    <p>Room Booking has been cancelled successfully.<br></p>
    <p><br>Click Next to get redirected to home.</p>
    <a href="user_view.php" class="btn">Next</a>
</div>
</body>
</html>
