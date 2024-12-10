<!DOCTYPE html>
<html>
<head>
    <title>User Forgot Password</title>
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
        h1 {
            font-size: 35px;
            color: #e6b800;
            margin-bottom: 20px;
        }
        .input {
            font-size: 18px;
            padding: 10px;
            width: 90%;
            margin: 10px 0;
            border: 1px solid #e6b800;
            border-radius: 5px;
            background-color: #2C2C2C;
            color: #e6b800;
        }
        .input::placeholder {
            color: #b3b3b3;
        }
        .input:focus {
            outline: none;
            box-shadow: 0 0 8px #e6b800;
        }
        .submit-btn {
            font-size: 18px;
            color: #2C2C2C;
            background-color: #e6b800;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: 0.3s;
        }
        .submit-btn:hover {
            background-color: #C9A000;
            color: white;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>User Forgot Password</h1>
    <form action="user_forgot_pwd1.php" method="post">
        <input class="input" type="email" name="email" placeholder="Enter email address" required>
        <input class="input" type="date" name="dob" required>
        <button type="submit" class="submit-btn">Recover Password</button>
    </form>
</div>
</body>
</html>
