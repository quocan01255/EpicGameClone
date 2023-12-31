<!doctype html>
<?php
  session_start();
  include('config.php');
  require '../site.php'
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="/projectEG-php/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/projectEG-php/assets/css/browsestyle.css">
  <title>Epic Game Store | Office Site</title>
  <link rel="shortcut icon" href="https://static-assets-prod.epicgames.com/epic-store/static/webpack/../favicon.ico">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="/projectEG-php/assets/fonts/fontawesome-free-6.2.0-web/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="/projectEG-php/assets/css/header.css">
  <link rel="stylesheet" type="text/css" href="/projectEG-php/assets/css/base.css">
  <link rel="stylesheet" type="text/css" href="/projectEG-php/assets/css/footer.css">
  <link rel="stylesheet" href="/projectEG-php/assets/css/searchbar.css">
</head>
<body>
  <?php
    load_header();
    load_loader();
  ?>
  <div id="main">
    <div class="container">
      <?php
        load_searchbar();
        include('content.php');
      ?>
    </div>
    
  </div>
  <?php
    load_footer();
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script type="text/js" href="./customjs.js"></script>
  <script src="/projectEG-php/assets/js/loader.js" defer></script>
</body>
</html>



