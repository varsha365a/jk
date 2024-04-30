<?php
// Database connection for collecting details from the database.
include('dbcon.php');

if(isset($_POST['add_students']))
// Checking if all the details are entered.
{
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $check_pass=$_POST['check_password'];
    $phone=$_POST['phone'];
    $age=$_POST['age'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $zip=$_POST['zip'];
      
    //check if firstname is entered
    if($firstname==""||empty($firstname))
    {
        // error alert message on finding empty firstname input 
        header('location:join_us.php?message=You need to fill the first name!');
    }
    else
    {
        // sql query to insert values entered in form into the database through $query variable
        $query="insert into contact (`firstname`,`lastname`,`email`,`password`,`phone`,`age`,`city`,`state`,`zip`)
         values('$firstname','$lastname','$email','$password','$phone','$age','$city','$state','$zip')";
        $result=mysqli_query($connection,$query);
        if(!$result)
        {
            die("Query failed".mysqli_error($connection));
        }
        // message displayed on home page as a player registers...
        else
        {
            // header('location:join_us.php?insert=Your+data+has+been+added');
            if(trim($_POST['password'])==trim($_POST['check_password']))
            {
                header('location:index.php');
            }
            else
            {
                header('location:join_us.php?pass_msg=Your passwords do not match !');
            }

        }

    }
}
?>