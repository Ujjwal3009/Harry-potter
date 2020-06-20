<?php
$harry = json_decode(file_get_contents('characters.json'), true);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--===================-->
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel = "stylesheet"  href="css/fa/all.css">

</head>
<body>
<nav>
<div class="nav-wrapper deep-purple darken-4">
<a href="" class="brand-logo center ">HP World</a>
</div>
</nav>
<br>
<br>
<div class="container">
    <div class="row">
        <?php foreach($harry as $chara):?>
            <div class="col l4 m4 s12" >
                <div class="card"  style =" height : 500px;" >
                    <div class="card-image waves-effect waves-block waves-light">
                    <img src="<?php echo   $chara['image']; ?>" alt="" class="activator" height = "400px;">
                    </div>
                    <div class="card-content">
                     <span class = "card-title activator "><b><?php  echo $chara['name'];?></b></span>
                    <p  class="" style="font-size:12px;"><?php echo $chara['dateOfBirth']; ?></p>
                    </div>
                    <div class="card-reveal">
                    <span  class=" card-title" > <h5> <b><?php  echo $chara['house'];?></b></h5><i class=" fa fa-times right" aria-hidden = "true"> </i></span>
                    <p   style = "text-align: justify;" > <span class =" blue-text">WAND </span> <br> <span class =" red-text">Wood :  </span> <?php  echo $chara['wand']['wood'];?> <br> <span class =" green-text">Core : </span> <?php  echo $chara['wand']['core'];?> <br> <span class =" purple-text">Length :  </span>  <?php  echo $chara['wand']['length'];?> </p>   
                    <br> <br>
                    <h3 class = "deep-purple-text" > <b><?php  echo $chara['actor'];?></b> </h3>                
                    </div>


                   
                </div>
            </div>
        
        <?php  endforeach; ?>
    </div>
</div>
<!--=================-->
<script src= "js/materialize.min.js"></script>
    
</body>
</html>