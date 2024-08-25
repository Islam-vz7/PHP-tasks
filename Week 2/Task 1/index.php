<?php
function calculating($num1, $num2, $operator) {
    switch ($operator) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            return $num1 / $num2;
        default:
            return;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    if (is_numeric($num1) && is_numeric($num2)) {
        $result = calculating($num1, $num2, $operator);
    } else {
        $result = "Error: Please enter valid numbers.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
        }
        input[type="text"] {
            font-size: 16px;
        }
        select {
          font-size: 16px;
        }
        input[type="submit"] {
            padding: 10px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 10%;
        }
        .result {
            margin-top: 20px;
            padding: 20px;
            border: 2px solid #4CAF50;
            background-color: #e7f7e6;
            color: #333;
            display: inline-block;
            width: auto;
            font-size: 18px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <h1>PHP Calculator</h1>
    <form method="post" action="">
        <input type="text" name="num1" placeholder="Enter a number" required>
        <select name="operator" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="num2" placeholder="Enter a number" required>
        <input type="submit" value="Calculate">
    </form>

    <?php
        echo "<div class='result'>Result: $result</div>";
    ?>
</body>
</html>
