<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Your Kid Today</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }

        h1 {
            text-align: center;
            margin-top: 0;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }

        label {
            font-size: 18px;
            margin-bottom: 5px;
            color: #333;
        }

        input[type=text] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0,0,0,0.2);
        }

        button[type=submit], button[type=button] {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button[type=submit]:hover, button[type=button]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Register Your Kid Today</h1>
        <form action="Registration\process-Register.php" method="POST">
            <label for="firstname">First Name:</label>
            <input type="text" placeholder="First Name" name="firstname">

            <label for="surname">Surname:</label>
            <input type="text" placeholder="Surname" name="surname">

            <label for="phone_number">Phone Number:</label>
            <input type="text" placeholder="Phone Number" name="phone_number">

            <button type="submit" name="Register">Register</button>
        </form>

        <button onclick="location.href='index.html'">Back to Home</button>
    </div>
</body>
</html>
