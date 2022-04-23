<?php

// Create a function that will return children, teenagers, young people, old people from the age

//answer
function finding_age_label($age){
    if ($age <= 0){
        return "This age is not valid";}
    elseif($age <= 12) {
            return "Your Age is {$age} so you are Children";
    }elseif($age <= 18){
        return "Your Age is {$age} so you are Teenagers";
    }elseif($age <= 35){
        return "Your Age is {$age} so you are Young People";
    }
    else{
        return "Your Age is {$age} so you are Old man";
    }
};

echo finding_age_label(1);


// Create a function that will return the area of a rectangle, square, triangle

// function shape_calculator($dimantion){
//         foreach ($dimanstion as $key => $value) {
//         }
//         $number_of_dimantion = count($dimantion);
//     if ( $number_of_dimantion > 3 ||   $number_of_dimantion < 4) {
//             return "This Dimantion is not valid <br> Please provide 3 or 4 dimantional value";
//     }
//     elseif ( $number_of_dimantion == 3) {
//         return "This is Tryangle";
//     }else{

//             if ($value[0] = $value[1] = $value[2] = $value[3] ) {
                
//             }else{
            
//             }
    
//     }
// };





// GPA function for result publishing

// Create an age calculator function

// Create a BMI function for health

// Create a currency converter function from taka to USD, CAD, POUND, EURO etc

 