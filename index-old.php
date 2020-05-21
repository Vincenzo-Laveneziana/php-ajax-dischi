<!-- Import databese album  -->
<?php 
  include __DIR__ .  '/partials/data/database.php';
?> 


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Titolo e icona -->
  <title>Titolo</title>
  <link rel="icon" href="">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">

  <!-- Css -->
  <link rel="stylesheet" href="dist/css/main.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

</head>
<body>
  
  <!-- Header -->
  <header>  
    <div id="head">
      <img src="dist\img\spotify-logo.png" alt="Logo">
    </div>
  </header>

  <!-- Main -->
  <main>
    <div id="albums">

      <?php foreach ($albums as $album) {?>
        <div class="album">
          <ul>
            <li>
              <img src=" <?php echo $album["poster"]; ?> " alt="poster">
            </li>
            <li>
              <h2> <?php echo $album["title"]; ?></h2>
            </li>
            <li>
              <h3> <?php echo $album["author"] ?> </h3>
            </li>
            <li>
              <h4> <?php echo $album["year"] ?> </h4>
            </li>
          </ul>
        </div>
      <?php } ?>

    </div>
  </main>

</body>
</html>