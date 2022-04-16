<?php
// Question 01:

// You have purchased some items from a supershop. Purchase product array is given below-

// $purchased_products = array(

//         array('name' => 'banana',  'qty' => 10, 'total_price' => 550),

//         array('name' => 'apple',     'qty' => 50,  'total_price' => 1500),

//         array('name' => 'orange',  'qty' => 7,    'total_price' => 600),

// );

// How much product quantity you have purchased (total purchased qty = 67)

// Calculate the total amount of all purchased items (total amount = 2650 tk).
//answer-1
$purchased_products = array(

           array('name' => 'banana',  'qty' => 10, 'total_price' => 550),
    
          array('name' => 'apple',     'qty' => 50,  'total_price' => 1500),
    
          array('name' => 'orange',  'qty' => 7,    'total_price' => 600),
    
 );


  $total_qty =array_sum( array_column($purchased_products, 'qty')) ;
 
  echo "Total Item=". $total_qty ."pcs";


 $total_price = array_sum(array_column($purchased_products, 'total_price'));

echo "And <br> Total Price= {$total_price} taka";


// Question 02: 

// You have two array of emails, these are given below-

// $first_email_array = ["abc@gmail.com", "xyz@gmail.com", "demo@gmail.com"]; 

// $second_email_array = ["efg@gmail.com", "xyz@gmail.com", "dummy@gmail.com"];

// You have to make a single array from this two arrays

// And don’t keep any value in multiple time

//answer-2
$first_email_array = ["abc@gmail.com", "xyz@gmail.com", "demo@gmail.com"]; 

$second_email_array = ["efg@gmail.com", "xyz@gmail.com", "dummy@gmail.com"];

$new_array = array_merge($first_email_array, $second_email_array);

echo '<pre>';

print_r (array_unique($new_array));


// Question 03:

// $citylist = array( "Black Canyon City", "Chandler", "Flagstaff", "Gilbert", "Glendale", "Globe", "Mesa", "Miami", "Phoenix", "Peoria", "Prescott", "Scottsdale", "Sun City", "Surprise", "Tempe", "Tucson", "Wickenburg" );

// Split this given array into chunks 4


//answer-3 threec
 $citylist = array( "Black Canyon City", "Chandler", "Flagstaff", "Gilbert", "Glendale", "Globe", "Mesa", "Miami", "Phoenix", "Peoria", "Prescott", "Scottsdale", "Sun City", "Surprise", "Tempe", "Tucson", "Wickenburg" );

 print_r(array_chunk($citylist, 4));
