<html>

<head>
    <title>Football India - Contact</title>

    <!-- meta data -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css file link -->
    <link rel="stylesheet" href="css/style.css">
    <!-- bootstrap link -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>

    <!-- Philosopher font library-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">


</head>

<body>
    
    <?php 
    include "header.php";
    ?>
    
    <!-- Contact form -->
    <!-- firstname, lastname, email, phone, age, city, state, zip -->
    <div id="contact">
        <h1>Register Yourself</h1>
        <span class="required_fields" style="float:right;">* required field</span> <br>
        <form method='post' action="insert_data.php" class="row g-3">
        <div class="col-md-6">
            <label for="inputFirstName" class="form-label">First Name<span class="required_field"> *</span></label>
            <input type="name" name="firstname" class="form-control" id="inputFirstName" required>
            <?php
               if(isset($_POST['submit']) && trim($_POST['firstname']))
               {
                   $firstname=$_POST['firstname'];
                   if(preg_match('/^[a-zA-Z]+(?:[\s\.][a-zA-Z]+)*$/',$firstname))
                   {
                       echo "<span style='color:green;'>*Name accepted</span>";
                   }
                   elseif(!preg_match("/^[a-zA-Z]+$/", $firstname)) 
                    {
                    echo "<span style='color:red;'>Only letters are allowed in the name</span>";
                    } 
                }
            ?>
        </div>
        <div class="col-md-6">
            <label for="inputLastName" class="form-label">Last Name<span class="required_field"> *</span></label>
            <input type="name" name="lastname" class="form-control" id="inputLastName" required>
            <?php
               if(isset($_POST['submit'])&& trim($_POST['lastname']))
               {
                   $lastname=$_POST['firstname'];
                   if(preg_match('/^[a-zA-Z]+(?:[\s\.][a-zA-Z]+)*$/',$lastname))
                   {
                       echo "<span style='color:green;'>*Name accepted</span>";
                   }
                   elseif(!preg_match("/^[a-zA-Z]+$/", $lastname)) 
                    {
                    echo "<span style='color:red;'>Only letters are allowed in the name</span>";
                    } 
                } 
            ?>
        </div>
        <div class="col-md-12">
            <label for="inputEmail" class="form-label">Email<span class="required_field"> *</span></label>
            <input type="text" name='email' class="form-control" id="inputEmail" required>
            <?php
                if(isset($_POST['submit'])&& trim($_POST['email']))
                {
                    $email=$_POST['email'];
                    if(!preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',$email))
                    {
                        echo "<span style='color:red;'>*Invalid email id</span>";
                    }
                    else 
                    {
                        echo "<span style='color:green;'>*Valid Email id</span>";
                    }
                }
            ?>
        </div>

        <div class="col-md-12">
            <label for="password" class="form-label">Password<span class="required_field"> *</span></label>
            <input type="text" name='password' class="form-control" id="password" required>
            [Minimum 8 characters, atleast one uppercase letter, lowercase letter, special character and one digit]
            <?php
                if(isset($_POST['submit'])&& trim($_POST['password'])!='')
                {
                    $password=$_POST['password'];
                    if(!preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%^&*()\-_=+{};:,<.>]).{8,}$/ix',$password ))
                    {
                        echo "<span style='color:red;'>*Invalid password</span>";
                    }
                    else 
                    {
                        echo "<span style='color:green;'>*Valid password</span>";
                    }
                }
            ?>
        </div>
        
        <div class="col-12">
            <label for="inputphone" class="form-label">Mobile Number<span class="required_field"> *</span></label>
            <input type="tel" name="phone" class="form-control" id="inputphone" minlength="3" maxlength="10" >
            <?php
                if(isset($_POST['submit'])&& trim($_POST['phone']))
                {
                    $phone=$_POST['phone'];
                    if(preg_match('/^[6789][0-9]{9}$/',$phone))
                    {
                        echo "<span style='color:green;'>*Valid mobile number-</span>";
                    }
                    elseif (empty($phone)) {
                        echo "Mobile number is required.";
                    }
                    elseif(preg_match('/^([a-zA-Z]+)([0-9]*)$/',$phone)){
                        echo "<span style='color:red;'>Mobile number cannot contain alphabets</span>";
                    }

                    else 
                    {
                        echo "<span style='color:green;'>*Valid mobile number</span>";
                    }
                }
            ?>
        </div>
        <div class="col-md-6">
            <label for="inputZip" class="form-label">Age<span class="required_field"> *</span></label>
            <input type="number" name="age" class="form-control" id="inputZip" required>
            <?php
                if(isset($_POST['submit'])&& trim($_POST['age']))
                {
                    $age=$_POST['age'];
                    if(!preg_match('/^(1[0-9]|2[0-9]|3[0-9]|40)$/',$age))
                    {
                        echo "<span style='color:red;'>*Age limit- [10-40]</span>";
                    }
                    else 
                    {
                        echo "<span style='color:green;'>*Age accepted</span>";
                    }
                }
            ?>
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">City</label>
            <input type="text" name="city" class="form-control" id="inputCity">
            <?php
                if(isset($_POST['submit'])&& trim($_POST['city']))
                {
                    $city=$_POST['city'];
                    if(!preg_match("/^[a-zA-Z]+$/", $city)) 
                    {
                    echo "<span style='color:red;'>Only letters are allowed in the name</span>";
                    } 
                }
            ?>
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">State</label>
            <select id="inputState" name="state" class="form-select">
            <option selected>Choose...</option>
            <option>Tamil Nadu</option>
            <option>Kerala</option>
            <option>Maharashtra</option>
            <option>Andhra Pradesh</option>
            </select>
        </div>
        <div class="col-md-2">
            <label for="inputZip" class="form-label">Zip</label>
            <input type="text" name="zip" class="form-control" id="inputZip" maxlength="6">
            <?php
                if(isset($_POST['submit'])&& trim($_POST['zip']))
                {
                    $zip=$_POST['zip'];
                    if(preg_match("/^[a-zA-Z]+$/", $zip)) 
                    {
                    echo "<span style='color:red;'>Only letters are allowed in the name</span>";
                    } 
                }
            ?>
        </div>
        <div class="col-12">
            <button type="submit" name="add_students" class="btn btn-primary">REGISTER</button>
        </div>
        </form>
        <div></div>
        <div class="col-12">
        Already a registered player?
            <a href="login.php"><button type="submit" name="add_students" class="btn btn-primary">LOGIN</button></a>
        </div>
        </div>        
        
    <!-- Map url of a random place -->
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7772.99113116181!2d80.26939772114869!3d13.067748564606497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52661c83945e0d%3A0x135ca5f116dbd0f4!2s811%2C%20Anna%20Salai%2C%20Mount%20Road%2C%20Anna%20Salai%2C%20Triplicane%2C%20Chennai%2C%20Tamil%20Nadu%20600002!5e0!3m2!1sen!2sin!4v1712057348279!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      
    <?php
    include "footer.php";
    ?>

</body>

</html>