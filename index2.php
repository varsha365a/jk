<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>RESPONSES</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet">

    </head>
    <body>
        <?php include('dbcon.php'); ?>

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


        <div class="container">
            <div class="box1">
                
                <!-- <a href="contact.php"><button type="button" class="btn btn-primary button_redirectform">GO BACK TO FORM</button></a> -->

            </div>
            <h1>PLAYER DETAILS</h1>
                <?php
                    $query="SELECT * FROM contact WHERE is_deleted = 0 and id=1 ";
                    $result=mysqli_query($connection, $query);
                    if(!$result){
                        die("query failed". mysqli_error($connection));
                    }
                    else
                    {
                        while ($row = mysqli_fetch_assoc($result)) 
                        {?>
                            <div class="user-info">
                                <strong>ID:</strong> <?php echo $row['id']; ?><br>
                                <strong>Firstname:</strong> <?php echo $row['firstname']; ?><br>
                                <strong>Lastname:</strong> <?php echo $row['lastname']; ?><br>
                                <strong>Email:</strong> <?php echo $row['email']; ?><br>
                                <strong>Password:</strong> <?php echo $row['password']; ?><br>
                                <strong>Phone:</strong> <?php echo $row['phone']; ?><br>
                                <strong>Age:</strong> <?php echo $row['age']; ?><br>
                                <strong>City:</strong> <?php echo $row['city']; ?><br>
                                <strong>State:</strong> <?php echo $row['state']; ?><br>
                                <strong>Zip:</strong> <?php echo $row['zip']; ?><br>
                                
                                <a href='update_page1.php?id=<?php echo $row['id']; ?>' class="btn btn-success">EDIT</a>
                                <button onclick="confirmDelete(<?php echo $row['id']; ?>);" class="btn btn-danger">DELETE</button>
                            </div>
                     
                        <?php 
                        }
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

    </body>
<html>