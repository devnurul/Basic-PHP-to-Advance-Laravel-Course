<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Registation form</title>
</head>

<body>

<?php

    function validationMsg($greet, $message, $color){
        return "<div class=\"alert alert-{$color} alert-dismissible fade show\" role=\"alert\">
        <strong>{$greet}!</strong> {$message}.
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>";
    };

    function emailchecker($mail){
        if (filter_var($mail, FILTER_VALIDATE_EMAIL) ){
            return true;
        }
        else{
            return false;
        }
    };

    function edumailChecker($inputMail){
        $edumail = ['nu.edu.bd', 'du.edu.bd', 'chu.edu.bd', 'bit.edu.bd'];
        $mail_array = explode('@', $inputMail, 2);
        if (in_array($mail_array[1], $edumail )) {
            return true;
        }else{
            return false;
        }
    };


        if (isset($_POST['submited'])) {
        
        $email = $_POST['email'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $password = $_POST['password'];

            if (empty($email) || empty($fname) || empty($lname) || empty($password )) {
                    $validationmsg = validationMsg('Somethings wrong', 'All filed are requierd', 'danger');
                             
            }elseif ( emailchecker($email)== false){
                $validationmsg = validationMsg('Somethings wrong', 'Email is not valid', 'warning');
            }
            elseif ( edumailChecker($email)== false){
                $validationmsg = validationMsg('Somethings wrong', 'Email is not edumail', 'warning');
            }
            else{
                $validationmsg = validationMsg('Congratulations', 'You have successfully submited', 'success');
            }

        }

   
?>



   <div class="form_wrapper">
    <div class="form_container">
      <div class="title_container">
        <h2>Registration Form For Class-10</h2>
      </div>
         <?php
            if (isset($validationmsg))
            echo $validationmsg;
         ?>
      <div class="row clearfix">
        <div class="">


          <form action="" method="POST">

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


            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
              <input type="password" name="password" placeholder="Password" />
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