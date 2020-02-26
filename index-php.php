<?php
 include __DIR__.'/partials/server.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="dist/app.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700&display=swap" rel="stylesheet">
  </head>
  <header>
    <div class="header">
      <img src="https://i.kinja-img.com/gawker-media/image/upload/s--ypN6iH9q--/c_fill,fl_progressive,g_center,h_900,q_80,w_1600/zrarqnhmkoaihvzss5ek.jpg" alt="logo_spotify">
    </div>
  </header>
  <body>
    <div class="container_cd">
      <?php foreach ($cd as $key => $descr) {?>
        <div class="cd">
          <img src="<?php echo $descr['img_path'];?>" alt="">
          <div class="description">
            <h1><?php echo $descr['titolo'];?></h1>
            <h2><?php echo $descr['artista'];?></h2>
            <p><?php echo $descr['anno'];?></p>
          </div>
        </div>
      <?php } ?>

    </div>

  </body>
  <footer>

  </footer>
</html>
