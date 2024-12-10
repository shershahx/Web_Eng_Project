<!DOCTYPE html>
<html>
<head>
    <title>User Room Status</title>
    <style>
        body {
            margin: 0;
            background-color: #2C2C2C;
            color: #e6b800;
            font-family: Arial, sans-serif;
        }
        table {
            font-size: 22px;
            color: #e6b800;
            width: 100%;
        }
        .basic_box {
            border: 1px solid #e6b800;
            border-radius: 15px;
            margin: auto;
            width: 80%;
            padding: 30px;
            background-color: #3A3A3A;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
        }
        #td1 {
            background-color: #1E1E1E;
            color: #e6b800;
            padding: 10px;
            font-size: 24px;
            text-align: center;
        }
        td, th {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #e6b800;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 20%;
            background-color: #1E1E1E;
            position: fixed;
            height: 100%;
            overflow: auto;
        }
        ul li {
            text-align: center;
            border-bottom: 1px solid #e6b800;
        }
        ul li a {
            display: block;
            color: #e6b800;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            transition: background-color 0.3s, color 0.3s;
        }
        ul li a:hover {
            background-color: #e6b800;
            color: #1E1E1E;
        }
        a {
            color: #e6b800;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3s;
        }
        a:hover {
            color: #c9a000;
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
        <td id="td1" style="padding: 10px; font-size: 48px;">THE <span style="color: #e6b800;">DELUXE</span> HOTEL</td>
        <td id="td1" style="font-size: 25px; text-align: right;">Hello, <?php echo $row[2]; ?></td>
    </tr>
</table>
<ul>
    <li><a href="user_view.php">My Info</a></li>
    <li><a href="bookroom.php">Book A Room</a></li>
    <li><a href="user_room_status.php" class="active">Show Booking Status</a></li>
    <li><a href="user_payment.php">Payment</a></li>
    <li><a href="user_booking_history.php">Booking History</a></li>
    <li><a href="index.php">Logout</a></li>
</ul>
<div style="margin-left: 22%; padding: 20px;">
    <?php
    $bid = $_POST["book_id"];
    $sql = "SELECT * FROM booked_hist WHERE book_id='$bid'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);
    ?>
    <div class="basic_box">
        <h2 style="text-align: center; text-decoration: underline;">Booking Details</h2>
        <table>
            <tr><td>Booking ID:</td><td><?php echo $row[14]; ?></td></tr>
            <tr><td>Name:</td><td><?php echo $row[1]; ?></td></tr>
            <tr><td>Room Type:</td><td><?php echo $row[3]; ?></td></tr>
            <tr><td>Check-In Date:</td><td><?php echo $row[4]; ?></td></tr>
            <tr><td>Check-Out Date:</td><td><?php echo $row[5]; ?></td></tr>
            <tr><td>Days of Stay:</td><td><?php echo $row[6]; ?></td></tr>
            <tr><td>Total Bill Amount:</td><td><?php echo $row[13]; ?></td></tr>
            <tr><td>AC:</td><td><?php echo strcmp($row[7], "true") == 0 ? "YES" : "NO"; ?></td></tr>
            <tr><td>Breakfast:</td><td><?php echo strcmp($row[8], "true") == 0 ? "YES" : "NO"; ?></td></tr>
            <tr><td>Lunch:</td><td><?php echo strcmp($row[9], "true") == 0 ? "YES" : "NO"; ?></td></tr>
            <tr><td>Snacks:</td><td><?php echo strcmp($row[10], "true") == 0 ? "YES" : "NO"; ?></td></tr>
            <tr><td>Dinner:</td><td><?php echo strcmp($row[11], "true") == 0 ? "YES" : "NO"; ?></td></tr>
            <tr><td>Swimming:</td><td><?php echo strcmp($row[12], "true") == 0 ? "YES" : "NO"; ?></td></tr>
            <tr><td colspan="2" style="text-align: center;"><a href="user_booking_history.php">Back</a></td></tr>
        </table>
    </div>
</div>
</body>
</html>
