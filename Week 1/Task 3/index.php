<?php

// PHP Program sort array by key
echo "<h2 style = 'color:Green'>1</h2>";
echo"<br>";

$rank = array(1, 5, 10, 14, 8, 6, 17, 3);

sort($rank);

$rank_string = '[' . implode(', ', $rank) . ']';

print($rank_string);


echo"<br> <hr>";
// Remove duplicate values from an array
echo "<h2 style = 'color:Green'>2</h2>";
echo"<br>";

$numbers = array(1, 2, 3, 4, 1, 2, 3, 5);

$single_numbers = array();

foreach ($numbers as $number) {
    if (!in_array($number, $single_numbers)) {
        $single_numbers[] = $number;
    }
}

$numbers_string = '[' . implode(', ', $single_numbers) . ']';

print("New Array: $numbers_string");
echo'<br>';
echo 'Old Array: ';
print($numbers = '[' . implode(', ', $numbers) . ']');

echo"<br> <hr>";
// Change an item in the array from lower case to upper case
echo "<h2 style = 'color:Green'>3</h2>";
echo"<br>";

$food = array("apple", "banana", "cherry", "date");

$Upper = 2;

$food[$Upper] = strtoupper($food[$Upper]);

print($food = '[' . implode(', ', $food) . ']');

echo"<br> <hr>";
// PHP Program to Check an Element Exists in Array or Not
echo "<h2 style = 'color:Green'>4</h2>";
echo"<br>";

$fruits = array("apple", "banana", "orange", "mango");

$search = "banana";

echo'The Array: ';
print($fruit = '[' . implode(', ', $fruits) . ']');
echo'<br>';

if (in_array($search, $fruits)) {
    echo "$search is in the array.";
} else {
    echo "$search is not in the array.";
}

echo"<br> <hr>";
?>
