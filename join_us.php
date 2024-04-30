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
    
    <?php include('dbcon.php') ?>
    <?php 
    include "header.php";
    ?>
    
    <?php
        // success message displayed when a player edits their details
        if(isset($_GET['pass_msg']))
        {
            echo "<div class='col-lg-3 alert alert-danger' role='alert'>".$_GET['pass_msg']."</div>";
        }
    ?>
    <?php
        // success message displayed when the player registers...
        if(isset($_GET['insert']))
        {
            echo "<div class='col-lg-3 alert alert-success' role='alert'>".$_GET['insert']."</div>";
        }
    ?>

    <?php
        // message displayed when first name input is empty while submitting 
        if(isset($_GET['message']))
        {
            echo '<div class="alert alert-danger" role="alert">'.$_GET['message'].'</div>';
        }
    ?>

    <!-- Contact form -->
    <!-- firstname, lastname, email, phone, age, city, state, zip -->
    <div class=container>    
        <div id="contact">
            <h1>Register Yourself</h1>
            <span class="required_fields" style="float:right;">* required field</span> <br>
            <form method='post' action="insert_data.php" class="row g-3">
                <div class="col-md-6">
                    <label for="inputFirstName" class="form-label">First Name<span class="required_field"> *</span></label>
                    <input 
                    type="name" 
                    name="firstname" 
                    class="form-control" 
                    pattern="^[a-zA-Z]+(?:[\s\.][a-zA-Z]+)*$" 
                    id="inputFirstName"
                    title="Please enter a valid First name (no digits or special charaters)"
                    >
                </div>

                <div class="col-md-6">
                    <label for="inputLastName" class="form-label">Last Name</label>
                    <input type="name" 
                    name="lastname" 
                    class="form-control" 
                    pattern="^[a-zA-Z]+(?:[\s\.][a-zA-Z]+)*$" 
                    title="Please enter a valid Last name (no digits or special charaters)"
                    id="inputLastName">
                    
                </div>
                <div class="col-md-12">
                    <label for="inputEmail" class="form-label">Email<span class="required_field"> *</span></label>
                    <input type="text" 
                    name='email' 
                    class="form-control" 
                    pattern="^[\w\+\-]+(\.[\w\+\-]+)*@([a-z\d\-]+\.)+[a-z]{2,6}$" 
                    title="Please enter a valid email address (e.g., example@example.com)"
                    id="inputEmail" required>
                    
                </div>

                <div class="col-md-12">
                    <label for="password" class="form-label">Password<span class="required_field"> *</span></label>
                    <input type="password" 
                    name='password' 
                    class="form-control" 
                    pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%^&*()\-_=+{};:,<.>]).{8,}$" 
                    title="[Minimum 8 characters, atleast one uppercase letter, 
                    lowercase letter, special character and one digit]"
                    id="password" required>
                
                </div>

                <div class="col-md-12">
                    <label for="check_pass" class="form-label">Re-enter Password<span class="required_field"> *</span></label>
                    <input type="password" 
                    name='check_password' 
                    class="form-control" 
                    pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%^&*()\-_=+{};:,<.>]).{8,}$" 
                    title="Please enter the password same as the one entered above "
                    id="check_pass" required>
                    
                </div>
                
                <div class="col-12">
                    <label for="inputphone" class="form-label">Mobile Number<span class="required_field"> *</span></label>
                    <input type="number" 
                    name="phone" 
                    class="form-control" 
                    id="inputphone" 
                    pattern="^[6789][0-9]{9}$" 
                    title="Please enter a valid phone number with digits only (e.g., 1234567890)"
                    minlength="3" 
                    maxlength="10" required >
                    
                </div>
                <div class="col-md-6">
                    <label for="inputAge" class="form-label">Age<span class="required_field"> *</span></label>
                    <input type="number" 
                    name="age" 
                    class="form-control" 
                    pattern="^(1[0-9]|2[0-9]|3[0-9]|40)$" 
                    title="Please enter your age !(no letters or special charaters) "
                    id="inputAge"
                    maxlength="3" required>
                    
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" 
                    name="city" 
                    class="form-control" 
                    pattern="^[a-zA-Z]+$" 
                    title="Please enter a valid City (no digits or special charaters)"
                    id="inputCity">
                    
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">State</label>
                    <select id="inputState" name="state" class="form-select">
                    <option selected>Choose State</option>
                    <option>Tamil Nadu</option>
                    <option>Kerala</option>
                    <option>Maharashtra</option>
                    <option>Andhra Pradesh</option>
                    <option>Other</option>
                    </select>
                </div>

                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input type="text" 
                    name="zip" 
                    class="form-control"  
                    title="Please enter a valid 6 digit pincode (no letters or special charaters)"
                    id="inputZip" 
                    maxlength="6"> 
                </div>

                <div class="col-12">
                    <button type="submit" name="add_students" class="btn btn-primary">REGISTER</button>
                </div>
            
                


            </form>

            <div class="col-12">
                Already a registered player?
                <a href="login.php">
                    <button type="submit" name="add_students" class="btn btn-primary">LOGIN</button>
                </a>
            </div>
        </div>  
        
        <!-- Map url of a random place -->
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7772.99113116181!2d80.26939772114869!3d13.067748564606497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52661c83945e0d%3A0x135ca5f116dbd0f4!2s811%2C%20Anna%20Salai%2C%20Mount%20Road%2C%20Anna%20Salai%2C%20Triplicane%2C%20Chennai%2C%20Tamil%20Nadu%20600002!5e0!3m2!1sen!2sin!4v1712057348279!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </div>
    
        

      
    <?php
    include "footer.php";
    ?>

</body>

</html>