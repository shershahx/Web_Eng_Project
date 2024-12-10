<!DOCTYPE html>
<html>
<head>
    <title>User Payment</title>
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
        button {
            background-color: #e6b800;
            color: #1E1E1E;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }
        button:hover {
            background-color: #c9a000;
            color: white;
        }
        input[type="number"] {
            padding: 8px;
            border: 1px solid #e6b800;
            border-radius: 5px;
            background-color: #3A3A3A;
            color: #e6b800;
        }
        input[type="number"]::placeholder {
            color: #b3b3b3;
        }
    </style>
</head>
<body>
<table style="width: 100%;">
    <tr>
        <td id="td1" colspan="2">
            THE <span style="color: #e6b800;">DELUXE</span> HOTEL
        </td>
    </tr>
</table>
<ul>
    <li><a href="user_view.php">My Info</a></li>
    <li><a href="bookroom.php">Book A Room</a></li>
    <li><a href="user_room_status.php">Show Booking Status</a></li>
    <li><a href="user_payment.php" class="active">Payment</a></li>

    <li><a href="index.html">Logout</a></li>
</ul>
<div style="margin-left: 22%; padding: 20px;">
    <div class="basic_box">
        <h2 style="text-align: center; text-decoration: underline;">Payment</h2>
        <table style="width: 100%;">
            <tr>
                <th>Booking ID</th>
                <th>Name</th>
                <th>Room Type</th>
                <th>Check-in Date</th>
                <th>Check-out Date</th>
                <th>Price</th>
            </tr>
            <?php
            $conn = new mysqli("localhost", "root", "", "iwp");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql1 = "SELECT * from confirmed_booking";
            if ($result = mysqli_query($conn, $sql1)) {
                while ($row = mysqli_fetch_row($result)) {
                    echo "<tr>
								<td>$row[14]</td>
								<td>$row[1]</td>
								<td>$row[3]</td>
								<td>$row[4]</td>
								<td>$row[5]</td>
								<td>$row[13]</td>
							</tr>";
                }
                mysqli_free_result($result);
            }
            $conn->close();
            ?>
        </table>
        <br>
        <form action="payment.php" method="post">
            <table style="width: 100%; margin-top: 20px;">
                <tr>
                    <td style="text-align: left;">Enter Booking ID:</td>
                    <td style="text-align: left;">
                        <input type="number" name="book_id" placeholder="Enter Booking ID" required>
                    </td>
                    <td style="text-align: center;">
                        <button type="submit">Pay Now</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
</body>
</html>
