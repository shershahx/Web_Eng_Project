<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Found</title>
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
        .message {
            font-size: 24px;
            color: #FFD700;
            margin-bottom: 20px;
        }
        .btn-golden {
            background-color: #FFD700;
            color: #313131;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            text-decoration: none;
        }
        .btn-golden:hover {
            background-color: #e6b800;
            color: white;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="message">
        New Admin Created.
    </div>
    <a href="admin_login.php" class="btn-golden">Redirect to Admin Login</a>
</div>
</body>
</html>
