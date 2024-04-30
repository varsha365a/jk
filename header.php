<html>
<head>
  <link rel="stylesheet" href="css/style.css">
  <!-- Montserrat font library -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <!-- Navbar for header  -->
  <nav class="navbar ">
    <div class="container">
      <a id=link href="index.php">HOME</a>
      <a id=link href="matches.php">MATCHES</a>
      <img src="imgs/logo.jpg" alt="logo" height="100" id="logo">      
      <a id=link href="gallery.php">GALLERY</a>
      <a id=link href="join_us.php">JOIN US</a>
      <a href="login.php"><button type="submit" name="add_students" class="btn btn-danger">LOGIN</button></a>
      <a class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><img src="imgs/profile.png" alt="logo" height="50" id="logo"></a>
    </div>
  </nav>

  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel">PLAYER DETAILS</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
   
  <?php 
            if(isset($_GET['message']))
            // to display an alert message when a player logs out.
            {
                echo "<div class='col-lg-4 alert alert-danger' role='alert'>".$_GET['message']."</div>";
            } ?>
            <?php 
            if(isset($_GET['login_message']))
            {
                echo "<div class='col-lg-11 alert alert-danger' role='alert'>".$_GET['login_message']."</div>";
            } ?>
        <div class="login text-center">
            <!-- Login page structure using form class of bootstrap -->
            <h1 class="login_h1">LOGIN</h1>
            <form class="form text-center" action="login_process2.php" method="post">
                <div class="col-lg-12">
                    <label for="email">EMAIL</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="col-lg-12" >
                    <label for="password">PASSWORD</label>
                    <input type="password" name="password" id="myInput" class="form-control">
                </div>
                <!-- Check box to initiate show password function -->
                <div class="col-lg-12 mt-4">
                    <input type="checkbox" onclick="myFunction()"> Show Password
                </div>
                <div class="col-lg-12 mt-4">
                    <!-- Login button -->
                    <button name="login" class="btn btn-primary">LOGIN</button>
                </div>
            </form>
        </div>
        <?php
            // message displayed once a player deletes their record
            if(isset($_GET['delete_msg']))
            {
                echo "<div class='col-lg-4 alert alert-danger' role='alert'>".$_GET['delete_msg']."</div>";
            }
        ?>

        <script>
            // javascript function to show and hide the password
            function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
}
        </script>

  </div>
</div>
  
</body>
</html>