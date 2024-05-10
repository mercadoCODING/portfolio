<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Mercado Raphael Andre">
    <link rel="icon" type="favicon" href="images\portfolio-removebg-preview.png">
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/instagram.css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/facebook.css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/git-fork.css' rel='stylesheet'>
    <title>My Portfolio</title>



</head>
<?php include("style.php")?>


<body>
    <nav>

        <div class="logo-name-container">
            <img class ="img" src ="images\logo-noName.png" width="70px" height="60px">
        

        <div class="links-container">
            <div class="icon-wrapper">
            <a href="https://www.instagram.com/mercadora_ph/"><i class="gg-instagram"></i></a>
            </div>
            <div class="icon-wrapper">
            <a href="https://www.facebook.com/meguminarchwi"><i class="gg-facebook"></i></a>
            </div>
            <div class="icon-wrapper">
            <a href="https://github.com/mercadoCODING"><i class="gg-git-fork"></i></a>
            </div>
        </div>

        </div>
    </nav>


    <div class ="introduction">
        
        <div class="content-box content-box1">
            <h1 class="name-text"><?php echo $text;?></h1>
            <h3> test </h3>
        </div>

         <div classs="content-box content-box2">
           <h1>Test</h1>
        </div>
    </div>



</body>
</html>