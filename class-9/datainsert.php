<?php

$name = $_POST['name'];
$user_name = $_POST['user_name'];
$email = $_POST['email'];

if ($name == "" || $user_name == "" || $email == "") {
   ?>
<script> alert("All Field Is requierd") </script>
<?php
}else{
    echo "thank";
}





?>