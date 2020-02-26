<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="dist/app.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700&display=swap" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="header">
        <img src="https://i.kinja-img.com/gawker-media/image/upload/s--ypN6iH9q--/c_fill,fl_progressive,g_center,h_900,q_80,w_1600/zrarqnhmkoaihvzss5ek.jpg" alt="logo_spotify">
      </div>
    </header>
    <div class="container_cd">

    </div>


  <script id="entry-template" type="text/x-handlebars-template">
    <div class="cd">
      <img src="{{img_path}}"><img>
      <div class="description">
       <h1>{{title}}</h1>
       <h2>{{artista}}</h2>
       <p>{{anno}}</p>
     </div>
    </div>
  </script>
  <script src="dist/app.js" charset="utf-8"></script>
  </body>
</html>
