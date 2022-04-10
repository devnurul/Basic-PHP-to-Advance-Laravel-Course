<?php
// Question 01: 

// We have an array [12,34,2,6,78]. What kind of array is this? Find all prime numbers from this array.

// Step 1: First let us find the factors of the given number( factors are the number that completely divides the given number)

// Step 2: Then check the total number of factors of that number

// Step 3: Hence, If the total number of factors is more than two, it is not a prime number but a composite number. Because When a number is divisible by only one and itself, then it is a prime number.

//Answer:

// $my_array = [12, 34, 2, 6, 78, 9, 3, 7, 9, 4];

//     foreach ($my_array as $key => $number) {
      
//     }



// Question 02: 

// 	Let’s think about a use case, Daraz admin’s have some products for uploads on their e-commerce site. So make an array of products which contains 5 products.

// Go to daraz website and pick any 5 products and make your array.

// Must mention Which type of array you have made.



echo "<br> <br> answer = 2 <br> <br>" ; 

$products = [
    [ "name" => 'Misti Kumra', "status" => ' Paka ', 'price' => 200],
    [ "name" => 'Kacha Moris', "status" => ' Kacha ', 'price' => 250],
    [ "name" => 'Mango', "status" => ' Paka ', 'price' => 100],
    [ "name" => 'Banan', "status" => ' Paka ', 'price' => 205],
    [ "name" => 'Sosa', "status" => ' kacha ', 'price' => 520],
     
];

foreach ($products as $key1 => $product) {
    echo "<br>";
    echo $key1 +1 . " ==" ;
    
    foreach ($product as $key => $value) {
       echo $key . "===" . $value;
       echo "<br>";
    }
}
 
// This is multidimentional array



// Question 03: 

// 		This is an array array(0,10,80,67,60,89,91,56,45,30,95,83,99) 

// Find the maximum value from this array.

// Must use a foreach loop.


//answer

echo "<br> <br> answer = 3 <br> <br>" ; 

$array =array(0,10,80,67,60,89,91,56,45,30,95,83,99);
$intial = 0;
foreach ($array as $key => $value) {
    if ( $value > $intial) {
       $intial = $value;
    }
    
}
echo $intial; 


// Question 04: 

// 		Let’s traverse this array(0,10,80,67,60,89,91,56,45,30,95,83,99) and print 0 index then skip 1 index again print 2 skip 3….
echo "<br> <br> answer = 4 <br> <br>" ; 

$array_break_continue =array(0,10,80,67,60,89,91,56,45,30,95,83,99);

$arrlength = count($array_break_continue);

for($x = 0; $x < $arrlength; $x++) {
    if ($array_break_continue[$x] ==  2* $array_break_continue[$x] -1 ) {
        continue;
    }
    else
    { echo $array_break_continue[$x]; }

}


