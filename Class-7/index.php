<!-- 
Question 01:

		Let’s make an exam question set (add at list 10 dummy question) like that

	$questionSet = [

    [

        'question' => 'What is loream ipsum?',

        'options' => [

            'ans1', 'ans2', 'ans3', 'ans4'

        ]

    ],



    [

        'question' => 'What is loream ipsum?',

        'options' => [

            'ans1', 'ans2', 'ans3', 'ans4'

        ]

    ],



    [

        'question' => 'What is loream ipsum?',

        'options' => [

            'ans1', 'ans2', 'ans3', 'ans4'

        ]

    ]
];

Make a simple exam design using html css

Then make a exam by using these questions

Your questions must be come randomize order


 -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap');

*{
  box-sizing: border-box;
}
body{
  background-color: #b8c6db;
  background-image: linear-gradient(315deg, #b8c6db 0%, #f5f7f7 100%);
  font-family: 'Poppins', sans-serif;
  display: flex;
  align-items: center;
  justify-content: center;

  margin: 0;
}
.quiz-container{
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 0 10px 2px rgba(100, 100, 100, 0.1);
  width: 600px;
  overflow: hidden;
}
.quiz-header{
  padding: 4rem;
}
h2{
  padding: 1rem;
  
  margin: 0;
}

ul{
  list-style-type: none;
  padding: 0;
}
ul li{
  font-size: 1rem;
  margin: 1rem 0;
}
ul li label{
  cursor: pointer;
}
button{
  background-color: #03cae4;
  color: #fff;
  border: none;
  display: block;
  width: 100%;
  cursor: pointer;
  font-size: 1.1rem;
  font-family: inherit;
  padding: 1.3rem;
}
button:hover{
  background-color: #04adc4;
}
button:focus{
  outline: none;
  background-color: #44b927;
}


    </style>
</head>
<body>

<?php

$questionSets       =  [
    [
        'question' => 'What is freelancing?',
        'options'  => [
        'Freelancing is job & work as a employee', 'Freelancing is do work for others by contract', 'Freelancing is a technology', 'Freelancing is a company name'
        ]
    ],
    [
        'question' => 'What do you mean by UX?',
        'options'  => [
        'User Interest', 'User Excitement', 'User Interface', 'User Experience'
        ]
    ],
    [
        'question' => 'What is Html?',
        'options'  => [
        'programmming language', 'markup language', 'css', 'None of theme'
        ]
    ],
    [
        'question' => 'What is your name?',
        'options'  => [
        'Shakiukl', 'Monir', 'Josim', 'Pintu'
        ]
    ],
    [
        'question' => 'What is your fathere name?',
        'options'  => [
            'Shakiukl', 'Monir', 'Josim', 'Pintu'
        ]
    ],
    [
        'question' => 'What is Mother name?',
        'options'  => [
            'Shakiukl', 'Monir', 'Josim', 'Pintu'
        ]
    ],
    [
        'question' => 'What is loream feather?',
        'options'  => [
        'ans1', 'ans2', 'ans3', 'ans4'
        ]
    ],
    [
        'question' => 'What is your name?',
        'options'  => [
        'Shakiukl', 'Monir', 'Josim', 'Pintu'
        ]
    ],
    [
        'question' => 'What is loream feather?',
        'options'  => [
        'ans1', 'ans2', 'ans3', 'ans4'
        ]
    ],
    [
        'question' => 'What is your name?',
        'options'  => [
        'Shakiukl', 'Monir', 'Josim', 'Pintu'
        ]
    ],
];



?>    

<div class="quiz-container" id="quiz">
    <div class="quiz-header">
        <h2 style="color:#fff; background: red">This is quiz of sorobindu</h2>
        <?php 

            shuffle($questionSets);

           foreach ($questionSets  as $key => $questionSet) {
           
                ?>
        
        
      <h2 id="question"><?php echo $questionSet['question']?></h2>
      <ul>

      <?php            
   
            $new_arry =  $questionSet['options'];
            shuffle($new_arry);
            foreach ($new_arry as $key1 => $option) {
                
               
          
                ?>
      <li>
          <input type="radio" name="answer" id="a" class="answer">
          <label for="a" id="a_text"> <?php echo $option; ?> </label>
        </li>       
                <?php } ?>
      </ul>
                <?php
    }
        ?>
    </div>

    <button id="submit">Submit</button>

  </div>






</body>
</html>

