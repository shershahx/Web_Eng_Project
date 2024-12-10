<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #313131;
            color: #FFFFFF;
            font-family: 'Montserrat', sans-serif;
        }
        .container {
            max-width: 500px;
            margin: 5% auto;
            padding: 30px;
            background-color: #2a2a2a;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        .form-title {
            font-size: 28px;
            color: #FFD700;
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            font-size: 16px;
            color: #FFD700;
        }
        .form-control {
            background-color: #1a1a1a;
            border: 1px solid #FFD700;
            color: #FFFFFF;
            padding: 10px;
        }
        .form-control:focus {
            border-color: #FFD700;
            box-shadow: 0 0 8px rgba(255, 215, 0, 0.7);
        }
        .btn-golden {
            background-color: #FFD700;
            color: #313131;
            font-size: 16px;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            border: none;
            font-weight: bold;
            margin-top: 10px;
        }
        .btn-golden:hover {
            background-color: #e6b800;
            color: #FFFFFF;
        }
    </style>
</head>
<body>

<div class="container">
    <form method="post" action="admin_forgot_pwd1.php">
        <div class="form-title">
            <b>Admin Forgot Password</b>
        </div>

        <div class="mb-3">
            <label for="adminid" class="form-label">Enter UserID:</label>
            <input class="form-control" type="text" name="adminid" id="adminid" placeholder="Enter user ID" required>
        </div>

        <div class="mb-3">
            <label for="empid" class="form-label">Enter EmployeeID:</label>
            <input class="form-control" type="text" name="empid" id="empid" placeholder="Enter emp ID" required>
        </div>

        <div>
            <input type="submit" value="Submit" class="btn-golden">
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
