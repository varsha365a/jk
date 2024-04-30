<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>RESPONSES</title>

        <!-- CSS file link -->
        <link href="css/style.css" rel="stylesheet">

        <!-- bootstrap link -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <!-- Including database and header to this page -->
        <?php include('dbcon.php'); ?>
        <?php include('header.php'); ?>

            
            <?php
                // success message displayed when a player edits their details
                if(isset($_GET['update_msg']))
                {
                    echo "<div class='col-lg-4 alert alert-success' role='alert'>".$_GET['update_msg']."</div>";
                }
            ?>
            
<?php 
// Starting a PHP Session to this page
session_start();
?>
<div class="mx-auto player_details container">
<?php
    // Displaying the name of the player while login using session function...
    if(isset($_SESSION['email'])) {
    
        $email = $_SESSION['email'];

    // SQL query to select all items from the table where email is same as the entered email.
    $query = "SELECT * FROM contact WHERE email='$email' and is_deleted!=1";
    $is_deleted="SELECT is_deleted FROM contact";
    $result = mysqli_query($connection, $query);
    if(!$result) 
    {
        die("Query failed: " . mysqli_error($connection));
    } 
    else 
    {
        while ($row = mysqli_fetch_assoc($result)) 
        {
            echo "<span class='player_details'>Hello " .($_SESSION['email']) . "</span><br><a href='logout.php' class='btn btn-danger'>LOGOUT</a>";
            
            ?>
            <!-- table displayed on login of player -->
            <div class="user-info">
                <table class="table table-striped table-bordered">
                    <tr><th>ID:</th><td><?php echo htmlspecialchars($row['id']); ?><br></tr>
                    <tr><th>Firstname:</th> <td><?php echo htmlspecialchars($row['firstname']); ?><br></tr>
                    <tr><th>Lastname:</th> <td><?php echo htmlspecialchars($row['lastname']); ?><br></tr>
                    <tr><th>Email:</th> <td><?php echo htmlspecialchars($row['email']); ?><br></tr>
                    <tr><th>Password:</th> <td><?php echo htmlspecialchars($row['password']); ?><br></tr>
                    <tr><th>Phone:</th> <td><?php echo htmlspecialchars($row['phone']); ?><br></tr>
                    <tr><th>Age:</th> <td><?php echo htmlspecialchars($row['age']); ?><br></tr>
                    <tr><th>City:</th> <td><?php echo htmlspecialchars($row['city']); ?><br></tr>
                    <tr><th>State:</th> <td><?php echo htmlspecialchars($row['state']); ?><br></tr>
                    <tr><th>Zip:</th> <td><?php echo htmlspecialchars($row['zip']); ?><br></tr>
                </table>
            </div>
            <!-- End of the table  -->

                
            
            
            <!-- Edit details button code -->
            <a href='update_page1.php?id=<?php echo htmlspecialchars($row['id']); ?>' class="btn btn-success">EDIT</a>
            
            <!-- Soft delete details button code -->
            <button onclick="confirmDelete(<?php echo htmlspecialchars($row['id']); ?>);" class="btn btn-danger">DELETE</button>
            <?php 
        }
    }
    } 
else
{
    // message to display on unauthorized login
    header('location:login.php?login_message=You need to login to enter the site !');
}

?>
</div>
<script>
    // soft delete function confirmation dialogue box display
    function confirmDelete(id) {
        if (confirm("Are you sure you want to delete this record? Note: You need to register with a different email id or password next time!")) 
        {
            window.location.href = "soft_delete.php?id=" + id;
        }
        else
        {
            window.location.href ="login_open.php";
        }
    }
</script>
<?php include('footer.php'); ?>
</body>
</html>