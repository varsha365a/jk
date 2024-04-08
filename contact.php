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

    <div id="contact">
        <h1>Contact Us</h1>
        <form action="#" method="post">
            <div id="formname">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>  
            <div id="formemail">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div> 
            <div id="formtext">
                <label for="message">Message</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <div id="formsubmit">
                <input type="submit" value="Submit">
            </div>
            
        </form>
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7772.99113116181!2d80.26939772114869!3d13.067748564606497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52661c83945e0d%3A0x135ca5f116dbd0f4!2s811%2C%20Anna%20Salai%2C%20Mount%20Road%2C%20Anna%20Salai%2C%20Triplicane%2C%20Chennai%2C%20Tamil%20Nadu%20600002!5e0!3m2!1sen!2sin!4v1712057348279!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      
    <?php
    include "footer.php";
    ?>

</body>

</html>