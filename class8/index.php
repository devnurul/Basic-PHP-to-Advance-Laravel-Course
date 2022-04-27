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

 finding_age_label(100);



//Create a function that will return the area of a rectangle, square, triangle

function araOfrectangle($leanth, $wide){
    $area = $leanth * $wide ;
    return $area;
};
//echo araOfrectangle(23, 1);

function araOfsquare($leanth){
  $area1 = $leanth * $leanth ;
  return $area1;
};
//echo araOfrectangle(23);

function araOftryangle($land, $height){
  $area2 = ($land * $height) / 2;
  return $area2;
};
//echo araOfrectangle(23, 1);





// GPA function for result publishing

        function gpa($number_input){
           $total_number  = array_sum($number_input);
           $total_subject  = count($number_input);
           $gpa_n = $total_number / $total_subject ;
           $gpa_n = round($gpa_n);
           
      
          if ($gpa_n < 33) {
            return " You are Faild";
          }else{
            
           if($gpa_n < 40) {
                return "You are GPA = D Avarage = {$gpa_n} ";
           }
           elseif($gpa_n < 50) {
            return "You are GPA = C Avarage = {$gpa_n} ";
           }
          elseif($gpa_n < 60) {
            return "You are GPA = B Avarage = {$gpa_n} ";
           }
           elseif($gpa_n < 70) {
            return "You are GPA = A- Avarage = {$gpa_n} ";
         }
           elseif($gpa_n < 80) {
             return "You are GPA = A Avarage = {$gpa_n} ";
         }
           else{
            return "You are GPA = A+ Avarage = {$gpa_n}";
           }
        };
          }


    echo gpa([50, 90, 8 , 80, 90, 40]);




//Create an age calculator function

  
function age_calculator($from_start,$from_end){ 
  $birthdate = new DateTime(date("Y-m-d",  strtotime(implode('-', array_reverse(explode('/', $from_start))))));
  $today= new DateTime(date("Y-m-d",  strtotime(implode('-', array_reverse(explode('/', $from_end))))));           
  $ages = $birthdate->diff($today)->y;

  return $ages;
}

echo age_calculator('06/06/1996','07/02/2011');



//Create a BMI function for health

function bmi($wight, $height){
      $height = $height/100;

      $bmi_result = $wight / ($height * $height);
      $bmi_result = number_format($bmi_result, 2);

      return "Your BMI = {$bmi_result}" ;
 };
// first argument is weight (kg) and 2nd argument is height( cm )
  bmi( 72, 167);

// Create a currency converter function from taka to USD, CAD, POUND, EURO etc


function currency_convarter($taka, $currency){
        $usd = $taka / 85;
        $usd = number_format($usd, 2);
        $cad = $taka / 68;
        $cad = number_format($usd, 2);
        $pound = $taka / 111;
        $pound = number_format($usd, 2);
        $euro = $taka / 93.59;
        $euro = number_format($usd, 2);

        if ( $currency == "usd" ) {
          return "USD ={ $usd} <br>";
        }elseif($currency == "cad" ) {
          return "CAD ={$cad} <br>";
        }elseif($currency =="pound" ) {
          return "POUND ={$pound} <br>";
        }elseif($currency =="euro" ) {
          return "EURO ={$euro}";
        }
        else{
          return" This is not posible to convert";
        }
}
echo currency_convarter(5962, "pound");

