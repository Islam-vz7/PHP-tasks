<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['name1'];
    $last_name = $_POST['name2'];
    $attendance = $_POST['status'];

    // SQL query to update attendance
    $query = mysqli_query($connect,  "UPDATE students SET attendance = '$attendance' WHERE first_name = '$first_name' AND last_name = '$last_name'");

    if($query) {
        
        $_SESSION['success'] = 'Class Updated successfully!';

        header('location: ./report.php');
        
        mysqli_close($connect);

        exit();
   
    } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mark Attendance</title>
    <link rel="stylesheet" href="./css/style.css">
    
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="attendance.php">Mark Attendance</a></li>
                <li><a href="report.php">View Report</a></li>
            </ul>
        </nav>
    </header>
    <section class="section-centre">
        <h2>Mark Your Attendance</h2>
        <form method="POST" action="attendance.php">
            <label for="name1">First Name:</label>
            <input type="text" id="name1" name="name1" required>

            <label for="name2">Last Name:</label>
            <input type="text" id="name2" name="name2" required>

            <label for="status">Status:</label>
            <select id="status" name="status" required>
                <option value="Attended">Attended</option>
                <option value="Absent">Absent</option>
            </select>

            <button type="submit">Submit</button>
        </form>
    </section>
</body>
</html>
