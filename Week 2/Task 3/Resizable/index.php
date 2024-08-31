<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shape</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: start;
            height: 100px;
            background-color: #f0f2f5;
            font-family: 'Arial', sans-serif;
        }

        .box {
            margin-top: 50px;
            border-radius: 20px;
            box-shadow: 5px 5px 20px #000000;
            padding: 40px 60px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="box">
        <h1>
          
          <!-- PHP Section --- -->
          <?php

            require_once 'Resizable.php';

            $input = new Square(5);

            echo 'Length Before: ' . $input->getLengthBefore();
            echo "<br>";
            echo "Area Before: " . $input->getAreaBefore();

            echo "<br>";
            echo "<br>";

            $input->resize(2);

            echo "Reduction Value: " . $input->getReductionValue();
            echo "<br>";
            echo "Length After: " . $input->getLengthAfter();
            echo "<br>";
            echo "Area After: " . $input->getAreaAfter();

          ?>


        </h1>
    </div>
</body>
</html>