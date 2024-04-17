<html>
    <head>
        <title>Login page</title>
        <!-- bootstrap link -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include('header.php'); ?>
        <div class="container login">
            <h1>LOGIN PAGE</h1>
            <form>
                <div class="form-group">
                    <label for="username">USERNAME</label>
                    <input type="text" name="username">
                </div>
                <div class="form-group">
                    <label for="email">EMAIL</label>
                    <input type="email" name="email">
                </div>
            </form>
        </div>
        <?php include('footer.php'); ?>
    </body>
</html>