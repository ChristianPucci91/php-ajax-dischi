<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-ajax-dischi</title>
    <link rel="stylesheet" href="style.css">
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/vue"></script> -->
    <link rel="shortcut icon" href="#">

    <?php
     require_once "data.php";
    ?>

</head>
<body>

 <div class="container">

   <?php foreach ($database as $key => $value): ?>
    <div class="box">
     <div class="img">

       <img src="<?php echo $value['poster']  ?>" alt="">

     </div>
     <div class="title">

       <h3><?php echo $value['title'] ?></h3>

     </div>
     <div class="author">

       <p><?php echo $value['author'] ?></p>

     </div>
     <div class="year">

       <p><?php echo $value['year'] ?></p>

     </div>


    </div>


   <?php endforeach; ?>

 </div>


  <!-- <script src="script.js"></script> -->
</body>
</html>
