<!-- Write a PHP class called 'Vehicle' with properties like 'brand', 'model', and 'year'. Implement a method to display the vehicle details. -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 3</title>
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
          class Vehicle {
            public $brand;
            public $model;
            public $year;

            public function __construct($brand, $model, $year){
                $this->brand = $brand;
                $this->model = $model;
                $this->year = $year;
            }

            public function Getbrand(){
                return $this->brand;
            }

            public function Getmodel(){
                return $this->model;
            }

            public function Getyear(){
                return $this->year;
            }

            public function display(){
                echo"Brand: $this->brand";
                echo"<br>";
                echo"Model: $this->model";
                echo"<br>";
                echo"Year: $this->year";

                echo"<br>";
                echo"<br>";
            }
          }

          $vehicle1 = new Vehicle("BMW", "M5 Competition", 2024);
          $vehicle1->display();
          
          $vehicle2 = new Vehicle("Ford", "Mustang", 2020);
          $vehicle2->display();
          ?>
        
        
        
        </h1>
    </div>
</body>
</html>
