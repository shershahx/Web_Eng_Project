<!DOCTYPE html>
<html>
<head>
    <title>Admin Confirm Booking</title>
    <style>
        body {
            margin: 0;
            background: #f2f2f2;
        }
        table {
            font-size: 22px;
        }
        td {
            text-align: center;
        }
        #td1 {
            background-color: #2C2C2C; /* Dark background for the header */
            color: white;
            padding: 15px;
            font-size: 48px;
            text-align: center;
            position: sticky;
            top: 0; /* Makes the header sticky */
            z-index: 1000;
        }
        .basic_box {
            border: 1px solid #ccc;
            border-radius: 15px;
            margin: auto;
            width: 600px;
            padding: 50px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19);
            background-color: #333; /* Dark background for the content box */
        }
        th {
            font-weight: bold;
            text-align: left;
            padding-left: 15px;
            color: #e6b800; /* Gold color for table headers */
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 22%;
            font-size: 24px;
            background-color: #2C2C2C; /* Dark background for sidebar */
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
            background-color: #e6b800; /* Gold for active link */
            color: black;
        }
        li a:hover:not(.active) {
            background-color: #e6b800; /* Gold on hover */
            color: black;
        }
        .btn {
            background-color: #e6b800; /* Gold button */
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }
        .btn:hover {
            background-color: #d89c00; /* Slightly darker gold on hover */
        }
    </style>
</head>
<body>
<table style="width: 100%;">
    <tr>
        <td id="td1" style="font-size: 48px;">THE <span style="color: #e6b800;">DELUXE</span> HOTEL</td>
    </tr>
</table>
<ul>
    <li><a href="admin_view.php" class="active">Rooms Info</a></li>
    <li><a href="add_room_admin.php">Add Room</a></li>
    <li><a href="remove_room_admin.php">Remove Rooms</a></li>
    <li><a href="admin_room_status.php">Booking Requests</a></li>
    <li><a href="confirmed_bookings.php">Confirmed Bookings</a></li>
    <li><a href="booking_history.php">Booking History</a></li>
    <li><a href="index.html">Logout</a></li>
</ul>
<div style="margin-left: 25%; padding: 1px 16px; height: 1000px;">
    <table class="basic_box">
        <tr>
            <td colspan="6"><p style="font-size: 28px; text-align: center; text-decoration: underline; color: #e6b800;"><b>Confirmed Bookings</b></p></td>
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
            $conn = new mysqli("localhost","root","", "iwp");
            if($conn->connect_error)
            {
                die("Connection failed: ".$conn->connect_error);
            }
            $sql1 = "SELECT * from confirmed_booking";
            if ($result=mysqli_query($conn,$sql1))
            {
            while ($row=mysqli_fetch_row($result))
            {
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
        mysqli_free_result($result);
        }
        ?>
    </table><br><br>
    <table class="basic_box">
        <tr>
            <th colspan="2">Modify Stay</th>
        </tr>
        <tr><td><br></td></tr>
        <tr>
            <td>Enter Booking ID:</td>
            <td>
                <form action="admin_modify_room.php" method="post">
                    <input type="number" name="book_id">
            </td>
        </tr>
        <tr>
            <td>Enter new Check-out date:</td>
            <td>
                <input type="date" name="checkout">
            </td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center;">
                <button class="btn" type="submit">Change</button>
            </td>
        </tr>
        </form>
    </table>
</div>
</body>
</html>
