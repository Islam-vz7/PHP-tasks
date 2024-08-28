<!-- Write a PHP a class called "BankAccount" with properties like "accountNumber" and "balance". Implement methods to deposit and withdraw money from the account. -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 1</title>
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
          
          class BankAccount {

            //Data
            public $accountNumber;
            public $balance;

            // Methods
            public function deposit($amount) {
                $this->balance += $amount;
            } 

            public function withdraw($amount) {
                if($this->balance >= $amount) {
                    $this->balance -= $amount;
                }
                else {
                    $this->balance = "Insufficient amount";
                }
            }
          }

            $account1 = new BankAccount();

            $account1->accountNumber = 12345;

            $account1->balance = 2000;

            $account1->deposit(500);
            

            $account2 = new BankAccount();

            $account2->accountNumber = 678910;

            $account2->balance = 500;

            $account2->withdraw(1000);

            echo "Account Number: $account1->accountNumber";
            echo "<br>";
            echo "Balance: $account1->balance";

            echo "<br>";
            echo "<br>";

            echo "Account Number: $account2->accountNumber";
            echo "<br>";
            echo "Balance: $account2->balance";
        ?>




        </h1>
    </div>
</body>
</html>