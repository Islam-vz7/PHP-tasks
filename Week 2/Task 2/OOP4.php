<!-- Write a PHP class called 'Circle' that has a radius property. Implement methods to calculate the circle's area and circumference. -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 4</title>
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
          class Circle{
            public $radius;
            public $pi = M_PI;
            public $area;
            public $circumference;

            public function __construct($radius) {
                $this->radius = $radius;
            }


            public function Getarea(){
                $this->area = round($this->pi*pow($this->radius,2));

                return $this->area;
            }

            public function Getcircumference(){
                $this->circumference = round(2*$this->pi*$this->radius);

                return $this->circumference;
            }

          public function display(){
            echo "Radius: $this->radius";
            echo "<br>";
            echo "Area: " . $this->Getarea();
            echo "<br>";
            echo "Circumference: " . $this->Getcircumference();

            echo "<br>";
            echo "<br>";
          }
        }

        $radius1 = new Circle(10);
        $radius1->Display();


        $radius2 = new Circle(5);
        $radius2->Display();
          ?>
        
        
        
        </h1>
    </div>
</body>
</html>
