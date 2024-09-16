<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: #e0e5ec;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
        }

        .icon {
            display: inline-block;
            width: 150px;
            height: 150px;
            margin: 20px;
            background-color: #e0e5ec;
            border-radius: 20px;
            box-shadow: 9px 9px 16px #a3b1c6, -9px -9px 16px #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: 0.3s;
            cursor: pointer;
        }

        .icon:hover {
            box-shadow: inset 9px 9px 16px #a3b1c6, inset -9px -9px 16px #ffffff;
        }

        .icon img {
            width: 50px;
            height: 50px;
        }

        .icon-label {
            margin-top: 10px;
            font-size: 16px;
            color: #333;
        }

        .icon-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        a:hover {
            text-decoration: none;
        }

        .logout-icon {
            position: absolute;
            top: 20px;
            Right: 20px;
        }
        .logout-icon img {
            width: 40px;
            height: 40px;
        }
    </style>
</head>
<body>

    <div class="logout-icon">
        <a href="logout.php"><img src="/assets/logout.png" alt="Logout"></a>
    </div>

<div class="container">
    <h1>Welcome to Your To-Do App</h1>

    <div class="icon-container">
        <a href="login.php">
            <div class="icon">
                <img src="/assets/login.png" alt="Login Icon">
            </div>
            <div class="icon-label">Login</div>
        </a>

        <a href="register.php">
            <div class="icon">
                <img src="/assets/register.png" alt="Register Icon">
            </div>
            <div class="icon-label">Register</div>
        </a>

        <a href="notes.php">
            <div class="icon">
                <img src="/assets/notes.png" alt="Add Notes Icon">
            </div>
            <div class="icon-label">Add Notes</div>
        </a>
    </div>
</div>

</body>
</html>
