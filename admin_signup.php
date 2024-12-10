<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin SignUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #313131;
            color: #FFFFFF;
            font-family: 'Montserrat', sans-serif;
        }
        .container {
            max-width: 500px;
            margin: 10% auto;
            padding: 40px;
            background-color: #2a2a2a;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        .form-title {
            font-size: 30px;
            color: #FFD700;
            margin-bottom: 20px;
        }
        .form-control {
            font-size: 18px;
            padding: 15px;
            border-radius: 10px;
            border: 1px solid #ccc;
            background-color: #414141;
            color: white;
        }
        .form-control:focus {
            border-color: #FFD700;
            box-shadow: 0 0 8px rgba(255, 215, 0, 0.7);
        }
        .btn-golden {
            background-color: #FFD700;
            color: #313131;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            text-decoration: none;
            cursor: pointer;
            width: 100%;
        }
        .btn-golden:hover {
            background-color: #e6b800;
            color: white;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="form-title"><b>Admin SignUp</b></div>
    <form action="admin_signup.php" method="post">
        <div class="mb-3">
            <label for="adminid" class="form-label">User ID:</label>
            <input type="text" name="adminid" id="adminid" class="form-control" placeholder="Enter user ID" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Enter password" required>
        </div>
        <div class="mb-3">
            <label for="empid" class="form-label">Employee ID:</label>
            <input type="text" name="empid" id="empid" class="form-control" placeholder="Enter emp ID" required>
        </div>
        <div>
            <button type="submit" class="btn-golden">Submit</button>
        </div>
    </form>
</div>
</body>
</html>
