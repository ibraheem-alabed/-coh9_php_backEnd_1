<?php
$lessons = array(
  array(  
    "title" =>  "php demo",
    "dis" => "demo about php language.",
    "link" => "./demo/index.php",
  ),
  array(  
    "title" =>"php forms",
    "dis" => "Hpw to handel forms in php.",
    "link" => "./php-forms/index.php",
  ),
  array(
    "title" => "HTU Courses",
    'dis' => 'Same website for HTU Courses but with backend support.',
    'link' => './Htu-courses-php/'
),
array(
    "title" => "animals_api_php",
    'dis' => 'Collect information from the animals API and use it in a website.',
    'link' => './animals_api_php/'
),
array(
    "title" => "CV",
    'dis' => 'Create CV application.',
    'link' => './cv_php/'
),
array(
    "title" => "MySQL - Customers (crm)",
    'dis' => 'Simple CRM',
    'link' => './crm/'
),
array(
    "title" => "Ticketing System",
    'dis' => 'Simple PHP ticketing system that manages seats reservation',
    'link' => './ticketing_system/'
),
array(
    "title" => "OOP Basics",
    'dis' => 'Demonstration of OOP concepts',
    'link' => './oop_basics/'
),
array(
    "title" => "Students Management System",
    'dis' => 'A simple students management system using OOP',
    'link' => './sm_oop/'
)
);




?>







<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php class</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body class="container my-5">
    <h1 class="text-center">php courses</h1>
    <hr class="mb-5 ">



  <div class="container ">
    <div class="row">
    <?php foreach ($lessons as $lesson) :?>
    <div class="card col-3 mx-1">
  <div class="card-body">
    <h5 class="card-title"><?php echo $lesson['title'] ?></h5>
    <p class="card-text"><?php echo $lesson['dis'] ?></p>
    <a href="<?php echo $lesson['link']?>" class="btn btn-primary">more info</a>
  </div>
</div>
      <?php endforeach ?>
    </div>
  </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>