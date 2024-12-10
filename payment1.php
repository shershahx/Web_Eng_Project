<!DOCTYPE html>
<html>
<head>
    <title>Payment</title>
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
            background-color: #2C2C2C; /* Dark background */
            color: #e6b800; /* Gold text */
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
            background-color: #2C2C2C; /* Dark navbar */
            text-decoration: none;
            position: fixed;
            height: 100%;
            overflow: auto;
        }
        li {
            color: white;
        }
        a {
            display: block;
            color: white;
            padding: 8px 16px;
            text-decoration: none;
        }
        a:active {
            background-color: #e6b800;
            color: white;
            text-decoration: underline;
        }
        a:hover {
            background-color: #e6b800;
            color: white;
            text-decoration: underline;
        }
        .footer {
            background-color: #2C2C2C; /* Dark footer */
            bottom: 0px;
            margin: 0px;
            padding: 10px;
        }
        .foot-text {
            color: #D6FEFF;
            text-align: left;
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
$conn = new mysqli("localhost", "root", "", "iwp");
if($conn->connect_error)
{
    die("Connection failed: ".$conn->connect_error);
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
    <li><a href="user_room_status.php">Show Booking Status</a></li>
    <li><a href="user_payment.php">Payment</a></li>
    <li><a href="index.html">Logout</a></li>
</ul>
<div style="margin-left:25%; padding:1px 16px;height:1000px;">
    <p>Payment has been done successfully.<br></p>
    <p><br>Click Next to get redirected to home.</p>
    <a href="user_view.php" class="btn">Next</a>
</div>

<div class="footer">
    <hr>
    <h2 class="foot-text">Contact Us!</h2>
    <h3 class="foot-text">Developers: VV, PKK</h3><br>
</div>
</body>
</html>

