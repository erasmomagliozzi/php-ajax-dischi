<?php
 include __DIR__.'/partials/server.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php foreach ($cd as $key => $descr) {?>
      <h1><?php echo $descr['titolo'];?></h1>
      <h2><?php echo $descr['artista'];?></h2>
      <p><?php echo $descr['anno'];?></p>
      <img src="<?php echo $descr['img_path'];?>" alt="">
    <?php } ?>

  </body>
</html>
