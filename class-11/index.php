<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="style.css">
  <title>Registation form</title>
</head>

<body>

 
  <?php
      /**
       * function for email validationb alert
       * param messge and alerttype
       * 
       */
       function valided($message, $msgColor = "red"){
        return "<div style= \"background: {$msgColor}; padding:10px \" class=\"alert alert-dismissible fade show\" role=\"alert\">
        <strong>Hello bro!</strong> {$message}
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div> ";
      };

      /**
       * emailCheck for emil check 
       * 
       */
      function emailCheck($checkMail){
        if(filter_var($checkMail, FILTER_VALIDATE_EMAIL)){
          return true;
        }
        else{
          return false;
        }
      };
      

      /**
       * eduMailCheck for edu mail chcek
       * 
       */
      function eduMailCheck($mail){
        $eduMail = ['nu.edu.bd', 'du.edu.bd', 'nsu.edu.bd'];
          $mail_arr = explode("@", $mail, 2);
          if (in_array($mail_arr[1], $eduMail )) {
            return true;
          }else{ return false;
          
          }
        };


  if (isset($_POST['submited'])) {
    $fname       = $_POST["fname"];
    $lname       = $_POST["lname"];
    $email       = $_POST["email"];
    $password    = $_POST["password"];
    $age         = $_POST["age"];
    $gender      = $_POST["gender"];
    $Country     = $_POST["Country"];
    $agreeStatus = $_POST["agreeStatus"];

     
    if (empty($fname) || empty($lname)|| empty($email) || empty($password) || empty($age) ) {
      $validationMessage = valided("All Field Are Requierd.", "red");

    } elseif(emailCheck($email)==false){
      $validationMessage = valided("Your Email is not valid.", "#f5a42b");
      
    }elseif(eduMailCheck($email) == false){
      $validationMessage = valided("Your Email is not edumail.", "#f5a42b");
    }
    elseif($age <= 18){
      $validationMessage = valided("Your age is under 18.", "#f5a42b");
    }
        
    else {
      $validationMessage = valided("You are done it nicely.", "#14cb6582");
      
    }
  }



  ?>


  <div class="form_wrapper">
    <div class="form_container">
      <div class="title_container">
        <h2>Registration Form For Class-11</h2>
      </div>
      <?php
        if (isset($validationMessage)) {
          echo $validationMessage;
        }
      ?>
      
      <div class="row clearfix">
        <div class="">

        
          <form action="" method="POST">

            <div class="input_field"> <span><i aria-hidden="true" class="fa-solid fa-user-check"></i></span>
              <input type="text" name="username" placeholder="Username" />
            </div>

            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
              <input type="text" name="email" placeholder="Email" />
            </div>

            <div class="row clearfix">
              <div class="col_half">
                <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                  <input type="text" name="fname" placeholder="First Name" />
                </div>
              </div>
              <div class="col_half">
                <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                  <input type="text" name="lname" placeholder="Last Name" />
                </div>
              </div>
            </div>

            <div class="input_field"> <span><i class="fa-solid fa-stopwatch-20"></i></span>
              <input type="text" name="age" placeholder="Your age" />
            </div>
           
            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
              <input type="password" name="password" placeholder="Password" />
            </div>

            <div class="input_field radio_option">
              <!-- <input type="radio" name="gender" id="rd1 ">
              <label for="rd1">Male</label>
              <input type="radio" name="gender" id="rd2">
              <label for="rd2">Female</label>
              <input type="radio" name="gender" id="rd2">
              <label for="rd2">Others</label> -->
              <input type="radio" name="gander" value="male" id="male">
              <label for="male">Male</label>
            </div>

            <div class="input_field select_option">
              <select name="Country">
                <option value="">Select a country</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="India">India</option>
                <option value="Pakisthan">Pakisthan</option>
                <option value="Srilangka">Srilangka</option>
                <option value="USA">USA</option>
              </select>
              <div class="select_arrow"></div>
            </div>

            
            <div class="input_field checkbox_option">
              <input type="checkbox" name="agreeStatus" value="Yes" id="cb2">
              <label for="cb2">I am agrry with you terms & Condition</label>
            </div>

            <input class="button" type="submit" value="Register" name="submited" />

          </form>

        </div>
      </div>
    </div>
  </div>
  <p class="credit">Developed by <a href="https://github.com/devnurul/Basic-PHP-to-Advance-Laravel-Course/tree/main/class-10" target="_blank">Nurul Islam</a></p>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>