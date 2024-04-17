<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

    <?php
    include('dbcon.php');
    ?>

    <?php  
        if(isset($_GET['id']))
        {
            $id=$_GET['id'];
        
            $query="SELECT * from `contact` where `id` = '$id' ";
            $result=mysqli_query($connection, $query);
            if(!$result){
                die("query failed". mysqli_error($connection));
            }
            else
            {
                $row=mysqli_fetch_assoc($result);   
            }
        }

    ?>

    <?php
    if(isset($_POST['update_people']))
    {
        if(isset($_GET['id_new'])){
            $idnew=$_GET['id_new'];
        }
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $age=$_POST['age'];
        $city=$_POST['city'];
        $state=$_POST['state'];
        $zip=$_POST['zip'];

        $query="update `contact` set `firstname`='$firstname', 
        `lastname`='$lastname',`email`='$email',`phone`='$phone',`age`='$age',`city`='$city',`state`='$state',`zip`='$zip' where `id` = '$idnew'";
        $result=mysqli_query($connection,$query);
        if(!$result){
            die("query failed". mysqli_error($connection));
        }
        else{
            header('location:contact.php?update_msg=You have successfully updated');
        }
    }
    
    ?>


    <div class="container">
        <h1>CONTACT UPDATE FORM</h1>
    <form action="update_page1.php?id_new=<?php echo $id; ?>" method="post">
        <div class="form-group">
        <label>First name</label>
        <input type="text" name="firstname" class="form-control" value="<?php echo $row['firstname'] ?>">
        </div>
        <label>Last name</label>
        <input type="text" name="lastname" class="form-control" value="<?php echo $row['lastname'] ?>">
        <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control" value="<?php echo $row['email'] ?>">
        </div>
        <div class="form-group">
        <label>Phone number</label>
        <input type="text" name="phone" class="form-control" value="<?php echo $row['phone'] ?>">
        </div>
        <div class="form-group">
        <label>Age</label>
        <input type="text" name="age" class="form-control" value="<?php echo $row['age'] ?>">
        </div>
        <div class="form-group">
        <label>City</label>
        <input type="text" name="city" class="form-control" value="<?php echo $row['city'] ?>">
        </div>
        <div class="form-group">
        <label>State</label>
        <input type="text" name="state" class="form-control" value="<?php echo $row['state'] ?>">
        </div>
        <div class="form-group">
        <label>Zip Code</label>
        <input type="text" name="zip" class="form-control" value="<?php echo $row['zip'] ?>">
        </div>
        <input type="submit" class="btn btn-success" name="update_people" value="UPDATE">
    </form>
</div>
</body>
</html>

