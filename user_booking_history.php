<!DOCTYPE html>
<html>
<head>
    <title>User Signed In</title>
    <style>
        body {
            margin: 0;
            background: #f2f2f2;
            font-family: Verdana, sans-serif;
        }
        table {
            font-size: 22px;
        }
        td {
            text-align: center;
        }
        #td1 {
            background-color: #2C2C2C;
            color: #e6b800;
            padding: 10px;
            text-align: center;
        }
        .basic_box {
            border: 1px solid #ccc;
            border-radius: 15px;
            margin: auto;
            width: 600px;
            padding: 50px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.19);
        }
        th {
            font-weight: bold;
            padding-left: 15px;
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
        }
        .btn:hover {
            background-color: #d89c00;
        }
    </style>
</head>
<body>
<?php
$conn = new mysqli("localhost","root","", "iwp");
if($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
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
<div style="margin-left:25%; padding:1px 16px; height:1000px;">
    <p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
    <table class="basic_box">
        <tr>
            <td colspan="6"><p style="font-size: 28px; text-align: center; text-decoration: underline;"><b>Booking History</b></p></td>
        </tr>
        <tr>
            <th>Booking ID</th>
            <th>Name</th>
            <th>Room Type</th>
            <th>Check-in Date</th>
            <th>Check-out Date</th>
            <th>Price</th>
        </tr>
        <tr>
            <?php
            $phone = $row[0];
            $id = $row[4];
            $sql1 = "SELECT * from booked_hist";
            if ($result = mysqli_query($conn, $sql1)) {
            while ($row = mysqli_fetch_row($result)) {
            if ($row[0] == $phone && $row[2] == $id) {
            ?>
            <td><?php echo $row[14]; ?></td>
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[3]; ?></td>
            <td><?php echo $row[4]; ?></td>
            <td><?php echo $row[5]; ?></td>
            <td><?php echo $row[13]; ?></td>
        </tr>
        <?php
        }
        }
        mysqli_free_result($result);
        }
        ?>
    </table><br><br>
    <table class="basic_box">
        <tr>
            <td colspan="1">Enter Booking ID:</td>
            <td colspan="2">
                <form action="user_room_history.php" method="post">
                    <input type="number" name="book_id">
            </td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center;">
                <button class="btn" type="submit">View Details</button>
            </td>
        </tr>
        </form>
    </table>
</div>
</body>
</html>
