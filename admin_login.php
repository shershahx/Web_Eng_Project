<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body {
            margin: 0;
            font-family: 'Montserrat', sans-serif;
            background-color: #313131;
            color: #FFFFFF;
        }
        .container {
            max-width: 500px;
            margin: 5% auto;
            padding: 30px;
            background-color: #2a2a2a;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        h2 {
            text-align: center;
            color: #FFD700;
            font-size: 30px;
        }
        label {
            font-size: 18px;
            color: #FFD700;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #FFD700;
            border-radius: 5px;
            background-color: #1a1a1a;
            color: #FFFFFF;
        }
        input[type="text"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #FFD700;
            background-color: #2a2a2a;
        }
        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            margin: 20px 0;
            background-color: #FFD700;
            color: #313131;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #e6b800;
            color: #FFFFFF;
        }
        .link-group {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }
        .link-group a {
            color: #FFD700;
            text-decoration: none;
            font-size: 16px;
        }
        .link-group a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Admin Login</h2>
    <form action="admin_db.php" method="post">
        <label for="adminid">Admin ID:</label>
        <input type="text" id="adminid" name="adminid" placeholder="Enter user ID" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter password" required>
        <button type="submit" class="btn">Login</button>
    </form>
    </div>
</body>
</html>
