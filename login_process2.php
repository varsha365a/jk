<?php include('dbcon.php'); ?>
<?php session_start(); ?>
<?php 
if(isset($_POST['login']))
{
    $password=$_POST['password'];
    $email=$_POST['email'];
    $query="SELECT * FROM `contact` where `email`='$email' and `password`='$password'";

    //check if email and password are correct
    $result=mysqli_query($connection,$query);
    if (!$result)
    {
        die("Query failed".mysqli_error($connection));
    }
    else{
        $row=mysqli_num_rows($result);
        if($row == 1)
        {                
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header('location:login_open.php');
        }
        else
        {
            //valid reason to display when the username is wrong
            if(!$_POST['email'])
            {
                header('location:login2.php?message="Sorry your email id is incorrect! "');
            }
            else
            {
                //valid reason to display when the password is wrong
                header('location:login2.php?message="Sorry your password is incorrect! "');
            }
        }
    }   
}
?>