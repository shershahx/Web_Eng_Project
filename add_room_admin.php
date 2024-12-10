<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Add Rooms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #343a40;
        }
        .navbar .navbar-brand {
            color: #e6b800;
        }
        .navbar .nav-link {
            color: white !important;
        }
        .navbar .nav-link:hover {
            color: #e6b800 !important;
        }
        .container {
            margin-top: 30px;
        }
        .table th, .table td {
            text-align: center;
        }
        .basic_box {
            border-radius: 10px;
            margin: 0 auto;
            width: 75%;
            padding: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }
        .btn-golden {
            background-color: #FFD700;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-weight: bold;
        }
        .btn-golden:hover {
            background-color: #FFBF00;
            color: black;
        }
        .sidebar {
            list-style-type: none;
            padding: 0;
            background-color: #343a40;
            position: fixed;
            height: 100%;
            width: 250px;
            top: 0;
            left: 0;
            z-index: 1000;
        }
        .sidebar li {
            text-align: left;
        }
        .sidebar a {
            color: white;
            padding: 15px;
            text-decoration: none;
            display: block;
        }
        .sidebar a.active, .sidebar a:hover {
            background-color: #e6b800;
        }
        .content {
            margin-left: 260px;
            padding: 20px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">The Deluxe Hotel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="admin_view.php">Rooms Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="add_room_admin.php">Add Room</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="remove_room_admin.php">Remove Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin_room_status.php">Booking Requests</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="confirmed_bookings.php">Confirmed Bookings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="booking_history.php">Booking History</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<ul class="sidebar">
    <li><a href="admin_view.php" class="active">Rooms Info</a></li>
    <li><a href="add_room_admin.php">Add Room</a></li>
    <li><a href="remove_room_admin.php">Remove Rooms</a></li>
    <li><a href="admin_room_status.php">Booking Requests</a></li>
    <li><a href="confirmed_bookings.php">Confirmed Bookings</a></li>
    <li><a href="booking_history.php">Booking History</a></li>
    <li><a href="index.html">Logout</a></li>
</ul>

<div class="content">
    <div class="basic_box">
        <p class="text-center" style="font-size: 28px; text-decoration: underline;">Add Rooms</p>

        <?php
        $conn = new mysqli("localhost", "root", "", "iwp");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM rooms_count";
        $result = mysqli_query($conn, $sql);
        ?>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Room Type</th>
                <th>Available Rooms</th>
                <th>Occupied Rooms</th>
                <th>Price</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while ($row = mysqli_fetch_row($result)) { ?>
                <tr>
                    <td><?php echo $row[0]; ?></td>
                    <td><?php echo $row[1]; ?></td>
                    <td><?php echo $row[2]; ?></td>
                    <td><?php echo $row[3]; ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>

        <form action="admin_room_added.php" method="post">
            <table class="table">
                <tr>
                    <td>Select room type:</td>
                    <td>
                        <select name="rooms" class="form-select" required>
                            <option value="">Select</option>
                            <option value="Single">Single</option>
                            <option value="Double">Double</option>
                            <option value="Executive">Executive</option>
                            <option value="Deluxe">Deluxe</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Enter number of rooms to add:</td>
                    <td><input type="number" min="0" name="noofrooms" class="form-control" required></td>
                </tr>
            </table>

            <div class="text-center">
                <input type="submit" class="btn btn-golden" value="Add Room">
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
