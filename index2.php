<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>RESPONSES</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet">

        <!-- Modal popup Script CDN -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php include('dbcon.php'); ?>
        <?php include('header.php'); ?>
        <div class="container">
            <div class="box1">
                <h1>CONTACT FORM</h1>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">ADD DETAILS</button>
            </div>
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <th>ID</th>
                    <th>FIRST-NAME</th>
                    <th>LAST-NAME</th>
                    <th>EMAIL</th>
                    <th>PHONE</th>
                    <th>AGE</th>
                    <th>CITY</th>
                    <th>STATE</th>
                    <th>ZIP</th>
                    <th>UPDATE</th>
                    <th>DELETE</th>
                </tr>
                <?php
                    $query="SELECT * FROM contact WHERE is_deleted = 0";
                    $result=mysqli_query($connection, $query);
                    if(!$result){
                        die("query failed". mysqli_error($connection));
                    }
                    else
                    {
                        while ($row = mysqli_fetch_assoc($result)) 
                        {?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['firstname']; ?></td>
                                <td><?php echo $row['lastname']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['phone']; ?></td>
                                <td><?php echo $row['age']; ?></td>
                                <td><?php echo $row['city']; ?></td>
                                <td><?php echo $row['state']; ?></td>
                                <td><?php echo $row['zip']; ?></td>
                                <td><a href='update_page1.php?id=<?php echo $row['id']; ?>' class="btn btn-success">UPDATE</a></td>
                                <td><button href='soft_delete.php?id=<?php echo $row['id']; ?>' onclick= "confirmDelete(<?php echo ($row['id']); ?>);" class="btn btn-danger">DELETE</button></td> 
                            </tr>
                     
               <?php 
            }
        } 
                ?>

      

                

            </table>

            <?php
                if(isset($_GET['message']))
                {
                    echo '<div class="alert alert-success" role="alert">'.$_GET['message'].'</div>';
                }
            ?>

            <?php
                if(isset($_GET['insert_msg']))
                {
                    echo '<div class="alert alert-success" role="alert">'.$_GET['insert_msg']."</div>";
                }
            ?>
            <?php
                if(isset($_GET['update_msg']))
                {
                    echo '<div class="alert alert-success" role="alert">'.$_GET['update_msg']."</div>";
                }
            ?>
            <?php
                if(isset($_GET['delete_msg']))
                {
                    echo '<div class="alert alert-danger" role="alert">'.$_GET['delete_msg']."</div>";
                }
            ?>

        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="insert_data.php">
                        <div class="form-group">
                            <label>First name</label>
                            <input type="text" name="firstname" class="form-control">
                        </div>
                            <label>Last name</label>
                            <input type="text" name="lastname" class="form-control">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Phone number</label>
                            <input type="text" name="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Age</label>
                            <input type="text" name="age" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" name="city" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>State</label>
                            <input type="text" name="state" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Zip Code</label>
                            <input type="text" name="zip" class="form-control">
                        </div>
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" name="add_students" value="ADD">
                </div>
                </div>
            </div>
        </div>

        </form>
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
<html>