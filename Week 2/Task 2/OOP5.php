<!-- Write a class called 'Logger' with a static property called 'logCount' that keeps track of the number of log messages. Implement a static method to log a message. -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 5</title>
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
          class Logger {
            public static $logCount = 0;
        
            public static function message($message) {
                self::$logCount++;
        
                echo "Log Message " . self::$logCount . ": " . $message . "<br>" . "<br>";
            }
        
            public static function getLogCount() {
                return self::$logCount;
            }
            
            }
            
            
            Logger::message("First message");

            Logger::message("Second message");

            
            echo "Total log messages: " . Logger::getLogCount();
          ?>
        
        
        
        </h1>
    </div>
</body>
</html>
