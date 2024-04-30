<?php
include('dbcon.php');
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
$query = "SELECT * FROM users";


$result = mysqli_query($connection, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($connection));
}

while ($user = mysqli_fetch_assoc($result)) {
    $imageName = $user['name']; 
    echo "<img src='imgs/$imageName' alt='Uploaded Image'>";
    echo "<div class='mt-4'></div>";
}


mysqli_close($connection);
?>
