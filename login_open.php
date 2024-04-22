<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>RESPONSES</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet">

        <!-- bootstrap link -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include('dbcon.php'); ?>
        <?php include('header.php'); ?>

            <?php
                if(isset($_GET['message']))
                {
                    echo '<div class="alert alert-danger" role="alert">'.$_GET['message'].'</div>';
                }
            ?>

            <?php
                if(isset($_GET['insert_msg']))
                {
                    echo "<div class='col-lg-4 alert alert-success' role='alert'>".$_GET['insert_msg']."</div>";
                }
            ?>
            <?php
                if(isset($_GET['update_msg']))
                {
                    echo "<div class='col-lg-4 alert alert-success' role='alert'>".$_GET['update_msg']."</div>";
                }
            ?>
            <?php
                if(isset($_GET['delete_msg']))
                {
                    echo "<div class='col-lg-4 alert alert-danger' role='alert'>".$_GET['delete_msg']."</div>";
                }
            ?>
<?php 
session_start();
?>
<div class="mx-auto player_details container">
<?php
if(isset($_SESSION['email'])) {
    echo "<span class='player_details'>Hello " . htmlspecialchars($_SESSION['email']) . "</span><br><a href='logout.php' class='btn btn-danger'>LOGOUT</a>";
    $email = $_SESSION['email'];
    $query = "SELECT * FROM contact WHERE email='$email'";
    $result = mysqli_query($connection, $query);
    if(!$result) 
    {
        die("Query failed: " . mysqli_error($connection));
    } 
    else 
    {
        while ($row = mysqli_fetch_assoc($result)) 
        {
            ?>
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
                <a href='update_page1.php?id=<?php echo htmlspecialchars($row['id']); ?>' class="btn btn-success">EDIT</a>
                <button onclick="confirmDelete(<?php echo htmlspecialchars($row['id']); ?>);" class="btn btn-danger">DELETE</button>
            </div>
            <?php 
        }
    } 
}
else
{
    header('location:login.php?login_message=You need to login to enter the site !');
}

?>
</div>
<script>
    function confirmDelete(id) {
        if (confirm("Are you sure you want to delete this record?")) {
            window.location.href = "soft_delete.php?id=" + id;
        }
        else{
            window.location.href ="index.php";
        }
    }
</script>
<?php include('footer.php'); ?>
</body>
</html>