
	<!-- Question 02:

Let’s make a website which only contains our teams section.

Now create an array of our teams at least three elements and make the our team section dynamic using php.

Make an array of our teams including image

Make a section of our team by using html css

And dynamic the section by php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        @import 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css';
@import 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css';
@import 'https://fonts.googleapis.com/css?family=Raleway:100,600';
@import 'https://fonts.googleapis.com/css?family=Open+Sans:300';
html,
body {
  width: 100%;
  height: 100%;
}

body {
  font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-weight: 300;
  color: #999;
  background-color: #fff;
}

h6 {
  margin: 0 0 20px 0;
  text-transform: none;
  color: rgba(254, 82, 76, 1);
  font-family: "Raleway", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-weight: 600;
  letter-spacing: 1px;
  line-height: 1.5;
}

a:link,
a:active,
a:visited{
  color:rgba(255,255,255,1);
}

a:hover{
  color:rgba(255,255,255,0.6);
}

.gray {
  color: #a5a5a5;
}

.team{
  margin:40px;
}

.team-member {
  margin: 15px 0;
  padding: 0;
  box-sizing: border-box;
}

.team-member figure {
  position: relative;
  overflow: hidden;
  padding: 0;
  margin: 0;
}

.team-member figure img {
  min-width: 100%;
}

.team-member figcaption p {
  font-size: 16px;
}

.team-member figcaption ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

.team-member figcaption ul {
  visibility: visible;
  -webkit-transition: all 0.1s ease-in-out;
  -moz-transition: all 0.1s ease-in-out;
  -o-transition: all 0.1s ease-in-out;
  transition: all 0.1s ease-in-out;
}

.team-member figcaption ul li {
  display: inline-block;
  padding: 10px;
}

.team-member h4 {
  margin: 10px 0 0;
  padding: 0;
}

.team-member figcaption {
  padding: 50px;
  color: transparent;
  background-color: transparent;
  position: absolute;
  z-index: 996;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 0;
  overflow: hidden;
  visibility: hidden;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

.team-member figure:hover figcaption {
  visibility: visible;
  color: #fff;
  background: rgba(230, 78, 62, 0.9);
  /* Primary color, can be changed via colors.css */
  
  height: 100%;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

.team-member figure:hover figcaption ul li a:hover {
  color: rgba(49, 49, 49, .97);
}

.team-member figure img {
  -webkit-transform: scale(1) rotate(0) translateY(0);
  -moz-transform: scale(1) rotate(0) translateY(0);
  -o-transform: scale(1) rotate(0) translateY(0);
  -ms-transform: scale(1) rotate(0) translateY(0);
  transform: scale(1) rotate(0) translateY(0);
  -webkit-transition: all 0.4s ease-in-out;
  -moz-transition: all 0.4s ease-in-out;
  -o-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
}

.team-member figure:hover img {
  -webkit-transform: scale(1.1) rotate(1deg) translateY(12px);
  -moz-transform: scale(1.1) rotate(1deg) translateY(12px);
  -o-transform: scale(1.1) rotate(1deg) translateY(12px);
  -ms-transform: scale(1.1) rotate(1deg) translateY(12px);
  transform: scale(1.1) rotate(1deg) translateY(12px);
  -webkit-transition: all 0.4s ease-in-out;
  -moz-transition: all 0.4s ease-in-out;
  -o-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
}
    </style>
</head>
<body>
   <?php 
    $Teammember =[

        ['name' => "Nurul Islam", 'job_title' => 'Web developer', 'about' => 'I am a profession web developer and also a teacher. I love to make new thing by codding', 'image' =>'image/image-1.png', 'social_link'  => [
            'https://www.linkedin.com/in/developernurulislam/', 'https://twitter.com/nurul_islam0', 'https://www.linkedin.com/in/developernurulislam/'
            ]
        ],

        ['name' => " Sadman Noor", 'job_title' => 'Content writer', 'about' => 'I am a profession content writer and also a teacher. I love to make new thing by codding', 'image' =>'image/image-2.png', 'social_link'  => [
            'https://www.linkedin.com/in/developernurulislam/', 'https://twitter.com/nurul_islam0', 'https://www.linkedin.com/in/developernurulislam/'
            ]
        ],

        ['name' => "Ayman Noor", 'job_title' => 'Wordpress developer', 'about' => 'I am a profession wordpress developer and also a teacher. I love to make new thing by codding', 'image' =>'image/image-3.png', 'social_link'  => [
            'https://www.linkedin.com/in/developernurulislam/', 'https://twitter.com/nurul_islam0', 'https://www.linkedin.com/in/developernurulislam/'
            ]
        ],
        
    ]

        ?>
     <!-- Our team Section -->
<section id="team" class="team content-section">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-12">
        <h2>Our Team</h2>
        <h3 class="caption gray">Meet the people who make awesome stuffs</h3>
      </div><!-- /.col-md-12 -->

      <div class="container">
        <div class="row">

          <div class="col-md-4">
            <div class="team-member">

            <?php
                foreach ($Teammember as $key => $single_member) {
                   
                
                       
            ?>

              <figure>
                <img src="<?php echo $single_member['image'] ?>" alt="" class="img-responsive">
                <figcaption>
                  <p><?php echo $single_member['about'] ?></p>
                  <ul>
                      <?php
                      $link_social =  $single_member['social_link'];

                        ?>
                      
                    <li><a href=" <?php $link_social[0]; ?> "><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href=" <?php $link_social[1]; ?> "><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href= "<?php $link_social[2]; ?> "><i class="fa fa-linkedin fa-2x"></i></a></li>
                   
                  </ul>
                </figcaption>
              </figure>
              <h4><?php echo $single_member['name'] ?></h4>
              <p><?php echo $single_member['job_title'] ?></p>

              <?php
               }
              ?>
            </div><!-- /.team-member-->


        </div><!-- /.row -->
      </div><!-- /.container -->

    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.our-team -->

</body>
</html>