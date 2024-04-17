<?php
include('dbcon.php');
if(isset($_POST['add_students']))
{
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $age=$_POST['age'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $zip=$_POST['zip'];

    if($firstname==""||empty($firstname))
    {
        header('location:index2.php?message=You need to fill the first name!');
    }
    else
    {
        $query="insert into contact (`firstname`,`lastname`,`email`,`phone`,`age`,`city`,`state`,`zip`)
         values('$firstname','$lastname','$email','$phone','$age','$city','$state','$zip')";
        $result=mysqli_query($connection,$query);
        if(!$result)
        {
            die("Query failed".mysqli_error());
        }
        else{
            header('location:index2.php?insert_msg=Your data has been added');
        }

    }

}
?>