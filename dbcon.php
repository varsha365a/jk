<?php

// Establishing database connaction to the database name: football 
define("HOSTNAME","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","football");

// variable connection to use in all pages where database is to be accessed
$connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

?>