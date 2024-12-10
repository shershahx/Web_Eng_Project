<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User SignUp</title>
    <style>
        body {
            margin: 0;
            background-color: #333;
            font-family: sans-serif;
            color: white;
        }


        div {
            width: 40%;
            text-align: center;
            margin: 5% auto;
            font-size: 18px;
            padding: 25px 0;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19);
            border-radius: 15px;
            background-color: #444;
            border: 10px solid #e6b800;
            color: white;
        }

        .input {
            font-size: 22px;
            text-align: center;
            border-radius: 5px;
            padding: 10px;
            width: 80%;
            border: 1px solid #e6b800;
            background-color: #555;
            color: white;
        }

        input[type="submit"] {
            background-color: #e6b800;
            border: 1px solid #a6a6a6;
            box-shadow: 2px 2px #a6a6a6;
            color: black;
            font-size: 28px;
            border-radius: 5px;
            padding: 12px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #d89c00;
        }

        table {
            width: 100%;
            margin-top: 20px;
        }

        td {
            text-align: left;
            padding: 12px;
        }

        h1 {
            background-color: #555;
            color: #e6b800;
            padding: 15px;
            font-size: 40px;
            font-family: 'Times New Roman';
            margin: 0;
        }


        a {
            color: #e6b800;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }


        label {
            font-size: 18px;
            color: #e6b800;
            text-align: left;
            display: inline-block;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<h1>THE <span style="color: #e6b800;">DELUXE</span> HOTEL</h1>

<div>
    <form action="user_signed_up.php" method="post">
        <table>
            <tr>
                <td colspan="2"><p style="font-size: 35px; color: #e6b800; font-family: 'Times New Roman', serif;"><b>New User SignUp</b></p></td>
            </tr>
            <tr>
                <td style="text-align: left;"><label for="name">Name: </label></td>
                <td><input class="input" type="text" name="name" placeholder="Enter Name" required></td>
            </tr>
            <tr>
                <td style="text-align: left;"><label for="phone">Phone Number: </label></td>
                <td><input class="input" type="number" name="phone" placeholder="Enter Number" required></td>
            </tr>
            <tr>
                <td style="text-align: left;"><label for="password">Password: </label></td>
                <td><input class="input" type="password" name="password" placeholder="Enter Password" required></td>
            </tr>
            <tr>
                <td style="text-align: left;"><label for="email">Email ID: </label></td>
                <td><input class="input" type="email" name="email" placeholder="Enter Email" required></td>
            </tr>
            <tr>
                <td style="text-align: left;"><label for="idproof">ID : </label></td>
                <td><input class="input" type="text" name="idproof" placeholder="Enter ID Proof" required></td>
            </tr>
            <tr>
                <td style="text-align: left;"><label for="dob">Date of Birth: </label></td>
                <td><input class="input" type="date" name="dob" required></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</div>

</body>
</html>
