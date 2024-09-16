<?php
require 'register-back.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
        <h2>Register</h2>
        <?php if ($error): ?>
            <p style="color:red;"><?php echo htmlspecialchars($error); ?></p>
        <?php endif; ?>
        <form method="POST" action="register.php">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>

            <button type="submit">Register</button>
        </form>

        <p>Already have an account? <a href="login.php">Login here</a></p>
    </div>
</body>
</html>
