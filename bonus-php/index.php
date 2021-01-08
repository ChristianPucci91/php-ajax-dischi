<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-ajax-dischi</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <link rel="shortcut icon" href="#">


</head>
<body>

 <header>

   <div class="logo">
         <img src="img/spotify.png" alt="">
   </div>

 </header>
 <div id="root">

   <div class="container">

     <div class="container_2">

          <div v-for="album in albums" class="box" >
           <div class="img">

             <img :src="album.poster" alt="">

           </div>
           <div class="title">

             <h3>{{album.title}}</h3>

           </div>
           <div class="author">

             <p>{{album.author}}</p>

           </div>
           <div class="year">

             <p>{{album.year}}</p>

           </div>

          </div>

     </div>
    </div>

  </div>

  <script src="script.js"></script>
</body>
</html>
