<html>
    <head>
        <title>Login page</title>
        <!-- bootstrap link -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
        <style>
            #usernameInput {
    text-align: center;
    display: block;
    
}
        </style>
    </head>
    <body>
        <?php include('header.php'); ?>
        <?php 
            if(isset($_GET['message']))
            {
                echo "<div class='col-lg-4 alert alert-danger' role='alert'>".$_GET['message']."</div>";
            } ?>
            <?php 
            if(isset($_GET['login_message']))
            {
                echo "<div class='col-lg-4 alert alert-danger' role='alert'>".$_GET['login_message']."</div>";
            } ?>
        <div class="container login text-center col-lg-6">
            
            <h1 class="login_h1">LOGIN PAGE</h1>
            <form class="form text-center" action="login_process.php" method="post">
                <div class="col-lg-12">
                    <label for="email">EMAIL</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="col-lg-12" >
                    <label for="password">PASSWORD</label>
                    <input type="password" name="password" class="form-control" id="myInput">
                    <input type="checkbox" onclick="myFunction()"> Show Password
                </div>
                <div class="col-lg-12">
                    <button name="login" class="btn btn-danger">LOGIN</button>
                </div>
            </form>
        </div>
        <script>
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
