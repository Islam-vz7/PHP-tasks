<!-- Write a class called 'Math' with static methods like 'add()', 'subtract()', and 'multiply()'. Use these methods to perform mathematical calculations. -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 6</title>
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
          class Math {
            public static function add($num1, $num2) {
                return $num1 + $num2;
            }
        
            public static function subtract($num1, $num2) {
                return $num1 - $num2;
            }
        
            public static function multiply($num1, $num2) {
                return $num1 * $num2;
            }
        
            public static function display($num1, $num2) {
                echo "Numbers ($num1 and $num2)" . "<br>";
                echo "Addition: " . self::add($num1, $num2) . "<br>";
                echo "Subtraction: " . self::subtract($num1, $num2) . "<br>";
                echo "Multiplication: " . self::multiply($num1, $num2) . "<br>";
                echo "<br>";
            }
            }
            
            Math::display(5, 5); 
            
            Math::display(7, 4);
          ?>
        
        
        
        </h1>
    </div>
</body>
</html>
