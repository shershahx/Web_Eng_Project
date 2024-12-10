<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
    <style>
        body {
            background-color: #2C2C2C;
            color: #e6b800;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 40%;
            margin: 10% auto;
            padding: 30px;
            background-color: #3A3A3A;
            border: 4px solid #e6b800;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
            text-align: center;
        }
        .container p {
            font-size: 35px;
            color: #e6b800;
            margin-bottom: 20px;
        }
        .container input {
            font-size: 20px;
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #e6b800;
            border-radius: 5px;
            background-color: #2C2C2C;
            color: #e6b800;
        }
        .container input:focus {
            outline: none;
            border-color: #c9a000;
        }
        .container input[type="submit"] {
            background-color: #e6b800;
            color: #2C2C2C;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .container input[type="submit"]:hover {
            background-color: #c9a000;
        }
        .button-group {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .button-group button {
            background-color: #e6b800;
            border: none;
            color: #2C2C2C;
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }
        .button-group button:hover {
            background-color: #c9a000;
            color: #1E1E1E;
        }
        .button-group button a {
            text-decoration: none;
            color: #2C2C2C;
            font-weight: bold;
        }
        .button-group button a:hover {
            color: #1E1E1E;
        }
    </style>
</head>
<body>
<div class="container">
    <form action="user_logged_in.php" method="POST">
        <p><b>User Login</b></p>
        <input type="email" name="phone" placeholder="Enter email" required>
        <br>
        <input type="password" name="password" placeholder="Enter password" required>
        <br>
        <input type="submit" value="Login">
    </form>
    <div class="button-group">
        <button><a href="user_signup.php">User SignUp</a></button>
        <button><a href="user_forgot_pwd.php">Forgot Password</a></button>
    </div>
</div>
</body>
</html>
