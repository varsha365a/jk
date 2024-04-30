<html>

<head>
    <title>Football India - News</title>

    <!-- meta data -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css file link -->
    <link rel="stylesheet" href="css/style.css">
    <!-- bootstrap link -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>

    <!-- Philosopher font library-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">


</head>

<body>

  <?php 
  include "header.php";
  
  ?>
  <!-- Divs for news content -->
  <div class="container text-center">
    <div class="row">
      <div class="col news">
        <?php 
        include 'display_image.php';
        ?> 
      </div>
  </div>
  <?php
  include "footer.php";
  ?>
</body>

</html>