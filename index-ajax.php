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

      

    </div>
  </main>

  

  <!-- Template -->
  <script id="handlebars-template" type="text/x-handlebars-template">

    <div class="album">
        <ul>
          <li>
            <img src="{{ poster }}" alt="">
          </li>
          <li>
            <h2>{{ title }}</h2>
          </li>
          <li>
            <h3>{{ author }}</h3>
          </li>
          <li>
            <h4>{{ year }}</h4>
          </li>
        </ul>
    </div>
    
  </script>

  <!-------------------- JS -------------------->
  <!-- Jquery -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js'></script>

  <!-- handlebars -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>

  <!-- Main JS -->
  <script src="dist/js/main.js"></script>


</body>
</html>