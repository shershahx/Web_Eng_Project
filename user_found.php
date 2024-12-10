<!DOCTYPE html>
<html>
<head>
    <title>User Found</title>
    <style>
        body {
            margin: 0;
            background-color: #2C2C2C;
            color: #e6b800;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 40%;
            margin: 10% auto;
            padding: 30px;
            border: 4px solid #e6b800;
            border-radius: 20px;
            background-color: #3A3A3A;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
            text-align: center;
        }
        .container p {
            font-size: 20px;
            margin: 20px 0;
        }
        a {
            color: #2C2C2C;
            background-color: #e6b800;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 18px;
            transition: 0.3s;
        }
        a:hover {
            background-color: #C9A000;
            color: white;
        }
    </style>
</head>
<body>
<div class="container">
    <?php
    $conn = new mysqli("localhost", "root", "", "iwp");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * from temp";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);
    $sql = "DELETE from temp";
    mysqli_query($conn, $sql);
    echo "<p>Your password is: <b>" . $row[0] . "</b></p>";
    ?>
    <a href="user_login.php">Redirect to User Login</a>
</div>
</body>
</html>
