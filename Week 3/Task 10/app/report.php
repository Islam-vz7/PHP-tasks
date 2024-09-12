<?php
include 'db.php';

if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $delete_sql = "DELETE FROM students WHERE id = $id";

    if ($connect->query($delete_sql) === TRUE) {
        echo "<p>Student has been successfully deleted.</p>";
    } else {
        echo "Error: " . $connect->error;
    }
}

$sql = "SELECT * FROM students";
$result = $connect->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Report</title>
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
    <section>
        <h2>Attendance Report</h2>
        <div class="table-container">
            <table class="neumorphism-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Attendance</th>
                        <th>Phone</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['first_name']; ?></td>
                        <td><?php echo $row['last_name']; ?></td>
                        <td><?php echo $row['attendance']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td>
                            <img src="<?php echo htmlspecialchars($row['image']); ?>" alt="Image from database" class="neumorphism-img">
                        </td>
                        <td>
                            <a href="report.php?delete=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this student?');">Delete</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>
