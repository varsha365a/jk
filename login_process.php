<?php include('dbcon.php'); ?>
<?php session_start(); ?>
<?php 
if(isset($_POST['login']))
{
    $password=$_POST['password'];
    $email=$_POST['email'];    
    
    $query="SELECT * FROM `contact` where `email`='$email' and `password`='$password' ";
    $result=mysqli_query($connection,$query);
    if (!$result)
    {
        die("Query failed".mysqli_error());
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
            if(!$_POST['email'])
            {
                header('location:login.php?message="Sorry your email id is incorrect! "');
            }
            else
            {
                header('location:login.php?message="Sorry your password is incorrect! "');
            }
        }
    }   
}
?>