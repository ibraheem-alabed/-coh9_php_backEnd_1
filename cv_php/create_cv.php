<?php
$name = $_GET['name'];
$job_title  = $_GET['job_title'];
$Email = $_GET['Email'];
$City = $_GET['City'];
$State = $_GET['State'];
$tel = $_GET['tel'];
$object = $_GET['object'];
$personal_information = $_GET['personal_information'];
$education = $_GET['education'];
$courses = $_GET['courses'];
$Experians = $_GET['Experians'];


?>













<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,700;1,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./ass/newcss.css">

    <title>Cv</title>
</head>
<body>
    <header>
        <div class="containar">
            <img class="my_img" src="<?php echo $name?>" alt="your img img" width="350" height="350">
            <div>
                <h2 class="myname"><?php echo $name?></h2>
                <h3 class="civil"><?php echo $job_title?></h3>
            </div>
        </div>
        <hr id="hr">
        <nav>
            <h2>Contact</h2>
            <ul class="nav">
                <li><a href="$Email" target="_blank">Email</a></li>
                <li><a href="https://www.linkedin.com/in/ibraheem-alabed-1680ba176/" target="_blank"><?php echo $City?></a></li>
                <li><a href=""></a> T<?php echo $tel?></li>
            </ul>
        </nav>
    </header>
    <hr>
    <main>
        <div class="main_cont">
        <section class="info">
            <h2>objective</h2>
            <p> 
            <?php echo $object?>
            </p>
            <h2>personal information</h2>
            <p> 
            <?php echo $personal_information?>
            </p>
            <h2>Educatin</h2>
            <p> 
            <?php echo $education?>
            </p>
            <h2>Courese</h2>
            <p>
            <?php echo $courses?>
            </p>
        </section>
    </div>
    </main>
    <hr>
    <footer>
        <h2>Experince</h2>
        <p>
        <?php echo $Experians?>
        </p>
        <p>
            7 - oct - 2022
        </p>
    </footer>
</body>
</html>