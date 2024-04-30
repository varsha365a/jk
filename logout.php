<?php

//to logout- start(calling the session), unset(delete variables) and destroy(delete session) the session.
session_start();
session_unset();
session_destroy();
//heads to the login page after logout.
header("location:index.php?login_message='You have been successfully logged out'");
?>