<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $image = $_FILES['image']['name'];

    if ($image) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
    } else {
        $target_file = 'https://via.placeholder.com/150?text=Student'; 
    }

    $sql = "INSERT INTO students (first_name, last_name, phone, image, attendance) VALUES ('$first_name', '$last_name', '$phone', '$target_file', 'Absent')";

    if ($connect->query($sql) === TRUE) {
        echo "<p>New student $first_name $last_name has been successfully added.</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }

    $connect->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Add New Student</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<header>
        <h1>Welcome to the Attendance System</h1>
        <nav>
            <ul>
                <li><a href="attendance.php">Mark Attendance</a></li>
                <li><a href="report.php">View Report</a></li>
            </ul>
        </nav>
    </header>
    <section class="section-centre">
        <h2>Add New Student</h2>
        <form method="POST" action="index.php" enctype="multipart/form-data">
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required>

            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required>

            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required>

            <label for="image">Image:</label>
            <input type="file" id="image" name="image">

            <button type="submit">Add Student</button>
        </form>
    </section>
</body>
</html>
