 <?php
        // Assignment Nubmber 01

        // Your client said that he needs a dropdown, which contains all days of the running month. Sometimes we fill up a registration form that, which date of birth. So find out in google (get number of days in specific month php) and do this assignment using a for loop.

        // Day quantity is not equal for every month. Like as - february - 28, March - 31, april - 30
        
        // So days of running month should dynamic (by php build in function)
                
                $currentMonth= (int)date ("m");
                
                $currentYear= (int)date ("Y");
          
                $last_day_month = cal_days_in_month(CAL_GREGORIAN, $currentMonth, $currentYear); 

                for ($day=1; $day <=  $last_day_month ; $day++) { 
                        echo $day;
                        echo "<br>";
                }

        // Question 02: 

        // If we print 1-100, our output will be 100 times. But this time you have print out only the odd (বিজোড়) number within 1-100.
        
        // You have to rotate from 1 to 100.
        
        // Your output message should like that, “3 is a odd number”
        
        // Not need to print even number


                for ($n = 1; $n <= 100 ; $n++) { 
                     $oddNumber = 2*$n -1 ;

                     if( $oddNumber < 100){
                             echo $oddNumber;
                     }
                     echo "<br>";
                }

        // Question 03: 

        // Factorial - I think everyone knows the word. Factorial of 4 is given below:

        // 4! = 4*3*2*1 = 24

        // 6! = 6*5*4*3*2*1 = 720  

        // So let’s calculate the factorial of 7.

                $n =4;

                $factorial = 1;

               for ($i=$n; $i >= 1; $i--) { 
               $factorial = $factorial * $i;
               
        }
        echo $factorial;


        // Question 04: 

        // Print out from 100 - 1 using a while loop. 

        // You must use decrement operator
               

                $n = 100;

                while ($n >= 1) {
                        echo $n;
                        echo "<br>";
                        $n--;
                }

        // Question 05: 

        // You have an array of your purchased product items. 

        // ['apple', 'orange', 'banana', 'mango']

        // Show all products as a table list.

        // Output should like that: “sl- 1 and product - apple”

                $products = ['apple', 'orange', 'banana', 'mango'];

                foreach($products as $key => $product) {
                        echo "sl=" . " " . ++$key ." " . $product; 
                        echo "<br>";
                }