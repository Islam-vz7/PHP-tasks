<?php
require 'login-back.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .home-icon {
            position: absolute;
            top: 20px;
            Right: 20px;
        }
        .home-icon img {
            width: 40px;
            height: 40px;
        }
    </style>
</head>
<body>
    <div class="home-icon">
        <a href="index.php"><img src="/assets/home.png" alt="Home"></a>
    </div>

    <div class="login-container">
        <h2>Login</h2>
        <?php if ($error): ?>
            <p style="color:red;"><?php echo htmlspecialchars($error); ?></p>
        <?php endif; ?>
        <form method="POST" action="login.php">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>

        <p>Don't have an account? <a href="register.php">Register here</a></p>
    </div>
</body>
</html>
