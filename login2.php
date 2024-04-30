<html>
    <head>
        <title>Football India - Login</title>
        <!-- bootstrap link -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php include('header.php'); ?>
        <?php 
            if(isset($_GET['message']))
            // to display an alert message when a player logs out.
            {
                echo "<div class='col-lg-11 alert alert-danger' role='alert'>".$_GET['message']."</div>";
            } ?>
            <?php 
            if(isset($_GET['login_message']))
            {
                echo "<div class='col-lg-11 alert alert-danger' role='alert'>".$_GET['login_message']."</div>";
            } ?>
        <div class="container login text-center col-lg-6">
            <!-- Login page structure using form class of bootstrap -->
            <h1 class="login_h1">LOGIN PAGE</h1>
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
                echo "<div class='col-lg-11 alert alert-danger' role='alert'>".$_GET['delete_msg']."</div>";
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
        <?php include('footer.php'); ?>
    </body>
</html>
