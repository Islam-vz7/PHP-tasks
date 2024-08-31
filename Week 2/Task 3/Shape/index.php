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

            require_once 'Shape.php';


            $triangle = new Triangle(8, 4);
            echo "Area of Triangle: " . $triangle->calculateArea();
            echo "<br>";
            echo "<br>";

            $rectangle = new Rectangle(9, 2);
            echo "Area of Rectangle: " . $rectangle->calculateArea();
          ?>


        </h1>
    </div>
</body>
</html>