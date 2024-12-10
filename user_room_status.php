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

    <li><a href="index.html">Logout</a></li>
</ul>
<div style="margin-left: 22%; padding: 20px;">
    <p style="font-size: 28px; text-align: center; text-decoration: underline;">Room Booking Status</p>
    <table class="basic_box">
        <tr>
            <th>Booking ID</th>
            <th>Name</th>
            <th>Room Type</th>
            <th>Check-in Date</th>
            <th>Check-out Date</th>
            <th>Room Status</th>
            <th>Price</th>
        </tr>
        <?php
        $sql1 = "SELECT * from user_room_book";
        $phone = $row[0];
        $idproof = $row[4];
        if ($result = mysqli_query($conn, $sql1)) {
            while ($row = mysqli_fetch_row($result)) {
                if ($phone == $row[0] && $idproof == $row[2]) {
                    echo "<tr>";
                    echo "<td>{$row[15]}</td>";
                    echo "<td>{$row[1]}</td>";
                    echo "<td>{$row[3]}</td>";
                    echo "<td>{$row[4]}</td>";
                    echo "<td>{$row[5]}</td>";
                    echo "<td>{$row[13]}</td>";
                    echo "<td>{$row[14]}</td>";
                    echo "</tr>";
                }
            }
            mysqli_free_result($result);
        }
        ?>
    </table>
    <br><br>
    <form action="user_cancel_room.php" method="post" class="basic_box">
        <label for="book_id" style="font-size: 18px; color: #e6b800;">Enter Booking ID:</label>
        <input type="number" name="book_id" required>
        <button type="submit" style="background-color: #e6b800; color: #1E1E1E; border: none; padding: 10px 20px; font-size: 18px;">Cancel Booking</button>
    </form>
</div>
</body>
</html>
